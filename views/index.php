<?php
/** @var \app\models\Video $videos */
/** @var \app\models\PhotoCatalog $photos */
/** @var \yii\web\View $this */
use app\components\MyHelper;
use evgeniyrru\yii2slick\Slick;
use yii\helpers\Html;
use yii\web\JsExpression;

?>

<?php
   $dataPage = \app\models\MainPage::findOne(1);


    $this->title = $dataPage->meta_title;
//    $this->registerMetaTag([
//        'name' => 'keywords',
//        'content' => $dataPage->meta_keywords
//    ]);
    $this->registerMetaTag([
        'name' => 'description',
        'content' => $dataPage->meta_description
    ]);

?>

<div class="g w1140 main">
<!-- slider -->
<div class="herounit blue-gradient-bg">
    <div class="g w1140 slider">
        <a href="#"><img class="r" src="/images/slide-01.png" alt=""></a>
        <?php
//        $images = [
//            Html::a(Html::img("http://goods.marketgid.com/img/new-year.jpg", ['alt' => 'Для праздников и карнавалов', 'title' => 'Для праздников и карнавалов']), ['category/dla_prazdnikov_i_karnavalov/2054']),
//            Html::a(Html::img("http://goods.marketgid.com/img/appliances.png", ['alt' => 'Бытовая техника', 'title' => 'Бытовая техника']), ['category/bytovaa_tehnika/8']),
//            Html::a(Html::img("http://goods.marketgid.com/img/auto.png", ['alt' => 'Автотовары', 'title' => 'Автотовары']), ['category/avto_velo_moto/6']),
//            //Html::a(Html::img("/img/chancellery.png", ['alt' => 'Канцелярия', 'title' => 'Канцелярия']), ['category/kancelarskie_prinadleznosti/1246']),
//        ];

        $slider = \app\models\Slider::find()->all();
        $images = [];
        foreach($slider as $slide){
            $images[] = Html::a(Html::img($slide->src, ['alt' => $slide->title, 'title' => $slide->title]), [$slide->url]);
        }
//
      //  echo yii\bootstrap\Carousel::widget(['items' => $images, 'controls' => false]);
//        echo Slick::widget([
//
//            // HTML tag for container. Div is default.
//            'itemContainer' => 'div',
//
//            // HTML attributes for widget container
//            'containerOptions' => ['class' => 'container'],
//
//            // Items for carousel. Empty array not allowed, exception will be throw, if empty
//            'items' => $images,
//
//            // HTML attribute for every carousel item
//            'itemOptions' => ['class' => 'r'],
//
//            // settings for js plugin
//            // @see http://kenwheeler.github.io/slick/#settings
//            'clientOptions' => [
//                'autoplay' => true,
//                'dots'     => true,
//                'centerPadding' => '0',
//                'adaptiveHeight' => true,
//                'mobileFirst' => true,
//                // note, that for params passing function you should use JsExpression object
//                'onAfterChange' => new JsExpression('function() {console.log("The cat has shown")}'),
//            ],
//
//        ]);
        ?>
    </div>
</div>
</div>
<div class="g w1140 main">
<!-- slider -->

<!-- main -->

    <div class="c-c">
        <div class="c">
            <?php
                $countVideo = \app\models\Video::find()->count('*');

            ?>
            <p class="fs24 fw300 text-center opensans"><a class="pink" href="/video" title="Эксклюзивные порно фото и видео в HD качестве!">Смотреть <span class="fw700"><?= $countVideo ?>+</span> видео в <span class="fw700">HD качестве</span></a></p>
        </div>

        <?php

            echo \app\components\widgets\CategoryWidget::widget(['type'=>'video']);
        ?>
        <!-- intro text -->

        <div class="c text-center">
            <h1 class="fs22 fw400 opensans"><?= $dataPage->title_video ?></h1>
            <p class="text-center"><?= $dataPage->description_video ?></p>
        </div>
        <!-- intro text -->

    </div>

    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <?php foreach($videos as $video): ?>
                <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
                    <div class="video-element new">
                        <a href="/video/<?= $video->category->url; ?>/<?= $video->url; ?>">
                            <div class="preview preview-video" >

                                <img src="<?= $video->screens[0];?>" data-image="<?= implode(",", $video->screens); ?>" class="r" alt="<?= $video->alt; ?>" />



                                <div class="duration"><?= $video->duration ?></div>
                            </div>
                            <p class="title"  style="height: 27px;"><?= $video->title ?></p>
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
                </div>
            <?php endforeach; ?>
            <script>
                $(function() {
                    $('.preview-video').hover(function() {
//                        console.log("START");
//                        console.log($(this).find("img").attr('data'));
                        var _this = this,
                            curImage = $(this).find("img"),
                            images = curImage.attr('data').split(',');
                        counter = 0;
                      //  console.log(images);

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
        <?php //echo \app\components\widgets\TeaserWidget::widget(['type'=>'video']); ?>
        <!-- teasers -->
        <!-- ads -->
        <?php echo \app\components\widgets\AdsWidget::widget(['url'=>'/main/video']); ?>
        <!-- /ads -->

    </div>
    <!-- gallery -->

    <!-- subscription -->
   <?= \app\components\widgets\SubscriptionWidget::widget([]); ?>
    <!-- subscription -->

    <div class="c-c">
        <?php

            $photoSet = \app\models\PhotoCatalog::find()->count("*");
        ?>
        <div class="c">
            <p class="fs24 fw300 text-center opensans"><a class="pink" href="/photo" title="Эксклюзивные порно фото и видео в HD качестве!">Смотреть <span class="fw700"><?= $photoSet; ?>+</span> фотосетов <span class="fw700">в лучшем качестве</span></a></p>
        </div>

        <!-- menu -->
       <?= \app\components\widgets\CategoryWidget::widget(['type'=>'photo']); ?>
        <!-- menu -->

        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans"><?= $dataPage->title_photo ?></h1>
            <p><?= $dataPage->description_photo ?></p>

        </div>
        <!-- intro text -->

    </div>


    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <?php foreach($photos as $photo): ?>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
                <div class="photo-element <?= (MyHelper::isClassNew($photo->create_at))?'new':''; ?>">
                    <a href="/photo/<?= $photo->category->url; ?>/<?= $photo->url; ?>">
                        <div class="preview">
                            <img src="<?= (isset($photo->photos[0]))?$photo->photos[0]:"#"; ?>" class="r" alt="<?= $photo->title; ?>" />
                            <div class="duration"><?= $photo->photosCount; ?> фото</div>
                        </div>
                        <p class="fs20 semichopped black cursive text-center"><?= $photo->actor?></p>
                        <p class="title semichopped"><?= $photo->title; ?></p>
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
            </div>
            <?php endforeach; ?>
        </div>

        <?php echo \app\components\widgets\AdsWidget::widget(['url'=>'/main/photo']); ?>
        <!-- teasers -->
       <?php //echo \app\components\widgets\TeaserWidget::widget(['type'=>'photo']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

</div>
<!-- main -->