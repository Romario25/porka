<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MainPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_video')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
