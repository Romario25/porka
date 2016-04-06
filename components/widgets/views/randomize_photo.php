<div class="c-c gallery">
    <?php foreach($model as $k=>$photo): ?>
        <?php
        if(!empty($photo->photo_preview) && file_exists('../web/uploads/previewphoto/'.$photo->photo_preview)){
            $src = '/uploads/previewphoto/'.$photo->photo_preview;
        } else {
            $src = (isset($photo->photos[0]))?$photo->photos[0]:"#";
        }
        ?>
    <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
        <div class="photo-element new">
            <a href="/photo/<?= $photo->category->url; ?>/<?= $photo->url; ?>">
                <div class="preview">
                    <img src="<?= $src ?>" class="r" alt="<?= $photo->title ?>">
                    <div class="duration"><?= $photo->photosCount; ?> шт.</div>
                </div>
                <p class="fs20 semichopped black cursive text-center"><?= $photo->actor; ?></p>
                <p class="title semichopped"><?= $photo->title ?></p>
            </a>
            <div class="cc meta">
                <div class="c x1d2--d x1d2--t x1--m">
                    <span><?= $photo->update_at?></span>
                </div>
                <div class="cc x1d2--d x1d2--t x1--m">
                    <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $photo->hits; ?>&nbsp;<i class="fa fa-eye"></i></span>
                                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                </div>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</div>