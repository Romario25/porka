<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 0:20
 */

namespace app\components\widgets;


use app\models\SerchForm;
use yii\base\Widget;

class SearchWidget extends Widget
{
    public function run(){

        $model = new SerchForm();

        return $this->render('search', [
           'model' => $model
        ]);
    }
}