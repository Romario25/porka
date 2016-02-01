<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 26.12.15
 * Time: 22:57
 */

namespace app\controllers;


use app\models\PhotoCatalog;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\HttpException;

class PhotoController extends Controller
{
    public function actionIndex(){

        // выполняем запрос
        $query = PhotoCatalog::find()->where("publish = 1");
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 16]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $photos = $query->offset($pages->offset)
            ->orderBy('id DESC')
            ->limit($pages->limit)
            ->all();



        return $this->render("index", [
            'photos' => $photos,
            'pages' => $pages,
        ]);
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