<?php

use yii\helpers\Html;

/* @var $this yii\web\View */


$this->title = Yii::t('app', 'ADMIN');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a("Категории", ['/admin/category/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <p>
        <?= Html::a("Видео", ['#'], ['class' => 'btn btn-primary']) ?>
    </p>

</div>