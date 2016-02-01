<?php
/** @var \app\models\PhotoCatalog $photos */
use yii\widgets\LinkPager;

?>

<?php

$this->title = $category->meta_title;

$this->registerMetaTag([
    'name' => 'description', 'content' => $category->meta_description
]);




?>

<div class="g w1140 main">

    <!-- menu -->
    <?php echo \app\components\widgets\CategoryWidget::widget(['type'=>'photo']) ?>
    <!-- menu -->

    <div class="c">
        <p class="fs24 text-center opensans"><?= $category->title; ?></p>
    </div>

    <!-- intro text -->
    <div class="c-c">
        <div class="c text-center">
            <p><?= $category->description; ?></p>
        </div>
    </div>
    <!-- intro text -->

    <div class="gray-bg">

        <!-- gallery -->


        <div class="c-c gallery">

            <?php foreach($photos as $k=>$photo): ?>
                <?php
                    if(!empty($photo->photo_preview) && file_exists('../web/uploads/previewphoto/'.$photo->photo_preview)){
                        $src = '/uploads/previewphoto/'.$photo->photo_preview;
                    } else {
                        $src = (isset($photo->photos[0]))?$photo->photos[0]:"#";
                    }
                ?>
                <div class="c x1d4--d x1d3--t x1d2--m gallery-element">
                    <div class="photo-element new">
                        <a href="/photo/<?= $photo->category->url; ?>/<?= $photo->url; ?>">
                            <div class="preview">
                                <img src="<?= $src; ?>" class="r" alt="<?= $photo->title ?>">
                                <div class="duration"><?= $photo->photosCount; ?> фото</div>
                            </div>
                            <p class="fs20 semichopped black cursive text-center"><?= $photo->actor?></p>
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
                </div>
                <?php
                if($k == 7){
                    echo '</div>';
                    echo \app\components\widgets\TeaserWidget::widget(['type'=>'photo']);
                    echo '<div class="c-c gallery">';
                }

                ?>
            <?php endforeach; ?>
        </div>
        <!-- gallery -->

        <!-- teasers -->

        <!-- teasers -->

        <!-- gallery -->
        <div class="c-c gallery">

        </div>
        <!-- gallery -->

        <!--        <div class="c-c pagination">-->
        <!--            <ul class="unstyled inline">-->
        <!--                <li class="button inactive"><a href="#">&lt;&lt;</a></li>-->
        <!--                <li class="button inactive"><a href="#">&lt;</a></li>-->
        <!--                <li class="button current"><a href="#">1</a></li>-->
        <!--                <li class="button"><a href="#">2</a></li>-->
        <!--                <li class="button"><a href="#">3</a></li>-->
        <!--                <li class="button"><a href="#">4</a></li>-->
        <!--                <li class="button"><a href="#">5</a></li>-->
        <!--                <li class="button"><a href="#">&gt;</a></li>-->
        <!--                <li class="button"><a href="#">&gt;&gt;</a></li>-->
        <!--            </ul>-->
        <!--        </div>-->

        <div class="c-c pagination">
            <?php
            // отображаем постраничную разбивку
//            echo LinkPager::widget([
//                'pagination' => $pages,
//                'options' => [
//                    'class' => 'unstyled inline',
//                ],
//                'activePageCssClass' => 'button current',
//                'disabledPageCssClass' => 'button',
//                'firstPageCssClass' => 'button',
//                'lastPageCssClass' => 'button',
//                'prevPageCssClass' => 'button'
//
//            ]);
            ?>
        </div>



    </div>

    <!-- intro text -->

</div>