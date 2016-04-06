<?php

use yii\helpers\Html;

/* @var $this yii\web\View */


$this->title = Yii::t('app', 'ADMIN');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title) ?></h1>


    <?php if(\app\modules\admin\models\User::getCurrRole() == 'admin'):?>
        <p>
            <?= Html::a("Настройки приложения", ['/admin/config/index'], ['class' => 'btn btn-primary']) ?>
        </p>

        <p>
            <?= Html::a("Пользователи", ['/admin/user/index'], ['class' => 'btn btn-primary']) ?>
        </p>

        <p>
            <?= Html::a("Главная страница", ['/admin/mainpage/index'], ['class' => 'btn btn-primary']) ?>
        </p>

        <p>
            <?= Html::a("Страницы", ['/admin/pages/index'], ['class' => 'btn btn-primary']) ?>
        </p>

        <p>
            <?= Html::a("Категории видео", ['/admin/category/index'], ['class' => 'btn btn-primary']) ?>
        </p>

        <p>
            <?= Html::a("Категории фото", ['/admin/categoryphoto/index'], ['class' => 'btn btn-primary']) ?>
        </p>
        <?php endif; ?>
        <p>
            <?= Html::a("Видео", ['/admin/video/index'], ['class' => 'btn btn-primary']) ?>
        </p>

        <p>
            <?= Html::a("Фотографии", ['/admin/photocatalog/index'], ['class' => 'btn btn-primary']) ?>
        </p>
    <?php if(\app\modules\admin\models\User::getCurrRole() == 'admin'):?>
        <p>
            <?= Html::a("Слайдер", ['/admin/slider/index'], ['class' => 'btn btn-primary']) ?>
        </p>
    
        <p>
            <?= Html::a("Реклама", ['/admin/ads/index'], ['class' => 'btn btn-primary']) ?>
        </p>
    <?php endif; ?>


</div>
