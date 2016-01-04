<div class="c-c gallery">

    <?php foreach($model as $k=>$video): ?>
    <article class="c x1d3--d x1d3--t x1d2--m gallery-element">
        <div class="video-element new">
            <a href="/video/<?= $video->url; ?>">
                <div class="preview" >

                    <img src="<?= $video->screens[0];?>" data="<?= implode(",", $video->screens); ?>" class="r" alt="Видео: Отсосала и дала в попку...">



                    <div class="duration"><?= $video->duration; ?></div>
                </div>
                <h1 class="title"><?= $video->title ?></h1>
            </a>
            <div class="cc meta">
                <div class="c x3d5--d x3d6--t x1--m">
                    <span><?= $video->update_at; ?></span>
                </div>
                <div class="cc x2d5--d x3d6--t x1--m">
                    <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $video->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
                    <!--                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>-->
                </div>
            </div>
        </div>
    </article>
    <?php endforeach; ?>

</div>