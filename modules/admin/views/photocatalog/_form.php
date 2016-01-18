<?php

use app\models\Category;
use app\models\CategoryPhoto;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhotoCatalog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-catalog-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php if(!$model->isNewRecord): ?>
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?php endif; ?>


    <?= $form->field($model, 'actor')->textInput([['maxlength' => true]]); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alt')->textInput([]); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(CategoryPhoto::find()->all(), 'id', 'name'), [
        'prompt' => 'Выберите категорию'
    ]) ?>

    <?= $form->field($model, 'photosUpload')->fileInput(); ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]); ?>

    <?php //echo $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]); ?>


    <?= $form->field($model, 'storage')->dropDownList([0=>'GoDaddy', 1=>'Server', 2=>'Amazon']); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
