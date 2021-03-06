<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MainPage */

$this->title = 'Update Main Page: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = [
    'label' => 'Admin',
    'url' => "/admin/default/index"
];
$this->params['breadcrumbs'][] = ['label' => 'Main Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
