<?php
/** @var \app\models\Video $videos */
use app\components\MyHelper;

/** @var \app\models\PhotoCatalog $photos */
?>
<div class="g w1140 main">


    <div class="c-c">


        <?php

        echo \app\components\widgets\CategoryWidget::widget([]);
        ?>
        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans">Фото голых и привлекательных девушек, красивого секса, порно фото красивых моделей и ххх кадры на сайте tukituki.org</h1>
            <p>Для любого мужчины, если конечно он мужчина традиционной сексуальной ориентации, нет ничего прекраснее, чем видобольстительного обнаженного женского тела. Тем более,  что на данный момент в интернете есть множество сайтов, накоторых выложены целые галереи с фотографиями прекрасных, сексапильных голых девушек. Они  будут манить вас  толькоодним видом своего божественного девичьего тела и неприкрытой наготой. Любой мужчина, увидев на улице прекрасную представительницу слабого пола, на которой минимум одежды, всеми фибрами души к ней тянется, и его взор может надолгозаостриться на области пониже талии или декольте. Ещё старина Фрейд ставил либидо на первое место, которое отвечаетза все наши действия. По его мнению, именно либидо движет человеком, говоря ему как себя вести, как выбирать друзей и многое другое. Женщины, по мнению Фрейда не так склонны терять голову, при виде красивого мачо, как мужчины при виде обольстительных голых девушек.</p>
        </div>
        <!-- intro text -->

    </div>

    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <?php foreach($videos as $video): ?>
                <article class="c x1d3--d x1d3--t x1d2--m gallery-element">
                    <div class="video-element new">
                        <a href="/video/<?= $video->url; ?>">
                            <div class="preview" >

                                <img src="<?= $video->screens[0];?>" data="<?= implode(",", $video->screens); ?>" class="r" alt="Видео: Отсосала и дала в попку...">



                                <div class="duration"><?= $video->duration ?></div>
                            </div>
                            <h1 class="title"><?= $video->title ?></h1>
                        </a>
                        <div class="cc meta">
                            <div class="c x3d5--d x3d6--t x1--m">
                                <span><?= $video->update_at; ?></span>
                            </div>
                            <div class="cc x2d5--d x3d6--t x1--m">
                                <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $video->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
            <script>
                $(function() {
                    $('.preview').hover(function() {
                        console.log("START");
                        console.log($(this).find("img").attr('data'));
                        var _this = this,
                            curImage = $(this).find("img"),
                            images = curImage.attr('data').split(',');
                        counter = 0;
                        console.log(images);

                        curImage.attr('data-src', curImage.attr('src'));

                        _this.timer = setInterval(function() {
                            if(counter > images.length -1) {
                                counter = 0;
                            }
                            curImage.attr('src', images[counter]);
                            counter++;
                        }, 500);

                    }, function() {
                        $(this).find("img").attr('src', $(this).find("img").attr('data-src'));
                        clearInterval(this.timer);
                    });
                });
            </script>



        </div>


        <!-- teasers -->
        <?php echo \app\components\widgets\TeaserWidget::widget(['type'=>'video']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

    <!-- subscription -->
    <?= \app\components\widgets\SubscriptionWidget::widget([]); ?>
    <!-- subscription -->

    <div class="c-c">

        <div class="c">
            <p class="fs24 fw300 text-center opensans"><a class="pink" href="#" title="Эксклюзивные порно фото и видео в HD качестве!">Смотреть <span class="fw700">350+</span> видео в <span class="fw700">HD качестве</span></a></p>
        </div>

        <!-- menu -->
        <?= \app\components\widgets\CategoryWidget::widget([]); ?>
        <!-- menu -->

        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans">Фото голых и привлекательных девушек, красивого секса, порно фото красивых моделей и ххх кадры на сайте tukituki.org</h1>
            <p>Для любого мужчины, если конечно он мужчина традиционной сексуальной ориентации, нет ничего прекраснее, чем видобольстительного обнаженного женского тела. Тем более,  что на данный момент в интернете есть множество сайтов, накоторых выложены целые галереи с фотографиями прекрасных, сексапильных голых девушек. Они  будут манить вас  толькоодним видом своего божественного девичьего тела и неприкрытой наготой. Любой мужчина, увидев на улице прекрасную представительницу слабого пола, на которой минимум одежды, всеми фибрами души к ней тянется, и его взор может надолгозаостриться на области пониже талии или декольте. Ещё старина Фрейд ставил либидо на первое место, которое отвечаетза все наши действия. По его мнению, именно либидо движет человеком, говоря ему как себя вести, как выбирать друзей и многое другое. Женщины, по мнению Фрейда не так склонны терять голову, при виде красивого мачо, как мужчины при виде обольстительных голых девушек.</p>
        </div>
        <!-- intro text -->

    </div>


    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <?php foreach($photos as $photo): ?>
                <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                    <div class="photo-element <?= (MyHelper::isClassNew($photo->create_at))?'new':''; ?>">
                        <a href="/photo/<?= $photo->url; ?>">
                            <div class="preview">
                                <img src="<?= (isset($photo->photos[0]))?$photo->photos[0]:"#"; ?>" class="r" alt="<?= $photo->title; ?>">
                                <div class="duration"><?= $photo->photosCount; ?> фото</div>
                            </div>
                            <p class="fs20 semichopped black cursive text-center"><?= $photo->actor?></p>
                            <h1 class="title semichopped"><?= $photo->title; ?></h1>
                        </a>
                        <div class="cc meta">
                            <div class="c x1d2--d x1d2--t x1--m">
                                <span><?= $photo->update_at; ?></span>
                            </div>
                            <div class="cc x1d2--d x1d2--t x1--m">
                                <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $photo->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>


        <!-- teasers -->
        <?php echo \app\components\widgets\TeaserWidget::widget(['type'=>'photo']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

</div>
<!-- main -->