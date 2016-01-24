<?php
/** @var \app\models\Video $video  */
/** @var \yii\web\View $this */
?>

<?php
    $this->title = $video->meta_title;
//    $this->registerMetaTag([
//        'name' => 'keywords', 'value' => $video->meta_keywords
//    ]);
    $this->registerMetaTag([
        'name' => 'description', 'value' => $video->meta_description
    ]);

?>
<!-- video -->
<div class="herounit turquoise-gradient-bg">
    <div class="herounit darkgray-bg">
        <div class="g w1140 ta-center">
            <div class="c x1d6--d x1d3--t vmiddle inflated-v">
                <p class="fs22 fw400 pink chopped opensans ta-cll"><?= $video->actor; ?></p>
                <p class="fs12 gray chopped opensans ta-cll"><?= $video->update_at; ?></p>
            </div>
            <div class="c x1d2--d x1d3--t vmiddle inflated-v">
                <h1 class="fs16 fw400 white chopped opensans ta-cll"><?= $video->title; ?></h1>
                <p class="fs12 gray chopped opensans ta-cll">Категория: <a class="gray" href="/category/<?= $video->category->url; ?>"><?= $video->category->name; ?></a></p>
            </div>
            <div class="c x1d3--d x1d3--t vmiddle inflated-v">
                <div class="cc x1d3 vmiddle">
                    <p class="c fs24 fw400 white chopped text-right">98%</p>
                </div>
                <div class="cc x1d3 vmiddle">
                    <span class="fs10 gray uppercase"><span class="white">80</span> лайков<br><span class="white"><?= $video->hits; ?></span> просмотров</span>
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
    <div class="g w1140 video">
<!--        <a href="#"><img class="r" src="/images/player.jpg" alt=""></a>-->
<!--        <video id="Video1"  width="1140" controls preload="auto">-->
<!--            <source src="--><?php //echo $video->object_url_0; ?><!--" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />-->
<!--        </video>-->
<!--        <div style="position: relative; top:-40px;">-->
<!--            <select name="hd" id="hd" >-->
<!--                <option value="320X240">320</option>-->
<!--                <option value="640X480">640</option>-->
<!--                <option value="1280X720">1280</option>-->
<!--            </select>-->
<!--        </div>-->
        <script>
//            $(function(){
//                $("#hd").change(function(){
//                    //arr = "a,b,c".split(',')
//                    var arr = $(this).val().split("X");
//                    var w = arr[0];
//                    var h = arr[1];
//                    var url = $.ajax({
//                        type: "POST",
//                        url: "/site/urlvideo",
//                        data: "w="+w+"&h="+h+"&file="+"<?php //echo $video->object_url_0; ?>//",
//                        async: false
//                    }).responseText;
//                    //alert(url);
//                    //$("video source").attr("src", url);
//                    var video = document.getElementById("Video1");
//                    video.src = url;
//                    video.load();  // if HTML source element is used
//                    //video.currentTime = 0;
//                    video.play();
//                });
//            });
        </script>
        <!-- JS jwplayer 6.8 -->
        <script type="text/javascript" src="/jwplayer/jwplayer.js"></script>
        <!-- JWplayer Licence - put your licence here -->
        <script type="text/javascript">jwplayer.key="sufeUGJJuZVgifO9BAztb33TNTvTYpGgHLYfVw==";</script>

        <div id="video">Loading the player...</div>
        <script type="text/javascript">
            var h = null;
//            alert(screen.width);
//            //var screenWidth = screen.width;
//            if(Number(screen.width) < 1000){
//                h = 270;
//            } else {
//                h = 610;
//            }
            //var h = "100%";
            if(Number(screen.width) > 1000){
                h = 610;
            } else if(Number(screen.width) < 1000 && Number(screen.width) > 640 ){
                h = 270;
            } else {
                h = 180;
            }
            var playerInstance = jwplayer("video");
            playerInstance.setup({
                   image: "/uploads/screenshotvideo/<?= $video->screenshot; ?>",
                width: "100%",
                height: h,

                title: "<?php echo $video->title; ?>",
                description: "",
                playlist:[
                    {
                        image: "/uploads/screenshotvideo/<?= $video->screenshot; ?>",
                        sources :[
                            {
                                file: "<?php echo $video->object_url_0; ?>",
                                label:"360p"
                            },
                            {
                                file: "<?php echo $video->object_url_1; ?>",
                                label:"480p"
                            },
                            {
                                file: "<?php echo $video->object_url_2; ?>",
                                label:"720p"
                            }
                        ]
                    }





                ]
            });
        </script>


    </div>
</div>
<!-- video -->

<!-- main -->
<div class="g w1140 main">
    <div class="c-c white-bg">

        <!-- intro text -->
        <div class="c">
            <p><?= $video->description ?></p>
        </div>
        <!-- intro text -->

    </div>

    <!-- gallery -->
    <div class="gray-bg">
       <?= \app\components\widgets\RandomizeWidget::widget(['type'=>'video', 'currentId'=> $video->id])?>


        <!-- teasers -->
        <?= \app\components\widgets\AdsWidget::widget(['url'=>'video/view']); ?>
        <!-- teasers -->

    </div>
    <!-- gallery -->

</div>
<!-- main -->