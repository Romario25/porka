<?php
/** @var \app\models\Video $videos */
use app\components\MyHelper;

/** @var \app\models\PhotoCatalog $photos */
?>
<?php
$this->title = \app\models\Pages::getPage('/new', 'meta_title');
//$this->registerMetaTag([
//    'name' => 'keywords',
//    'content' => \app\models\Pages::getPage('/new', 'meta_keywords')
//]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => \app\models\Pages::getPage('/new', 'meta_description')
]);

?>
<div class="g w1140 main">


    <div class="c-c">


        <?php

        echo \app\components\widgets\CategoryWidget::widget(['type'=>'video']);
        ?>
        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans">
                <?= \app\models\Pages::getPage('/new', 'title');?>
            </h1>
            <p>
                <?= \app\models\Pages::getPage('/new', 'description');?>
            </p>
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
                            <p class="title"><?= $video->title ?></p>
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
                            images = curImage.attr('data-image').split(',');
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
        <?php echo \app\components\widgets\AdsWidget::widget(['url'=>'/new/video']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

    <!-- subscription -->

    <!-- subscription -->

    <div class="c-c">



        <!-- menu -->
        <?= \app\components\widgets\CategoryWidget::widget(['type'=>'photo']); ?>
        <!-- menu -->

    </div>


    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <?php foreach($photos as $photo): ?>
                <?php
                    if(!empty($photo->photo_preview) && file_exists('../web/uploads/previewphoto/'.$photo->photo_preview)){
                        $src = '/uploads/previewphoto/'.$photo->photo_preview;
                    } else {
                        $src = (isset($photo->photos[0]))?$photo->photos[0]:"#";
                    }
                ?>
                <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
                    <div class="photo-element <?= (MyHelper::isClassNew($photo->create_at))?'new':''; ?>">
                        <a href="/photo/<?= $photo->category->url; ?>/<?= $photo->url; ?>">
                            <div class="preview">
                                <img src="<?= $src; ?>" class="r" alt="<?= $photo->title; ?>" />
                                <div class="duration"><?= $photo->photosCount; ?> шт.</div>
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


        <!-- teasers -->
        <?php echo \app\components\widgets\AdsWidget::widget(['url'=>'/new/photo']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

</div>
<!-- main -->