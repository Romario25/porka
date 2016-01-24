<?php
/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 04.01.16
 * Time: 21:15
 */

namespace app\commands;


use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit(){
        $auth = \Yii::$app->getAuthManager();
        // очищаем от старого
        //$auth->removeAll();
        $admin = $auth->createRole('admin');
        $auth->add($admin);
    }

}