<?php
/** @var \app\models\PhotoCatalog $model */
?>

<!-- video -->
<div class="herounit turquoise-gradient-bg">
    <div class="herounit darkgray-bg">
        <div class="g w1140 ta-center">
            <div class="c x1d6--d x1d3--t vmiddle inflated-v">
                <p class="fs22 fw400 pink chopped opensans ta-cll"><?= $model->actor; ?></p>
                <p class="fs12 gray chopped opensans ta-cll"><?= $model->update_at; ?></p>
            </div>
            <div class="c x1d2--d x1d3--t vmiddle inflated-v">
                <h1 class="fs16 fw400 white chopped opensans ta-cll"><?= $model->title; ?></h1>
                <p class="fs12 gray chopped opensans ta-cll">Категория: <a class="gray" href="/category/<?= $model->category->url; ?>"><?= $model->category->name; ?></a></p>
            </div>
            <div class="c x1d3--d x1d3--t vmiddle inflated-v">
                <div class="cc x1d3 vmiddle">
                    <p class="c fs24 fw400 white chopped text-right">98%</p>
                </div>
                <div class="cc x1d3 vmiddle">
                    <span class="fs10 gray uppercase"><span class="white">80</span> лайков<br><span class="white"><?= $model->hits; ?></span> просмотров</span>
                </div>
                <!-- <div class="cc x1d3 vmiddle ta-center">
                    <a href="#"><img src="img/i-like.png" alt=""></a>
                    <a href="#"><img src="img/i-dislike.png" alt=""></a>
                    <a href="#"><img src="img/i-fave.png" alt=""></a>
                </div> -->
                <div class="cc x1d3 vmiddle ta-center">
                    <a href="#" class="fs18 btn gray"><span class="white fa fa-thumbs-up"></span></a>
                    <a href="#" class="fs18 btn gray"><span class="white fa fa-thumbs-down"></span></a>
                    <a href="#" class="fs18 btn gray"><span class="white fa fa-heart"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video -->

<!-- main -->
<div class="g w1140 main">

    <article class="c-c">

        <!-- intro text -->
        <div class="c text-center inflated-top">
            <p><?= $model->description; ?></p>
        </div>
        <!-- intro text -->
        <?php



        ?>
        <div class="c-c gallery">
            <?php foreach(\app\models\Photos::find()->where("catalog_id = :catalog_id", [':catalog_id'=>$model->id])->all() as $photo): ?>
                <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                    <div class="photo-element">
                        <div >
                            <a href="<?= $photo->url ?>" rel="fancybox" class="thumbnail"><img src="<?= $photo->url_thumbnail; ?>" class="r" alt=""></a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
<?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'float'],
            'buttons' => [],
            'thumbs' => ['width' => 68, 'height' => 50],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);
?>

<!-- intro text -->



    <div class="gray-bg">
        <div class="c-c gallery">
            <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                <div class="photo-element new">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/300x400?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">30 фото</div>
                        </div>
                        <p class="fs20 semichopped black cursive text-center">Jessica Albert</p>
                        <h1 class="title semichopped">Отсосала у классного мужика прямов жопу получила член...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x1d2--d x1d2--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x1d2--d x1d2--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">114&nbsp;<i class="fa fa-eye"></i></span>
                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                <div class="photo-element new">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/300x400?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">30 фото</div>
                        </div>
                        <p class="fs20 semichopped black cursive text-center">Jessica Albert</p>
                        <h1 class="title semichopped">Отсосала у классного мужика прямов жопу получила член...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x1d2--d x1d2--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x1d2--d x1d2--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">114&nbsp;<i class="fa fa-eye"></i></span>
                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                <div class="photo-element">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/300x400?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">30 фото</div>
                        </div>
                        <p class="fs20 semichopped black cursive text-center">Jessica Albert</p>
                        <h1 class="title semichopped">Отсосала у классного мужика прямов жопу получила член...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x1d2--d x1d2--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x1d2--d x1d2--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">114&nbsp;<i class="fa fa-eye"></i></span>
                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                <div class="photo-element">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/300x400?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">30 фото</div>
                        </div>
                        <p class="fs20 semichopped black cursive text-center">Jessica Albert</p>
                        <h1 class="title semichopped">Отсосала у классного мужика прямов жопу получила член...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x1d2--d x1d2--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x1d2--d x1d2--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">114&nbsp;<i class="fa fa-eye"></i></span>
                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
            </article>
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