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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title><?= $this->title; ?></title>
    <?php $this->head() ?>

    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="icon" type="image/gif" href="img/favicon.gif">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
    
    <link type="text/css" rel="stylesheet" href="/css/lightgallery.css" />

    <link type="text/css" rel="stylesheet" href="/css/grid.css" />
    <link type="text/css" rel="stylesheet" href="/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/css/nice-select.css" />

    <script src="/js/lightgallery.js"></script>

    <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- lightgallery plugins -->
    <script src="/js/lg-thumbnail.js"></script>
    <script src="/js/lg-fullscreen.js"></script>

</head>
<body>
<?php $this->beginBody() ?>
<!-- page top -->
<div class="herounit black-bg opensans">
    <div class="g w1140 page-top">
        <div class="c x3d12--d x2d4--t x1--m vmiddle">
            <a class="ta-cll" href="/" title="Главная страница Pornbubs.com"><img class="inflated-v-half logotype" src="/img/Logo.png" alt="PornClub Network Social" title="Главная страница Pornbubs.com"></a>
        </div>
        <p class="c semichopped x4d12--d x1--m vmiddle fs24 text-center tablet-hide"></p>
        <div class="c x5d12--d x2d4--t x1--m vmiddle nav">
            <ul class="inline unstyled">
                <li class="cc x1d3 navitem <?= (Yii::$app->controller->id == 'video')?'current':''?>"><a class="fw600" href="/video" title="Раздел Видео"><span class="fa fa-video-camera"></span> Видео</a></li>
                <li class="cc x1d3 navitem <?= (Yii::$app->controller->id == 'photo')?'current':''?>"><a class="fw600" href="/photo" title="Категория Фото"><span class="fa fa-picture-o"></span> Фото</a></li>
                <li class="cc x1d3 navitem <?= (Yii::$app->controller->id == 'new')?'current':''?>"><a class="fw600" href="/new" title="Новое"><span class="fa fa-star-o"></span> Новое</a></li>
            </ul>
        </div>
        <?php echo  \app\components\widgets\SearchWidget::widget([]); ?>
    </div>
</div>
<!-- page-top -->

<?= $content ?>


<!-- footer -->
<div class="herounit black-bg">
    <footer class="g w1140 page-bottom">
        <div class="c x2d12--d x1d4--t x1d2--m vmiddle">
            <a href="/" title="Главная страница Pornbubs.com"><img class="inflated-v-half logotype" src="/img/Logo.png" alt="PornClub Network Social" title="Главная страница Pornbubs.com"></a>
        </div>
        <div class="c x4d12--d x1d4--t x1d2--m vmiddle">
            <ul class="inline unstyled">
                <li><a class="inflated half fw600" href="/" title="На главную"><i class="fa fa-home"></i> Главная</a></li>
                <li><a class="inflated half fw600" href="/video" title="Раздел Видео"><span class="fa fa-video-camera"></span> Видео</a></li>
                <li><a class="inflated half fw600" href="/photo" title="Категория Фото"><span class="fa fa-picture-o"></span> Фото</a></li>
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
                <p class="fs12">Если у вас есть какие-либо вопросы, предложения, пожалуйста, обращайтесь: <a class="pink" href="mailto:admin@pornbubs.com">admin@pornbubs.com</a></p>
            </div>
            <div class="c x5d12--d x1d2--t x1--m text-right">
                <p class="fs14">Поделитесь с друзьями</p>
                <div>
                    <script type="text/javascript">(function() {
                            if (window.pluso)if (typeof window.pluso.start == "function") return;
                            if (window.ifpluso==undefined) { window.ifpluso = 1;
                                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                var h=d[g]('body')[0];
                                h.appendChild(s);
                            }})();</script>
                <div class="pluso" data-background="#000000" data-options="big,square,line,horizontal,nocounter,theme=01" data-services="twitter,vkontakte,facebook,google" data-user="1779697249"></div>

                </div>
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