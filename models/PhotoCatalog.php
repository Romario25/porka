<?php

namespace app\models;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "photo_catalog".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category_id
 * @property string $create_at
 * @property string $update_at
 * @property string $description
 * @property integer $plus
 * @property integer $minus
 * @property integer $hits
 * @property string $url
 * @property Category $category
 * @property Photos[] $photos
 */
class PhotoCatalog extends \yii\db\ActiveRecord
{

    /**
     * @var UploadedFile[]
     */
    public $photosUpload;

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_at',
                'updatedAtAttribute' => 'update_at',
                'value' => new Expression('NOW()'),
            ],

            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'url',
            ],
        ];
    }



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo_catalog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'description', 'url'], 'required'],
            [['category_id', 'plus', 'minus', 'hits'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['description'], 'string'],
            ['photosUpload', 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 20],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'description' => 'Description',
            'plus' => 'Plus',
            'minus' => 'Minus',
            'hits' => 'Hits',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photos::className(), ['catalog_id' => 'id'])->select("url")->asArray()->column();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotosCount()
    {
        return $this->hasMany(Photos::className(), ['catalog_id' => 'id'])->count("*");
    }

    public function afterSave($insert, $changedAttributes)
    {
        if($this->uploadAmazonPhotos()){
            parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
        }

    }


    /**
     *
     * Метод загружает фото на амазон и сохраняет в бд путь до фото на амазоне
     *
     * @return bool
     */
    private function uploadAmazonPhotos(){
        $config = ArrayHelper::map(Config::find()->all(), 'name', 'value');

        $s3 = new S3Client([
            'version'     => 'latest',
            'region'      => 'us-west-2',
            'credentials' => [
                'key'    => $config['amazon_key'],
                'secret' => $config['amazon_secret']
            ]
        ]);
        try{

            foreach($this->photosUpload as $photo){
                $nameFile = time() . '_'.$photo->baseName.'.' . $photo->extension;
                $res = $s3->putObject([
                    'Bucket' => $config['amazon_bucket'],
                    'Key' => 'photo/'.$nameFile,
                    'Body' => fopen($photo->tempName, 'rb'),
                    'ACL' => 'public-read'
                ]);
                $photos = new Photos();
                $photos->url = $res['ObjectURL'];
                $photos->catalog_id = $this->id;
                $photos->save();
            }

        } catch(S3Exception $e){
            echo $e->getMessage();
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return true;
    }
}
