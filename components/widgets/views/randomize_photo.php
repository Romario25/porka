<div class="c-c gallery">
    <?php foreach($model as $k=>$photo): ?>

    <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
        <div class="photo-element new">
            <a href="/photo/<?= $photo->url; ?>">
                <div class="preview">
                    <img src="<?= (isset($photo->photos[0]))?$photo->photos[0]:"#" ?>" class="r" alt="<?= $photo->title ?>">
                    <div class="duration"><?= $photo->photosCount; ?> фото</div>
                </div>
                <p class="fs20 semichopped black cursive text-center"><?= $photo->actor; ?></p>
                <h1 class="title semichopped"><?= $photo->title ?></h1>
            </a>
            <div class="cc meta">
                <div class="c x1d2--d x1d2--t x1--m">
                    <span><?= $photo->update_at?></span>
                </div>
                <div class="cc x1d2--d x1d2--t x1--m">
                    <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $photo->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
                    <!--                            <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>-->
                </div>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</div>