<?php
/** @var \app\models\Video $videos */
use yii\widgets\LinkPager;

?>

<?php
$this->title = \app\models\Pages::getPage('/video', 'meta_title');
//$this->registerMetaTag([
//    'name' => 'keywords',
//    'content' => \app\models\Pages::getPage('/video', 'meta_keywords')
//]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => \app\models\Pages::getPage('/video', 'meta_description')
]);

?>
<!-- main -->
<div class="g w1140 main">

    <!-- menu -->
    <?php echo \app\components\widgets\CategoryWidget::widget(['type'=>'video']); ?>
    <!-- menu -->

    <div class="c text-center">
        <h1 class="fs22 fw400 opensans"  style="margin-bottom: 5px;">
            <?= \app\models\Pages::getPage('/video', 'title');?>
        </h1>
    </div>

    <!-- intro text -->
    <div class="c-c">
        <div class="c text-center">
            <p><?= \app\models\Pages::getPage('/video', 'description');?></p>
        </div>
    </div>
    <!-- intro text -->

    <div class="gray-bg">

        <!-- gallery -->
        <div class="c-c gallery">

            <?php foreach($videos as $k=>$video): ?>
                <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
                    <div class="video-element new">
                        <a href="/video/<?= $video->category->url; ?>/<?= $video->url; ?>">
                            <div class="preview preview-video" >

                                <img src="<?= $video->screens[0];?>" data-image="<?= implode(",", $video->screens); ?>" class="r" alt="<?= $video->alt; ?>" />



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
                if($k == 11){
                    echo '</div>';
                    echo \app\components\widgets\AdsWidget::widget(['url'=>'video/index']);
                    echo '<div class="c-c gallery">';
                }

                ?>
            <?php endforeach; ?>
            <script>
                $(function() {
                    $('.preview-video').hover(function() {
//                       console.log("START");
//                        console.log($(this).find("img").attr('data'));
                        var _this = this,
                            curImage = $(this).find("img"),
                            images = curImage.attr('data-image').split(',');
                        counter = 0;
                        //console.log(images);

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