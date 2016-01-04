<?php
use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;




/* @var $this \yii\web\View */
/* @var $content string */

AdminAsset::register($this);
\yii\web\JqueryAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="wrap">
    <div class="top-naw navbar-fixed-top clearfix">
        <?php

        NavBar::begin([
            'brandLabel' => "<img class='img-responsive' height='20'  src='" . Yii::$app->request->baseUrl . "/img/pornclub-logo.png' alt='Logo'>",
            'brandUrl'   => Yii::$app->homeUrl,
        ]);
        ?>
        <div class="admin-naw-wrap pull-right">
            <?php echo Nav::widget([
                'options'         => ['class' => 'navbar-nav navbar-right'],
                'activateParents' => true,
                'items'           => array_filter([

                    Yii::$app->user->isGuest ? ['label' => "Вход", 'url' => ['/admin/user/login']] : false,
                    !Yii::$app->user->isGuest ? ['label' => "Выход", 'url' => ['/admin/user/logout'], 'linkOptions' => ['data-method' => 'post']] : false,

                ]),
            ]);
            ?>
        </div>
        <?php NavBar::end(); ?>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            //'itemTemplate'       => "<li><span>/</span>{link}</li>\n",
            //'activeItemTemplate' => "<li class=\"active\"><span>/</span>{link}</li>\n",
            'homeLink'           => [
                'label'    => " Главная ",
                'url'      => Yii::$app->homeUrl,
                //'template' => "<li><span class='home-link'>{link}</span></li>\n",
            ],
            'links'              => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]);
        ?>
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
