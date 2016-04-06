<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 04.02.16
 * Time: 12:41
 */

namespace app\controllers;


use app\models\Video;
use yii\web\Controller;
use yii\web\HttpException;

class PredvideoController extends Controller
{
    public function actionView($category = null, $url = null){
        $video = Video::find()->where("url = :url && publish = 0", [":url"=>$url])->one();

        if($video == null) throw new HttpException(404);

        // счетчик показов
        $video->updateCounters(['hits' => 1]);

        return $this->render('/video/view', ['video'=>$video]);
    }
}