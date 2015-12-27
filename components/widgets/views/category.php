<?php
/** @var \app\models\Category $categoryShow */
/** @var \app\models\Category $categoryHide */
use yii\helpers\Html;
?>
<nav class="c navitron">
    <ul class="relative">
        <div class="cc x5d6--d x1--t x1--m itemset">
            <?php foreach($categoryShow as $category): ?>
                <li class="cc x1d5--d x1d5--t x1--m item"><?= Html::a($category->name, '/category/'.$category->url)?></li>
            <?php endforeach; ?>
        </div>
        <li class="cc x1d6--d x1--t x1--m item relative">
            <input type="checkbox" id="dropdown-trigger" class="dropdown-trigger hidden">
            <label for="dropdown-trigger">Все категории</label>

            <div class="dropdown">
                <ul>
                    <?php foreach($categoryHide as $category): ?>
                    <li><?= Html::a($category->name, '/category/'.$category->url)?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </li>
    </ul>
</nav>