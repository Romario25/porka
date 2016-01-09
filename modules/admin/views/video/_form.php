<?php

use app\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?php
        print_r($model->getErrors());
    ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php if(!$model->isNewRecord): ?>
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?php endif; ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'videoFile[]')->fileInput()->label("video 320X240"); ?>

    <?= $form->field($model, 'videoFile[]')->fileInput()->label("video 640X480"); ?>

    <?= $form->field($model, 'videoFile[]')->fileInput()->label("video 1280X720"); ?>

    <?= $form->field($model, 'screenShotVideo')->fileInput(['accept' => 'image/*']); ?>

    <?= $form->field($model, 'screenFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name'), [
        'prompt' => 'Выберите категорию'
    ]); ?>

    <?= $form->field($model, 'duration')->textInput()->label("Длительность"); ?>

    <?= $form->field($model, 'actor')->textInput()->label('Актер'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
