<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 27.12.15
 * Time: 15:43
 */

namespace app\components\widgets;


use yii\bootstrap\Widget;

class SubscriptionWidget extends Widget
{

    public function run(){

        return $this->render("subscription");
    }

}