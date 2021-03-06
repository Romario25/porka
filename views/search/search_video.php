<?php
/** @var \app\models\Video $videos */
?>
<!-- main -->
<div class="g w1140 main">

    <!-- menu -->
    <?php echo \app\components\widgets\CategoryWidget::widget([]); ?>
    <!-- menu -->

    <div class="c">
        <p class="fs24 fw700 text-center opensans">Вы искали : <?= $searchString; ?></p>
    </div>


    <div class="gray-bg">

        <!-- gallery -->
        <div class="c-c gallery">

            <?php foreach($result as $video): ?>
                <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
                    <div class="video-element new">
                        <a href="/video/<?= $video['url']; ?>">
                            <div class="preview" >
                                <?php
                                $screens = \app\models\VideoScreens::find()
                                    ->select("screen_url")
                                    ->where('video_id = :video_id', [':video_id'=>$video['id']])
                                    ->asArray()
                                    ->column();

                                ?>
                                <img src="<?= $screens[0];?>" data-image="<?= implode(",", $screens); ?>" class="r" alt="Видео: Отсосала и дала в попку...">



                                <div class="duration"><?= $video['duration']; ?></div>
                            </div>
                            <h1 class="title"><?= $video['title'] ?></h1>
                        </a>
                        <div class="cc meta">
                            <div class="c x3d5--d x3d6--t x1--m">
                                <span><?= $video['update_at']; ?></span>
                            </div>
                            <div class="cc x2d5--d x3d6--t x1--m">
                                <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $video['hits']; ?>&nbsp;<i class="fa fa-eye"></i></span>
                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
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


    <!-- intro text -->

</div>
<!-- main -->