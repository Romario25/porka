<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryPhoto */

$this->title = 'Update Category Photo: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = [
    'label' => 'Admin',
    'url' => "/admin/default/index"
];
$this->params['breadcrumbs'][] = ['label' => 'Category Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-photo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
