<?php

namespace app\models;

use Yii;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $title
 * @property string $src
 * @property string $url
 */
class Slider extends \yii\db\ActiveRecord
{

    /**
     * @var UploadedFile[]
     */
    public $fileImage;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title',  'url'], 'required'],
            [['title', 'src', 'url'], 'string', 'max' => 255],
            ['fileImage', 'file', 'skipOnEmpty' => ($this->isNewRecord)?false:true],
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
            'src' => 'Src',
            'url' => 'Url',
        ];
    }

    public function beforeSave($insert)
    {
        $nameFile = time() . '_'.$this->fileImage->baseName.'.' . $this->fileImage->extension;
        // сохраняем превьюшки
        Image::thumbnail($this->fileImage->tempName, 1140, 410)
            ->save('../web/uploads/slider/'.$nameFile, ['quality' => 80]);
        $this->src = "/uploads/slider/".$nameFile;

        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
