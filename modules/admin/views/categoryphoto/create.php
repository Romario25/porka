<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryPhoto */

$this->title = 'Create Category Photo';
$this->params['breadcrumbs'][] = [
    'label' => 'Admin',
    'url' => "/admin/default/index"
];
$this->params['breadcrumbs'][] = ['label' => 'Category Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
