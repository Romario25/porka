<?php

namespace app\models;

use app\components\MyHelper;
use app\components\SitemapGenerate;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "video".
 *
 * @property integer $id
 * @property string $create_at
 * @property string $update_at
 * @property string $title
 * @property string $description
 * @property string $object_url
 * @property string $preview_url
 * @property integer $category_id
 * @property string $url
 * @property string $duration
 * @property string $actor
 * @property integer $storage
 * @property integer $publish
 * @property integer $block_edit
 * @property Category $category
 */
class Video extends \yii\db\ActiveRecord
{

    private $ftp_conig = [
        'ftp_server' => "160.153.16.7",
        'ftp_user_name' => "ataman@loveporno.net",
        'ftp_user_pass' => "ko6Shehah"
    ];


    /**
     * @var UploadedFile[]
     */
    public $videoFile;

    /**
     * @var UploadedFile[]
     */
    public $screenFiles;

    /**
     * @var UploadedFile
     */
    public $screenShotVideo;



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
                'attribute' => 'meta_title',
                'slugAttribute' => 'url',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'url', 'duration', 'actor'], 'required'],
            [['create_at', 'update_at', 'screenshot'], 'safe'],
            [['description', 'url', 'alt'], 'string'],
            [['category_id', 'storage', 'publish', 'block_edit'], 'integer'],
            ['screenShotVideo', 'image',
                'skipOnEmpty' => true,
                'extensions' => 'png, jpg',
                'minWidth'=>1160,
                'minHeight'=>620
            ],
            ['videoFile', 'file', 'skipOnEmpty' => true, 'extensions' => 'mp4', 'maxFiles' => 3, 'maxSize'=>2000000000],
         //   ['videoFile', 'countVideoValidator'],
            ['screenFiles', 'file', 'skipOnEmpty' => ($this->isNewRecord)?false:true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['title', 'object_url_0', 'object_url_1', 'object_url_2', 'preview_url', 'meta_title', 'meta_keywords', 'meta_description'], 'string', 'max' => 255]
        ];
    }

    public function countVideoValidator($attribute, $params){
        if(count($this->$attribute) < 3){
            $this->addError($attribute, "Не все расширения залиты !");
        }

    }

    public function beforeSave($insert)
    {
        if($this->storage == 2){
            if($this->uploadAmazon() && $this->uploadScreenShotVideo()){
                return parent::beforeSave($insert); // TODO: Change the autogenerated stub
            }
        } else if($this->storage == 1){
            if($this->uploadVideo() && $this->uploadScreenShotVideo()){
                return parent::beforeSave($insert); // TODO: Change the autogenerated stub
            }
        } else {
            if($this->uploadDaddyVideo() && $this->uploadScreenShotVideo()){
                return parent::beforeSave($insert); // TODO: Change the autogenerated stub
            }
        }



    }

    public function afterSave($insert, $changedAttributes)
    {
        $this->uploadScrrenVideo($this->id);
        SitemapGenerate::generate();
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }


    /**
     *
     * Сохранение видеофайла на амазоне
     *
     * @return bool
     */
    private function uploadAmazon(){

        $config = ArrayHelper::map(Config::find()->all(), 'name', 'value');
        $arr = [
            0 => ['w'=> 320, 'h'=> 240],
            1 => ['w'=> 640, 'h'=> 480],
            2 => ['w'=> 1280, 'h'=> 720],
        ];


        $s3 = new S3Client([
            'version'     => 'latest',
            'region'      => 'us-west-2',
            'credentials' => [
                'key'    => $config['amazon_key'],
                'secret' => $config['amazon_secret']
            ]
        ]);

        /**
         * TODO : Кусок кода конвектирует видео файл в разные расширения видео 320x240 640x480 1280x720
         * используя библиотеку ffmpeg
         */
//        $fileName = time() . '.' . $this->videoFile->extension;
//        foreach($arr as $item){
//            MyHelper::runExternal( "ffmpeg -i {$this->videoFile->tempName}  -s {$item['w']}x{$item['h']}  -y ".__DIR__."/../web/uploads/temp/{$item['w']}_{$item['h']}_$fileName");
//            try{
//                $res = $s3->putObject([
//                    'Bucket' => $config['amazon_bucket'],
//                    'Key' => "video/{$item['w']}_{$item['h']}_$fileName",
//                    'Body' => fopen(__DIR__."/../web/uploads/temp/{$item['w']}_{$item['h']}_".$fileName, 'rb'),
//                    'ACL' => 'public-read'
//                ]);
//
//                $this->object_url = $fileName;
//            } catch(S3Exception $e){
//                echo $e->getMessage();
//                Yii::$app->session->setFlash('error', $e->getMessage());
//            }
//            unlink(__DIR__."/../web/uploads/temp/{$item['w']}_{$item['h']}_$fileName");
//
//        }

//     echo "RESPONSE";
//       print_r($this->videoFile); die();
        if(count($this->videoFile) > 0){
            $fileName = time() . '.mp4';
            foreach($this->videoFile as $k => $file){
                $fileName = time(). $k . '.mp4';
                try{
                    $res = $s3->putObject([
                        'Bucket' => $config['amazon_bucket'],
                        'Key' => "video/$fileName",
                        'Body' => fopen($file->tempName, 'rb'),
                        'ACL' => 'public-read'
                    ]);
                    $field = "object_url_".$k;
                    $this->$field = $res['ObjectURL'];
                }catch(S3Exception $e){
                    echo $e->getMessage();
                    Yii::$app->session->setFlash('error', $e->getMessage());
                }
            }

        }


        return true;
    }


    /**
     *
     * Сохранение видеофайла в папке
     *
     * @return bool
     */
    private function uploadVideo(){

        $config = ArrayHelper::map(Config::find()->all(), 'name', 'value');
        $arr = [
            0 => ['w'=> 320, 'h'=> 240],
            1 => ['w'=> 640, 'h'=> 480],
            2 => ['w'=> 1280, 'h'=> 720],
        ];



        if(count($this->videoFile) > 0){

            foreach($this->videoFile as $k => $file){
                $fileName = time(). $k . '.mp4';
                $file->saveAs("../web/uploads/videos/".$fileName);
                $field = "object_url_".$k;
                $this->$field = "/uploads/videos/".$fileName;
            }
        }

        return true;
    }

    /**
     *
     * Сохранение видеофайла в Daddy
     *
     * @return bool
     */
    private function uploadDaddyVideo(){

        $config = ArrayHelper::map(Config::find()->all(), 'name', 'value');
        $arr = [
            0 => ['w'=> 320, 'h'=> 240],
            1 => ['w'=> 640, 'h'=> 480],
            2 => ['w'=> 1280, 'h'=> 720],
        ];



        if(count($this->videoFile) > 0){

            foreach($this->videoFile as $k => $file){
                $fileName = time(). $k . '.mp4';
                //print_r($file->tempName); die();
                $this->ftpUpload($file->tempName, 'videos', $fileName);

                //$file->saveAs("../web/uploads/videos/".$fileName);

                $field = "object_url_".$k;
                $this->$field = "http://loveporno.net/uploads/videos/".$fileName;
            }
        }

        return true;
    }

    private function uploadScrrenVideo($video_id){

        if(count($this->screenFiles) > 0){
            VideoScreens::deleteAll('video_id = :video_id', [':video_id'=>$video_id]);
        }

        foreach($this->screenFiles as $file){

            $nameFile = time() . '_'.$file->baseName.'.' . $file->extension;

            // сохраняем превьюшки
            Image::thumbnail($file->tempName, 336, 189)
                ->save('../web/uploads/screenvideo/'.$nameFile, ['quality' => 80]);

        //    if($file->saveAs("../web/uploads/screenvideo/".$nameFile)){
                // сохранение в бд url до скрина на облаке
                $videoScreen = new VideoScreens();
                $videoScreen->video_id = $video_id;
                $videoScreen->screen_url = "/uploads/screenvideo/".$nameFile;
                $videoScreen->save();
         //   }
        }

        return true;
    }

    private function uploadScreenShotVideo(){

            if($this->screenShotVideo != null){
                $nameFile = time() . '_'.$this->screenShotVideo->baseName.'.' . $this->screenShotVideo->extension;

                // сохраняем превьюшки
                Image::thumbnail($this->screenShotVideo->tempName, 1160, 620)
                    ->save('../web/uploads/screenshotvideo/'.$nameFile, ['quality' => 80]);

                $this->screenshot = $nameFile;
            }


        return true;
    }

    /**
     * Отправка файла на удаленный сервер , используя ftp
     *
     * @param $filePath - путь до файла, котоырый надо отправить
     * @param $folder - папка на удаленной сервере
     * @param $nameFile - название файла
     * @throws Exception
     */
    private function ftpUpload($filePath, $folder, $nameFile){

        $ftp_server = $this->ftp_conig['ftp_server'];
        $ftp_user_name = $this->ftp_conig['ftp_user_name'];
        $ftp_user_pass = $this->ftp_conig['ftp_user_pass'];
        $destination_file = "uploads/".$folder.'/'.$nameFile;
        $source_file = fopen($filePath, 'r');


        // установка соединения
        $conn_id = ftp_connect($ftp_server);

        // вход с именем пользователя и паролем
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

        ftp_pasv($conn_id, true);

        // проверка соединения
        if ((!$conn_id) || (!$login_result)) {
            echo "Не удалось установить соединение с FTP сервером!";
            echo "Попытка подключения к серверу $ftp_server под именем $ftp_user_name!";
            exit;
        } else {
            //  echo "Установлено соединение с FTP сервером $ftp_server под именем $ftp_user_name";
        }

        // закачивание файла
        $upload = ftp_fput($conn_id, $destination_file, $source_file, FTP_BINARY);

        // проверка результата
        if (!$upload) {
            echo "Не удалось закачать файл!";
        } else {
            //  echo "Файл $source_file закачен на $ftp_server под именем $destination_file";
        }

        // закрытие соединения
        ftp_close($conn_id);

    }

    private function ftp_delete($file){
        $ftp_server = $this->ftp_conig['ftp_server'];
        $ftp_user_name = $this->ftp_conig['ftp_user_name'];
        $ftp_user_pass = $this->ftp_conig['ftp_user_pass'];

        // установка соединения
        $conn_id = ftp_connect($ftp_server);

        // вход с именем пользователя и паролем
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
        ftp_pasv($conn_id, true);
        if ((!$conn_id) || (!$login_result)) {
            echo "Не удалось установить соединение с FTP сервером!";
            echo "Попытка подключения к серверу $ftp_server под именем $ftp_user_name!";
            exit;
        }

        // попытка удалить файл
//        if (ftp_delete($conn_id, $file)) {
//            echo "Файл $file удален\n";
//        } else {
//            echo "Не удалось удалить $file\n";
//        }
        $contents_on_server = ftp_nlist($conn_id, "uploads/videos/");

    //    print_r($contents_on_server); die();

        if(in_array($file, $contents_on_server)){
            ftp_delete($conn_id, "uploads/videos/".$file);
        }


        // закрытие соединения
        ftp_close($conn_id);

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'title' => 'Заголовок',
            'description' => 'Description',
            'object_url' => 'Object Url',
            'preview_url' => 'Preview Url',
            'category_id' => 'Category ID',
            'storage' => 'Хранилище',
            'meta_title' => "Тайтл страницы",
            'meta_keywords' => 'Keywords',
            'meta_description' => 'Description',
            'block_edit' => 'Блокировать редактирование'
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
    public function getScreens()
    {
        return $this->hasMany(VideoScreens::className(), ['video_id' => 'id'])->select('screen_url')->asArray()->column();
    }

    public function beforeDelete()
    {
        $photos = VideoScreens::find()->where([
            'video_id' => $this->id
        ])->all();

        foreach($photos as $photo){

            if(file_exists("../web".$photo->screen_url)){
                unlink("../web".$photo->screen_url);
            }
        }
        $config = ArrayHelper::map(Config::find()->all(), 'name', 'value');


        if($this->storage == 2){
            $s3 = new S3Client([
                'version'     => 'latest',
                'region'      => 'us-west-2',
                'credentials' => [
                    'key'    => $config['amazon_key'],
                    'secret' => $config['amazon_secret']
                ]
            ]);
            try{
                for($i=0; $i<3; $i++){
                    $field = "object_url_".$i;
                    if(!empty($this->$field)){
                        if($s3->doesObjectExist($config['amazon_bucket'], 'video/'.urldecode(mb_substr ($this->$field,  mb_strrpos($this->$field, '/')+1)))){
                            $res = $s3->deleteObject([
                                'Bucket' => $config['amazon_bucket'],
                                'Key' => 'video/'.urldecode(mb_substr ($this->$field,  mb_strrpos($this->$field, '/')+1)),
                            ]);
                        }

                    }
                }
            } catch(S3Exception $e){
                echo $e->getMessage();
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        } else if($this->storage == 1) {
            for($i=0; $i<3; $i++) {
                $field = "object_url_" . $i;
                if(!empty($this->$field) && file_exists("../web".$this->$field)){
                    unlink("../web".$this->$field);
                }

            }
        } else {
            for($i=0; $i<3; $i++) {
                $field = "object_url_" . $i;
                $arr = explode('/', $this->$field);
                $f = array_pop($arr);
                //echo $f;
                //die();
               // $f = '14529312860.mp4';
                $this->ftp_delete($f);
            }

        }

        //die();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public static function getVideoUrl($w, $h, $url){
        $config = ArrayHelper::map(Config::find()->all(), 'name', 'value');
        $s3 = new S3Client([
            'version'     => 'latest',
            'region'      => 'us-west-2',
            'credentials' => [
                'key'    => $config['amazon_key'],
                'secret' => $config['amazon_secret']
            ]
        ]);
        $result = "https://s3-us-west-2.amazonaws.com/".$config['amazon_bucket']."/video/".$w."_".$h."_".$url;

//        if($s3->doesObjectExist($config['amazon_bucket'], "video/".$w."_".$h."_".$url)){
//            return $result;
//        } else {
//            return "";
//        }
        return $result;


    }
}
