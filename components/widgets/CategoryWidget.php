<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 24.12.15
 * Time: 14:11
 */

namespace app\components\widgets;


use app\models\Category;
use yii\base\Widget;

class CategoryWidget extends Widget
{

    public $type;

    public function run(){

        $categoryShow = Category::find()->where('show_expand = :show_expand', [':show_expand'=>true])->all();
        $categoryHide = Category::find()->where('show_expand = :show_expand', [':show_expand'=>false])->all();

        return $this->render("category", ['categoryShow'=>$categoryShow, 'categoryHide'=>$categoryHide, 'type'=>$this->type]);
    }
}