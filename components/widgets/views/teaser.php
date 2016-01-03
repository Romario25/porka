<?php
$this->registerJsFile('/js/jquery.nailthumb.1.0.min.js');
$this->registerCssFile('/css/jquery.nailthumb.1.0.min.css');

?>
<style type="text/css" media="screen">
    .square-thumb {
        width: 200px;
        height: 200px;
    }
</style>
<div class="c-c teasers">

    <?php foreach($model as $item): ?>
        <?php
            if($type == 'video'){
                $src = $item->screens[0];
            } else {
                $src = $item->photos[0];
            }
        //$src = '#';

        ?>
        <div class="c x1d5--d x1d4--t x1d3--m">
            <div class="teaser ">
                <a href="/<?= $type; ?>/<?= $item->url; ?>">
                    <div class="nailthumb-container square-thumb">
                        <img class="r" src="<?= $src; ?>" alt="<?= $item->title; ?>">
                    </div>

                    <p><?= $item->title; ?></p>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.nailthumb-container').nailthumb();
    });
</script>