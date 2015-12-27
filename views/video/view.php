<?php
/** @var \app\models\Video $video  */
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
        <video  width="1140" controls >
            <source src="<?= $video->object_url; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
        </video>

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
        <div class="c-c gallery">
            <article class="c x1d3--d x1d2--t x1--m gallery-element">
                <div class="video-element new">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/400x300?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">31:54</div>
                        </div>
                        <h1 class="title">Отсосала у классного муж и дала в попку...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x3d5--d x3d6--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x2d5--d x3d6--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">116&nbsp;<i class="fa fa-eye"></i></span>
                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="c x1d3--d x1d2--t x1--m gallery-element">
                <div class="video-element new">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/400x300?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">31:54</div>
                        </div>
                        <h1 class="title">Отсосала у классного муж и дала в попку...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x3d5--d x3d6--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x2d5--d x3d6--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">116&nbsp;<i class="fa fa-eye"></i></span>
                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="c x1d3--d x1d2--t x1--m gallery-element">
                <div class="video-element">
                    <a href="#">
                        <div class="preview">
                            <img src="http://placehold.it/400x300?text=+" class="r" alt="Видео: Отсосала и дала в попку...">
                            <div class="duration">31:54</div>
                        </div>
                        <h1 class="title">Отсосала у классного муж и дала в попку...</h1>
                    </a>
                    <div class="cc meta">
                        <div class="c x3d5--d x3d6--t x1--m">
                            <span>12 мар 2015</span>
                        </div>
                        <div class="cc x2d5--d x3d6--t x1--m">
                            <span class="c x1d2--d x1d2--t x1--m nowrap">116&nbsp;<i class="fa fa-eye"></i></span>
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