<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 20:31
 */

namespace app\components\widgets;


use app\models\PhotoCatalog;
use app\models\Video;
use yii\bootstrap\Widget;

class TeaserWidget extends Widget
{


    /**
     * Тип тизера (video/photo)
     *
     * @var string $type
     */
    public $type;

    public function run(){

        if($this->type == 'video'){
            $model = Video::find()->orderBy('hits DESC')->limit(5)->all();
        }

        if($this->type == 'photo'){
            $model = PhotoCatalog::find()->orderBy('hits DESC')->limit(5)->all();
        }



        return $this->render('teaser', ['model'=>$model, 'type'=>$this->type]);
    }

}