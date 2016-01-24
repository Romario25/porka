<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 04.01.16
 * Time: 16:34
 */

namespace app\components\widgets;


use app\models\PhotoCatalog;
use app\models\Video;
use yii\base\Widget;

class RandomizeWidget extends Widget
{

    public $type;
    public $currentId;

    public function run(){
        $model = null;
        if($this->type == 'video'){
            $model = Video::find()->where('id <> :id', [':id'=>$this->currentId])->orderBy('RAND()')->limit(3)->all();
        } else {
            $model = PhotoCatalog::find()->where('id <> :id', [':id'=>$this->currentId])->orderBy('RAND()')->limit(4)->all();
        }

        return $this->render(($this->type == 'video')?'randomize_video':'randomize_photo', [
            'model'=>$model
        ]);
    }

}