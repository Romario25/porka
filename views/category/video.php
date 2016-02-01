<?php
/** @var \app\models\Video $videos */
/** @var \app\models\Category $category */
/** @var \yii\web\View $this */
?>
<?php

$this->title = $category->meta_title;


$this->registerMetaTag([
    'name' => 'description', 'content' => $category->meta_description
]);



?>
<div class="g w1140 main">
    <!-- main -->

    <div class="c-c">

        
        <?php

        echo \app\components\widgets\CategoryWidget::widget(['type'=>'video']);
        ?>
        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans"><?= $category->title; ?></h1>
            <p class="text-center"><?= $category->description; ?></p>
        </div>
        <!-- intro text -->

    </div>

    <!-- gallery -->
    <div class="c-c gallery">

        <?php foreach($videos as $k=>$video): ?>
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
                <div class="video-element new">
                    <a href="/video/<?= $video->category->url; ?>/<?= $video->url; ?>">
                        <div class="preview" >

                            <img src="<?= $video->screens[0];?>" data-image="<?= implode(",", $video->screens); ?>" class="r" alt="<?= $video->alt; ?>">



                            <div class="duration"><?= $video->duration; ?></div>
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
                        images = curImage.attr('data-image').split(',');
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



</div>
<!-- main -->