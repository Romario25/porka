<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Main Pages';
$this->params['breadcrumbs'][] = [
    'label' => 'Admin',
    'url' => "/admin/default/index"
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-page-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_video',
            'description_video:ntext',
            'title_photo',
            'description_photo:ntext',
            // 'meta_title',
            // 'meta_keywords',
            // 'meta_description',

            ['class' => 'yii\grid\ActionColumn', 'template'=>'{update}'],
        ],
    ]); ?>

</div>
