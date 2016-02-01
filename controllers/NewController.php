<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 22:01
 */

namespace app\controllers;


use app\models\PhotoCatalog;
use app\models\Video;
use yii\web\Controller;

class NewController extends Controller
{
    public function actionIndex(){
        $videos = Video::find()
            ->where("create_at > (now() - interval 7 day) && publish = 1")
            ->orderBy('id DESC')
            ->all();
        $photos = PhotoCatalog::find()
            ->where("create_at > (now() - interval 7 day) && publish = 1")
            ->orderBy('id DESC')
            ->all();

        return $this->render('index', [
            'videos'=>$videos,
            'photos'=>$photos
        ]);


    }
}