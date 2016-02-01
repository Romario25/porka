<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 24.12.15
 * Time: 22:51
 */

namespace app\controllers;


use app\models\Category;
use app\models\CategoryPhoto;
use app\models\PhotoCatalog;
use app\models\Video;
use yii\web\Controller;
use yii\web\HttpException;

class CategoryController extends Controller
{
    public function actionIndex($type, $url){


        if($type != 'photo' && $type != 'video'){
            throw new HttpException(404);
        }
        if($type == 'video')
            $category = Category::find()->where('url = :url', [':url'=>$url])->one();
        if($type == 'photo')
            $category = CategoryPhoto::find()->where('url = :url', [':url'=>$url])->one();

        if($category == null){
            throw new HttpException(404);
        }

        if($type == 'video'){
            $videos = Video::find()->where('category_id = :category_id && publish = :publish', [
                ':category_id'=>$category->id,
                ':publish'=> 1
            ])->all();
            return $this->render('video', ['videos'=>$videos, 'category'=>$category]);
        }

        if($type == 'photo'){
            $photo = PhotoCatalog::find()->where('category_id = :category_id && publish = :publish', [
                ':category_id'=>$category->id,
                ':publish' => 1
            ])->all();
            return $this->render('photo', ['photos'=>$photo, 'category'=>$category]);
        }


    }
}