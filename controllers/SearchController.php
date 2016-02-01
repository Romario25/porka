<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 0:14
 */

namespace app\controllers;


use Yii;
use yii\console\Controller;

class SearchController extends Controller
{
    public function actionSearch(){
        if(\Yii::$app->request->isPost){
            $searchForm = Yii::$app->request->post("SerchForm", "default");
            $searchString = $searchForm['searchString'];
            $type = $searchForm['type'];


            if($type == 1){
                //SELECT * FROM `articles` WHERE MATCH (title,body) AGAINST ('database');
                $sql = "SELECT * FROM video  WHERE MATCH (title, description) AGAINST ('$searchString') AND `publish` = 1";

                $template = "search_video";
            }
            if($type == 2){
                $sql = "SELECT * FROM photo_catalog WHERE MATCH (title, description) AGAINST ('$searchString') AND `publish` = 1";
                $template = "search_photo";
            }

            $result = Yii::$app->db->createCommand($sql)
                ->queryAll();

            return $this->render($template, [
                'searchString' => $searchString,
                'type' => $type,
                'result' => $result
            ]);
        }


    }
}