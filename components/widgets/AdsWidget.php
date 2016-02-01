<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 03.01.16
 * Time: 13:12
 */

namespace app\components\widgets;


use app\models\Ads;
use yii\base\Widget;

class AdsWidget extends Widget
{

    public $url;

    public function run(){

        $ads = Ads::find()->where('url = :url', [':url'=>$this->url])->one();
        if($ads == null) return "";
        return $this->render('ads', ['code'=>$ads->code]);

    }

}