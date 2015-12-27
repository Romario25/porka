<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 26.12.15
 * Time: 18:07
 */

namespace app\controllers;


use app\models\Video;
use yii\web\Controller;
use yii\web\HttpException;

class VideoController extends Controller
{
    public function actionView($url = null){
        $video = Video::find()->where("url = :url", [":url"=>$url])->one();

        if($video == null) throw new HttpException(404);

        return $this->render('view', ['video'=>$video]);
    }

    public function actionIndex(){

        $videos = Video::find()->all();

        return $this->render('index', ['videos'=>$videos]);
    }
}