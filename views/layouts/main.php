<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt ie 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if ie 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if ie 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt ie 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="description" content="">-->
<!--    <meta name="keywords" content="">-->

    <?= Html::csrfMetaTags() ?>

    <?php $this->head() ?>
    <title><?= $this->title; ?></title>
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="icon" type="image/gif" href="img/favicon.gif">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Pacifico">
</head>
<body>
<?php $this->beginBody() ?>
<!-- page top -->
<div class="herounit black-bg opensans">
    <div class="g w1140 page-top">
        <div class="c x3d12--d x2d4--t x1--m vmiddle">
            <a class="ta-cll" href="/" title="Порно фото и видео в HD качестве"><img class="inflated-v-half logotype" src="/img/pornclub-logo.png" alt="PornClub Network Social"></a>
        </div>
        <div class="c x5d12--d x2d4--t x1--m vmiddle nav">
            <ul class="inline unstyled">
                <li class="cc x1d3 navitem <?= (Yii::$app->controller->id == 'video')?'current':''?>"><a class="fw600" href="/video" title="Порно видео HD"><span class="fa fa-video-camera"></span> Видео</a></li>
                <li class="cc x1d3 navitem <?= (Yii::$app->controller->id == 'photo')?'current':''?>"><a class="fw600" href="/photo" title="Порно фото"><span class="fa fa-picture-o"></span> Фото</a></li>
                <li class="cc x1d3 navitem <?= (Yii::$app->controller->id == 'new')?'current':''?>"><a class="fw600" href="/new" title="Порно фото"><span class="fa fa-star-o"></span> Новое</a></li>
            </ul>
        </div>
        <p class="c semichopped x4d12--d x1--m vmiddle fs24 text-center">Эксклюзивные порно фото и&nbsp;видео в <span class="fw700">HD&nbsp;качестве!</span></p>
        <?php echo  \app\components\widgets\SearchWidget::widget([]); ?>
    </div>
</div>
<!-- page-top -->

<?= $content ?>


<!-- footer -->
<div class="herounit black-bg">
    <footer class="g w1140 page-bottom">
        <div class="c x2d12--d x1d4--t x1d2--m vmiddle">
            <a href="#" title="Порно фото и видео в HD качестве"><img class="inflated-v-half logotype" src="/img/pornclub-logo.png" alt="PornClub Network Social"></a>
        </div>
        <div class="c x4d12--d x1d4--t x1d2--m vmiddle">
            <ul class="inline unstyled">
                <li><a class="inflated half fw600" href="/" title="Порно фото и видео"><i class="fa fa-home"></i> Главная</a></li>
                <li><a class="inflated half fw600" href="/video" title="Порно видео HD"><span class="fa fa-video-camera"></span> Видео</a></li>
                <li><a class="inflated half fw600" href="/photo" title="Порно фото"><span class="fa fa-picture-o"></span> Фото</a></li>
            </ul>
        </div>
        <form class="cc x6d12--d x1d2--t x1--m vmiddle inflated-v footer-sub">
            <div class="c x3d5--d x1d2--t x1d2--m"><input style="color:black;" class="c email-subscribe-footer" type="text" placeholder="Ваш e-mail"></div>
            <div class="c x2d5--d x1d2--t x1d2--m"><button class="c footer-but">Подписаться</button></div>
        </form>
        <script>
            $(function(){
                $("form.footer-sub button.footer-but").click(function(){

                    var email = $(".email-subscribe-footer").val();

                    $.ajax({
                        url: '/site/subscribe',
                        type: 'POST',
                        data: 'email='+email,
                        success: function(sucess){
                            alert(sucess);
                            $(".email-subscribe-footer").val("");
                        }
                    });
                    //alert("test");
                    return false;
                });
            })
        </script>
        <div class="inflated-v">
            <div class="c x7d12--d x1d2--t x1--m">
                <p class="fs12">Все материалы, представленные на данном сайте, разрешины к просмотру лицам достигшим 18 лет или старше. Посетив этот сайт, Вы подтверждаете, что Вы достигли установленного законом возраста в вашей стране, чтобы просматривать материалы для взрослых, и что Вы хотите посмотреть такой материал.</p>
                <p class="fs12">Если у вас есть какие-либо вопросы, пожалуйста, обращайтесь: <a class="pink" href="mailto:support@pornclub.com">support@pornclub.com</a></p>
            </div>
            <div class="c x5d12--d x1d2--t x1--m text-right">
                <p class="fs14">Поделитесь с друзьями</p>
                <p>
<!--                    <a class="social" href="http://vk.com" title="Поделиться вКонтакте"><img src="/img/icon-vk.png" alt="Поделиться вКонтакте"></a>-->
<!--                    <a class="social" href="http://facebook.com" title="Поделиться в Facebook"><img src="/img/icon-fb.png" alt="Поделиться в Facebook"></a>-->
<!--                    <a class="social" href="http://twitter.com" title="Поделиться в Twitter"><img src="/img/icon-tw.png" alt="Поделиться в Twitter"></a>-->
<!--                    <a class="social" href="http://ok.ru" title="Поделиться в Одноклассниках"><img src="/img/icon-ok.png" alt="Поделиться в Одноклассниках"></a>-->
<!--                    <a class="social" href="http://plus.google.com" title="Поделиться в Google Plus"><img src="/img/icon-gp.png" alt="Поделиться в Google Plus"></a>-->
                <div class="share42init"></div>
                <script type="text/javascript" src="/share42/share42.js"></script>

                </p>
            </div>
        </div>
    </footer>
</div>
<!-- footer -->

<script>
    $(document).ready(function() {
        $('select').niceSelect();
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>