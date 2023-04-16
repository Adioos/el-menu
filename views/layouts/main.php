<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap5\Html;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__block">
                <a href="/" class="header__logo">
                    <img src="/img/star.png" alt="logo">
                </a>
            </div>
            <div class="header__block">
                <form>
                    <input type="text" name=text" class="search" placeholder"Search here!">
                    <input type="submit" name="submit" class="submit" value="Поиск">
                </form>
            </div>
            <div class="header__block">
                <div class="header__lng">
                    <a href="#" class="header__lng-link">КАЗ</a>
                    <span>|</span>
                    <a href="#" class="header__lng-link active">RU</a>
                    <span>|</span>
                    <a href="#" class="header__lng-link">EN</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--<div class="swiper">-->
<!--    <div class="swiper-wrapper">-->
<!--        <div class="swiper-slide"><img src="/img/sale.webp" alt=""></div>-->
<!--        <div class="swiper-slide"><img src="/img/sale1.webp" alt=""></div>-->
<!--        <div class="swiper-slide"><img src="/img/sale2.webp" alt=""></div>-->
<!--    </div>-->
<!--</div>-->
<button id="checkout">Корзина</button>
<button id="clear_cart">Очистить корзину</button>
<div id="cart_content"></div>
<div class="flash">Добавлено в корзину</div>
        <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
