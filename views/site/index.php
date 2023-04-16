<?php

/** @var yii\web\View $this */

//$this->title = 'My Yii Application';
?>
<section class="intro">
    <div class="container">
        <div class="main-title">ЭЛЕКТРОННОЕ МЕНЮ</div>
        <div class="intro__content">
            <div class="intro__block">
                <h1 class="intro__title"><a href="<?= \yii\helpers\Url::to(['site/menu']) ?>">Основное меню</h1></a>
            </div>
            <div class="intro__block-2">
                <h1 class="intro__title"><a href="<?= \yii\helpers\Url::to(['site/bar']) ?>">Барное меню</h1></a>
            </div>
            <div class="intro__block-3">
                <h1 class="intro__title"><a href="<?= \yii\helpers\Url::to(['site/business']) ?>">Бизнес ланчи</h1></a>
            </div>
            <div class="intro__block-4">
                <h1 class="intro__title"><a href="<?= \yii\helpers\Url::to(['site/shashlyk']) ?>">Шашлыки</h1></a>
            </div>
        </div>
    </div>
</section>


