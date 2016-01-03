<?php
/** @var \app\models\PhotoCatalog $photos */
?>
<div class="g w1140 main">

    <!-- menu -->
    <?php echo \app\components\widgets\CategoryWidget::widget([]) ?>
    <!-- menu -->

    <div class="c">
        <p class="fs24 fw700 text-center opensans">Вы искали : <?= $searchString; ?></p>
    </div>



    <div class="gray-bg">

        <!-- gallery -->


        <div class="c-c gallery">
            <?php foreach($result as $photo): ?>
                <?php

                    $photos = \app\models\Photos::find()
                    ->where("catalog_id = :catalog_id", [":catalog_id"=>$photo['id']])
                    ->select("url_thumbnail")->asArray()->column();
                    $photosCount = \app\models\Photos::find()->where("catalog_id = :catalog_id", [":catalog_id"=>$photo['id']])->count("*");

                ?>
                <article class="c x1d4--d x1d3--t x1d2--m gallery-element">
                    <div class="photo-element new">
                        <a href="/photo/<?= $photo['url']; ?>">
                            <div class="preview">
                                <img src="<?= (isset($photos[0]))?$photos[0]:"#" ?>" class="r" alt="<?= $photo['title'] ?>">
                                <div class="duration"><?= $photosCount; ?> фото</div>
                            </div>
                            <p class="fs20 semichopped black cursive text-center">Jessica Albert</p>
                            <h1 class="title semichopped"><?= $photo['title'] ?></h1>
                        </a>
                        <div class="cc meta">
                            <div class="c x1d2--d x1d2--t x1--m">
                                <span><?= $photo['update_at']?></span>
                            </div>
                            <div class="cc x1d2--d x1d2--t x1--m">
                                <span class="c x1d2--d x1d2--t x1--m nowrap"><?= $photo['hits']; ?>&nbsp;<i class="fa fa-eye"></i></span>
                                <span class="c x1d2--d x1d2--t x1--m nowrap">86%&nbsp;<i class="fa fa-thumbs-up"></i></span>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <!-- gallery -->


</div>