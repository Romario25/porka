
<?php use yii\helpers\Html;

\yii\bootstrap\ActiveForm::begin([
    'method' => 'POST',
    'action' => ['search/search'],
    'options' => [
        'class' => 'cc site-search'
    ]
]); ?>

<?php echo Html::activeTextInput($model, 'searchString', [
    'class' => 'cc x5d6--d x9d12--t x4d6--m',
    'placeholder' => 'Поиск модели'
])?>
<div class="cc x1d12--d x2d12--t x1d6--m gray-bg">
    <?php echo Html::activeDropDownList($model, 'type', [1=>"Видео", 2=>"Фото"])?>
</div>
<div class="cc x1d12--d x1d12--t x1d6--m gray-bg">
    <?php echo Html::submitButton('<i class="fa fa-search"></i>', [
        'class' => 'cc search-submit-btn'
    ]); ?>
</div>
<?php \yii\bootstrap\ActiveForm::end(); ?>