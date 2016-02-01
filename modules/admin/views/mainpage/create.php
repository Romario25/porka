<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MainPage */

$this->title = 'Create Main Page';
$this->params['breadcrumbs'][] = ['label' => 'Main Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
