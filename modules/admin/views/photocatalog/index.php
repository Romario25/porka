<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotoCatalogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photo Catalogs';
$this->params['breadcrumbs'][] = [
    'label' => 'Admin',
    'url' => "/admin/default/index"
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-catalog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photo Catalog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'category_id',
            'create_at',
            'update_at',
            // 'description:ntext',
            // 'plus',
            // 'minus',
            // 'hits',

            ['class' => 'yii\grid\ActionColumn', 'template'=>'{view} {update} {delete}',
                'buttons' => [
                    'view' => function($url, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', "/photo/".$model->category->url."/".$model->url, ['target'=>'_blank']);
                    }
                ],
                'options' => [
                    'width'=>'100px;'
                ]

            ],
        ],
    ]); ?>

</div>
