<?php
/** @var \app\models\PhotoCatalog $model */
?>

<?php
$this->title = $model->meta_title;
$this->registerMetaTag([
    'name' => 'keywords', 'value' => $model->meta_keywords
]);
$this->registerMetaTag([
    'name' => 'description', 'value' => $model->meta_description
]);

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
<!--                    <p class="c fs24 fw400 white chopped text-right">98%</p>-->
                </div>
                <div class="cc x1d3 vmiddle">
                    <span class="fs10 gray uppercase"><span class="white"><!--80--></span> <!--лайков-->
                    <br>
                    <span class="white"><?= $model->hits; ?></span> просмотров</span>
                </div>
                <!-- <div class="cc x1d3 vmiddle ta-center">
                    <a href="#"><img src="img/i-like.png" alt=""></a>
                    <a href="#"><img src="img/i-dislike.png" alt=""></a>
                    <a href="#"><img src="img/i-fave.png" alt=""></a>
                </div> -->
                <div class="cc x1d3 vmiddle ta-center">
<!--                    <a href="#" class="fs18 btn gray"><span class="white fa fa-thumbs-up"></span></a>-->
<!--                    <a href="#" class="fs18 btn gray"><span class="white fa fa-thumbs-down"></span></a>-->
<!--                    <a href="#" class="fs18 btn gray"><span class="white fa fa-heart"></span></a>-->
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

           // $ads = "test";
           $ads = \app\components\widgets\AdsWidget::widget(['url'=>'photo-slider']);

        ?>
        <div class="c-c gallery">
            <?php foreach(\app\models\Photos::find()->where("catalog_id = :catalog_id", [':catalog_id'=>$model->id])->all() as $k=>$photo): ?>
                <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                    <div class="photo-element">
                        <div >
                            <a title="" href="<?= $photo->url ?>" rel="fancybox" class="thumbnail">
                                <img src="<?= $photo->url_thumbnail; ?>" class="r" alt="<?= $model->title."-".($k+1) ?>">
                            </a>
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
        'title' => $ads,
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'outside'],
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
        <?= \app\components\widgets\RandomizeWidget::widget(['type'=>'photo', 'currentId'=>$model->id])?>



        <!-- teasers -->
       <?= \app\components\widgets\AdsWidget::widget(['url'=>'photo/view']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

</div>
<!-- main -->