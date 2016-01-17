<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhotoCatalog */

$this->title = 'Create Photo Catalog';
$this->params['breadcrumbs'][] = [
    'label' => 'Admin',
    'url' => "/admin/default/index"
];
$this->params['breadcrumbs'][] = ['label' => 'Photo Catalogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-catalog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
