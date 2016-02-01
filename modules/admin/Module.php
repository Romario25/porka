<?php

namespace app\modules\admin;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';


    public function init()
    {
        parent::init();
        $this->layout = '@app/views/layouts/admin';
        // custom initialization code goes here
    }
}
