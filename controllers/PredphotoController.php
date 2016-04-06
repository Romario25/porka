<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 04.02.16
 * Time: 12:38
 */

namespace app\controllers;




use app\models\PhotoCatalog;
use yii\web\Controller;
use yii\web\HttpException;

class PredphotoController extends Controller
{
    public function actionView($url){
        $model = PhotoCatalog::find()->where("url = :url && publish = 0", [
            ':url' => $url
        ])->one();



        if($model == null) throw new HttpException(404);


        return $this->render('/photo/view', [
            'model' => $model
        ]);
    }
}