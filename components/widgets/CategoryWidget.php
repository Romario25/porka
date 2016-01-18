<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 24.12.15
 * Time: 14:11
 */

namespace app\components\widgets;


use app\models\Category;
use app\models\CategoryPhoto;
use yii\base\Widget;

class CategoryWidget extends Widget
{

    public $type;

    public function run(){

        if($this->type == 'video'){
            $categoryShow = Category::find()->where('show_expand = :show_expand', [':show_expand'=>true])->all();
            $categoryHide = Category::find()->where('show_expand = :show_expand', [':show_expand'=>false])->all();
        }
        if($this->type == 'photo'){
            $categoryShow = CategoryPhoto::find()->where('show_expand = :show_expand', [':show_expand'=>true])->all();
            $categoryHide = CategoryPhoto::find()->where('show_expand = :show_expand', [':show_expand'=>false])->all();
        }

        if($this->type == 'video')
            return $this->render("category", ['categoryShow'=>$categoryShow, 'categoryHide'=>$categoryHide, 'type'=>$this->type]);

        if($this->type == 'photo')
            return $this->render("category_photo", ['categoryShow'=>$categoryShow, 'categoryHide'=>$categoryHide, 'type'=>$this->type]);
    }
}