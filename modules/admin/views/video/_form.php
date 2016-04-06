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
       // print_r($model->getErrors());
    ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>



    <?php if(!$model->isNewRecord): ?>
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?php endif; ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php echo  $form->field($model, 'videoFile[]')->fileInput()->label("video 360"); ?>

    <?php echo  $form->field($model, 'videoFile[]')->fileInput()->label("video 480"); ?>

    <?php echo  $form->field($model, 'videoFile[]')->fileInput()->label("video 720"); ?>

    <?php // echo $form->field($model, 'videoFile')->fileInput([]) ?>

    <?= $form->field($model, 'screenShotVideo')->fileInput(['accept' => 'image/*']); ?>

    <?= $form->field($model, 'screenFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name'), [
        'prompt' => 'Выберите категорию'
    ]); ?>

    <?= $form->field($model, 'duration')->textInput()->label("Длительность"); ?>

    <?= $form->field($model, 'actor')->textInput()->label('Актер'); ?>

    <?= $form->field($model, 'alt')->textInput(); ?>



    <?php //echo $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model, 'storage')->dropDownList([0=>'GoDaddy', 1=>'Server', 2=>'Amazon']); ?>

    <?php if(Yii::$app->user->can('admin')): ?>
        <?= $form->field($model, 'block_edit')->checkbox([]); ?>
    <?php endif; ?>
    <?= $form->field($model, 'publish')->checkbox([]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
