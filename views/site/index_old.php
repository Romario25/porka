<?php
use yii\helpers\Html;
?>
<!-- slider -->
<div class="herounit blue-gradient-bg">
    <div class="g w1140 slider">
<!--        <a href="#"><img class="r" src="images/slide-01.png" alt=""></a>-->
<!--        <div class="r">-->
<!--            --><?php
                    $slider = \app\models\Slider::find()->all();
                    $images = [];
                    foreach($slider as $slide){
                        $images[] = Html::a(Html::img($slide->src, ['alt' => $slide->title, 'title' => $slide->title]), [$slide->url]);
                    }

                    echo yii\bootstrap\Carousel::widget(['items' => $images, 'controls' => false]);
//            ?>
<!--            -->
<!--        </div>-->



    </div>
</div>
<div style="clear: both;"></div>
<!-- slider -->
<!-- main -->
<div class="g w1140 main">
    <div class="c-c">

        <div class="c">
            <p class="fs24 fw300 text-center opensans"><a class="pink" href="#" title="Эксклюзивные порно фото и видео в HD качестве!">Смотреть <span class="fw700">350+</span> видео в <span class="fw700">HD качестве</span></a></p>
        </div>

        <nav class="c navitron">
            <ul class="relative">
                <li class="cc x5d6-d x1--t x1--m itemset">
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Модели</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Экзотика</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Мамочки</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Лесбиянки</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Брюнетки</a></div>
                </li>
                <li class="cc x1d6--d x1--t x1--m item relative">
                    <input type="checkbox" id="dropdown-trigger" class="dropdown-trigger hidden">
                    <label for="dropdown-trigger">Все категории</label>

                    <div class="dropdown">
                        <ul>
                            <li><a href="#">Мастурбация</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Азиатки</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Зрелые</a></li>
                            <li><a href="#">Мастурбация</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Азиатки</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Зрелые</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans">Фото голых и привлекательных девушек, красивого секса, порно фото красивых моделей и ххх кадры на сайте tukituki.org</h1>
            <p>Для любого мужчины, если конечно он мужчина традиционной сексуальной ориентации, нет ничего прекраснее, чем видобольстительного обнаженного женского тела. Тем более,  что на данный момент в интернете есть множество сайтов, накоторых выложены целые галереи с фотографиями прекрасных, сексапильных голых девушек. Они  будут манить вас  толькоодним видом своего божественного девичьего тела и неприкрытой наготой. Любой мужчина, увидев на улице прекрасную представительницу слабого пола, на которой минимум одежды, всеми фибрами души к ней тянется, и его взор может надолгозаостриться на области пониже талии или декольте. Ещё старина Фрейд ставил либидо на первое место, которое отвечаетза все наши действия. По его мнению, именно либидо движет человеком, говоря ему как себя вести, как выбирать друзей и многое другое. Женщины, по мнению Фрейда не так склонны терять голову, при виде красивого мачо, как мужчины при виде обольстительных голых девушек.</p>
        </div>
        <!-- intro text -->

    </div>

    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d3--d x1d3--t x1d2--m gallery-element">
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
            </div>
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

    <!-- subscription -->
    <div class="subscription opensans">
        <form action="#" method="post" class="c-c x3d5--d x3d4--t x1--m">
            <p class="c title x1d2--m">Хотите <span class="fw600">свеженькое и лучшее?</span></p>
            <p class="c fs18 white">Получайте <span class="fw600">эксклюзивные фото</span> и видео <span class="fw600">самых горячих девушек</span> в <span class="fw600">лучшем качестве</span> первыми!</p>
            <div class="g">
                <div class="c x2d3--d x1d2--t x1--m"><input class="c" type="text" placeholder="Ваш e-mail"></div>
                <div class="c x1d3--d x1d2--t x1--m"><button class="c">Подписаться</button></div>
            </div>
        </form>

    </div>
    <!-- subscription -->

    <div class="c-c">

        <div class="c">
            <p class="fs24 fw300 text-center opensans"><a class="pink" href="#" title="Эксклюзивные порно фото и видео в HD качестве!">Смотреть <span class="fw700">350+</span> видео в <span class="fw700">HD качестве</span></a></p>
        </div>

        <!-- menu -->
        <nav class="c navitron">
            <ul class="relative">
                <li class="cc x5d6-d x1--t x1--m itemset">
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Модели</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Экзотика</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Мамочки</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Лесбиянки</a></div>
                    <div class="cc x1d5--d x1d5--t x1--m item"><a href="#">Брюнетки</a></div>
                </li>
                <li class="cc x1d6--d x1--t x1--m item relative">
                    <input type="checkbox" id="dropdown-trigger2" class="dropdown-trigger hidden">
                    <label for="dropdown-trigger2">Все категории</label>

                    <div class="dropdown">
                        <ul>
                            <li><a href="#">Мастурбация</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Азиатки</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Зрелые</a></li>
                            <li><a href="#">Мастурбация</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Азиатки</a></li>
                            <li><a href="#">Большие попки</a></li>
                            <li><a href="#">Зрелые</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- menu -->

        <!-- intro text -->
        <div class="c text-center">
            <h1 class="fs22 fw400 opensans">Фото голых и привлекательных девушек, красивого секса, порно фото красивых моделей и ххх кадры на сайте tukituki.org</h1>
            <p>Для любого мужчины, если конечно он мужчина традиционной сексуальной ориентации, нет ничего прекраснее, чем видобольстительного обнаженного женского тела. Тем более,  что на данный момент в интернете есть множество сайтов, накоторых выложены целые галереи с фотографиями прекрасных, сексапильных голых девушек. Они  будут манить вас  толькоодним видом своего божественного девичьего тела и неприкрытой наготой. Любой мужчина, увидев на улице прекрасную представительницу слабого пола, на которой минимум одежды, всеми фибрами души к ней тянется, и его взор может надолгозаостриться на области пониже талии или декольте. Ещё старина Фрейд ставил либидо на первое место, которое отвечаетза все наши действия. По его мнению, именно либидо движет человеком, говоря ему как себя вести, как выбирать друзей и многое другое. Женщины, по мнению Фрейда не так склонны терять голову, при виде красивого мачо, как мужчины при виде обольстительных голых девушек.</p>
        </div>
        <!-- intro text -->

    </div>


    <!-- gallery -->
    <div class="gray-bg">
        <div class="c-c gallery">
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
            <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
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
            </div>
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