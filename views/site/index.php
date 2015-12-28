<?php
/** @var \app\models\Video $videos */
/** @var \app\models\PhotoCatalog $photos */
?>
<div class="g w1140 main">
<!-- slider -->
<div class="herounit blue-gradient-bg">
    <div class="g w1140 slider">
        <a href="#"><img class="r" src="/images/slide-01.png" alt=""></a>
    </div>
</div>
<!-- slider -->

<!-- main -->

    <div class="c-c">
        <div class="c">
            <p class="fs24 fw300 text-center opensans"><a class="pink" href="#" title="Эксклюзивные порно фото и видео в HD качестве!">Смотреть <span class="fw700">350+</span> видео в <span class="fw700">HD качестве</span></a></p>
        </div>

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

<!--            <script>-->
<!--                $(function() {-->
<!--                    $('.preview').hover(function() {-->
<!--                       console.log("START");-->
<!--                        var _this = $(this).child(),-->
<!--                            images = _this.getAttribute('data').split(',');-->
<!--                       console.log(images);-->
<!--                        counter = 0;-->
<!--                        this.setAttribute('data-src', _this.src);-->
<!--                        //-->
<!--                        _this.timer = setInterval(function() {-->
<!--                            if(counter > images.length-1) {-->
<!--                                counter = 0;-->
<!--                            }-->
<!--                            _this.src=images[counter];-->
<!--                            console.log(counter);-->
<!--                            console.log(images[counter]);-->
<!---->
<!--                            counter++;-->
<!---->
<!--                        }, 500);-->
<!---->
<!--                    }, function() {-->
<!--                        this.src = this.getAttribute('data-src');-->
<!--                        //alert("test");-->
<!--                        clearInterval(this.timer);-->
<!--                    });-->
<!--                });-->
<!--            </script>-->


        </div>


        <!-- teasers -->
        <div class="c-c teasers">
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
        </div>
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
                <div class="photo-element new">
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
        <div class="c-c teasers">
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
            <div class="c x1d5--d x1d4--t x1d3--m">
                <div class="teaser">
                    <a href="#">
                        <img class="r" src="http://placehold.it/300x300?text=+" alt="Спортивная мамка показала анальный секс вблизи">
                        <p>Спортивная мамка показала анальный секс вблизи</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- teasers -->

    </div>
    <!-- gallery -->

</div>
<!-- main -->