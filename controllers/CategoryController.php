<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 24.12.15
 * Time: 22:51
 */

namespace app\controllers;


use app\models\Category;
use app\models\Video;
use yii\web\Controller;
use yii\web\HttpException;

class CategoryController extends Controller
{
    public function actionIndex($url){

        $category = Category::find()->where('url = :url', [':url'=>$url])->one();
        if($category == null){
            throw new HttpException(404);
        }
        $videos = Video::find()->all();

        return $this->render('index', ['videos'=>$videos, 'category'=>$category]);
    }
}