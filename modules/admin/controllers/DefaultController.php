<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends AdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
