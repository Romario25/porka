<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 26.12.15
 * Time: 18:07
 */

namespace app\controllers;


use app\components\HitsCounter;
use app\models\Video;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\HttpException;

class VideoController extends Controller
{
    public function actionView($url = null){
        $video = Video::find()->where("url = :url", [":url"=>$url])->one();

        if($video == null) throw new HttpException(404);

        // счетчик показов
        $video->updateCounters(['hits' => 1]);

        return $this->render('view', ['video'=>$video]);
    }

    public function actionIndex(){

        $query = Video::find();
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 16]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $videos = $query->offset($pages->offset)
            ->orderBy('id DESC')
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'videos'=>$videos,
            'pages' => $pages
        ]);
    }
}