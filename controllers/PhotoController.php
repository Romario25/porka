<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 26.12.15
 * Time: 22:57
 */

namespace app\controllers;


use app\models\PhotoCatalog;
use yii\web\Controller;
use yii\web\HttpException;

class PhotoController extends Controller
{
    public function actionIndex(){

        $photos = PhotoCatalog::find()->all();

        return $this->render("index", ['photos' => $photos]);
    }

    public function actionView($url){
        $model = PhotoCatalog::find()->where("url = :url", [
           ':url' => $url
        ])->one();



        if($model == null) throw new HttpException(404);

        // счетчик показов
        $model->updateCounters(['hits' => 1]);

        return $this->render('view', [
           'model' => $model
        ]);
    }
}