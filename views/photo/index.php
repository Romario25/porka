<?php
/** @var \app\models\PhotoCatalog $photos */
use yii\widgets\LinkPager;

?>
<div class="g w1140 main">

    <!-- menu -->
    <?php echo \app\components\widgets\CategoryWidget::widget(['type'=>'photo']) ?>
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

            <?php foreach($photos as $k=>$photo): ?>

            <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                <div class="photo-element new">
                    <a href="/photo/<?= $photo->url; ?>">
                        <div class="preview">
                            <img src="<?= (isset($photo->photos[0]))?$photo->photos[0]:"#" ?>" class="r" alt="<?= $photo->title ?>">
                            <div class="duration"><?= $photo->photosCount; ?> фото</div>
                        </div>
                        <p class="fs20 semichopped black cursive text-center"><?= $photo->actor; ?></p>
                        <h1 class="title semichopped"><?= $photo->title ?></h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x1d2--d x1d2--t x1--m">
                            <span><?= $photo->update_at?></span>
                        </div>
                        <div class="cc x1d2--d x1d2--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $photo->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
<!--                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>-->
                        </div>
                    </div>
                </div>
            </article>
                <?php
                    if($k == 7){
                        echo '</div>';
                        echo \app\components\widgets\TeaserWidget::widget(['type'=>'photo']);
                        echo '<div class="c-c gallery">';
                    }

                ?>
          <?php endforeach; ?>
        </div>
        <!-- gallery -->

        <!-- teasers -->

        <!-- teasers -->

        <!-- gallery -->
        <div class="c-c gallery">

        </div>
        <!-- gallery -->

<!--        <div class="c-c pagination">-->
<!--            <ul class="unstyled inline">-->
<!--                <li class="button inactive"><a href="#">&lt;&lt;</a></li>-->
<!--                <li class="button inactive"><a href="#">&lt;</a></li>-->
<!--                <li class="button current"><a href="#">1</a></li>-->
<!--                <li class="button"><a href="#">2</a></li>-->
<!--                <li class="button"><a href="#">3</a></li>-->
<!--                <li class="button"><a href="#">4</a></li>-->
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