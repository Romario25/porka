<?php
/** @var \app\models\Video $videos */
use yii\widgets\LinkPager;

?>
<!-- main -->
<div class="g w1140 main">

    <!-- menu -->
    <?php echo \app\components\widgets\CategoryWidget::widget(['type'=>'video']); ?>
    <!-- menu -->

    <div class="c">
        <p class="fs24 fw700 text-center opensans">Фото голых и привлекательных девушек, красивого секса, порно фото красивых моделей и ххх кадры на сайте tukituki.org</p>
    </div>

    <!-- intro text -->
    <div class="c-c">
        <div class="c">
            <p>Для любого мужчины, если конечно он мужчина традиционной сексуальной ориентации, нет ничего прекраснее, чем видобольстительного обнаженного женского тела. Тем более,  что на данный момент в интернете есть множество сайтов, накоторых выложены целые галереи с фотографиями прекрасных, сексапильных голых девушек. Они  будут манить вас  толькоодним видом своего божественного девичьего тела и неприкрытой наготой. Любой мужчина, увидев на улице прекрасную представительницу слабого пола, на которой минимум одежды, всеми фибрами души к ней тянется, и его взор может надолгозаостриться на области пониже талии или декольте. Ещё старина Фрейд ставил либидо на первое место, которое отвечаетза все наши действия. По его мнению, именно либидо движет человеком, говоря ему как себя вести, как выбирать друзей и многое другое. Женщины, по мнению Фрейда не так склонны терять голову, при виде красивого мачо, как мужчины при виде обольстительных голых девушек.</p>
        </div>
    </div>
    <!-- intro text -->

    <div class="gray-bg">

        <!-- gallery -->
        <div class="c-c gallery">

            <?php foreach($videos as $k=>$video): ?>
                <article class="c x1d3--d x1d3--t x1d2--m gallery-element">
                    <div class="video-element new">
                        <a href="/video/<?= $video->url; ?>">
                            <div class="preview" >

                                <img src="<?= $video->screens[0];?>" data="<?= implode(",", $video->screens); ?>" class="r" alt="Видео: Отсосала и дала в попку...">



                                <div class="duration"><?= $video->duration; ?></div>
                            </div>
                            <h1 class="title"><?= $video->title ?></h1>
                        </a>
                        <div class="cc meta">
                            <div class="c x3d5--d x3d6--t x1--m">
                                <span><?= $video->update_at; ?></span>
                            </div>
                            <div class="cc x2d5--d x3d6--t x1--m">
                                <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $video->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
<!--                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>-->
                            </div>
                        </div>
                    </div>
                </article>
                <?php
                if($k == 7){
                    echo '</div>';
                    echo \app\components\widgets\TeaserWidget::widget(['type'=>'video']);
                    echo '<div class="c-c gallery">';
                }

                ?>
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
        <!-- gallery -->




        <!-- gallery -->

<!--        <div class="c-c pagination">-->
<!--            <ul class="unstyled inline">-->
<!--                <li class="button inactive"><a href="#">&lt;&lt;</a></li>-->
<!--                <li class="button inactive"><a href="#">&lt;</a></li>-->
<!--                <li class="button current"><a href="#">1</a></li>-->
<!--                <li class="button"><a href="#">222</a></li>-->
<!--                <li class="button"><a href="#">3</a></li>-->
<!--                <li class="button"><a href="#">44</a></li>-->
<!--                <li class="button"><a href="#">5</a></li>-->
<!--                <li class="button"><a href="#">&gt;</a></li>-->
<!--                <li class="button"><a href="#">&gt;&gt;</a></li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="c-c pagination">
            <?php
            // отображаем постраничную разбивку
            echo LinkPager::widget([
                'pagination' => $pages,
                'options' => [
                    'class' => 'unstyled inline',
                ],
                'activePageCssClass' => 'button current',
                'disabledPageCssClass' => 'button',
                'firstPageCssClass' => 'button',
                'lastPageCssClass' => 'button',
                'prevPageCssClass' => 'button'

            ]);
            ?>
        </div>

    </div>

    <!-- intro text -->

</div>
<!-- main -->