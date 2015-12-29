<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 20:31
 */

namespace app\components\widgets;


use yii\bootstrap\Widget;

class TeaserWidget extends Widget
{
    public function run(){
        return $this->render('teaser');
    }

}