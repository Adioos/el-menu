<?php

/** @var yii\web\View $this */

//$this->title = 'My Yii Application';
?>

<div class="title-menu">
    Основное меню
</div>

<div class="menuWrapper">
    <div class="menuLimiter">
        <menu class="menu">
            <li class="menu-item">
                <a href="#zakuski">Закуски</a>
            </li>
            <li class="menu-item">
                <a href="#gor-zakuski">Горячие закуски</a>
            </li>
            <li class="menu-item">
                <a href="#salati">Салаты</a>
            </li>
            <li class="menu-item">
                <a href="#supi">Супы</a>
            </li>
            <li class="menu-item">
                <a href="#burgeri">Бургеры</a>
            </li>
            <li class="menu-item">
                <a href="#gor-bluda">Горячие блюда</a>
            </li>
            <li class="menu-item">
                <a href="#pasta">Паста</a>
            </li>
            <li class="menu-item">
                <a href="#pizza">Пицца</a>
            </li>
            <li class="menu-item">
                <a href="#rolli">Роллы</a>
            </li>
            <li class="menu-item">
                <a href="#garniri">Гарниры</a>
            </li>
            <li class="menu-item">
                <a href="#deserti">Десерты</a>
            </li>
        </menu>
    </div>
</div>

<div class="main-section">

    <div class="main-subtitle" id="zakuski">
        Закуски:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="1">
            <div class="product-name">
                Тартины с лососем
            </div>
            <div class="product-desc">
                Гарантировано сохранит вашу фигуру!
            </div>
            <div class="product-price">
                2490 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="2">
            <div class="product-name">
                Сырная тарелка
            </div>
            <div class="product-price">
                2490 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="gor-zakuski">
        Горячие закуски:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="3">
            <div class="product-name">
                Блинчики с курицей, сыром и грибами
            </div>

            <div class="product-price">
                1990 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="salati">
        Салаты:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="4">
            <div class="product-name">
                Греческий
            </div>
            <div class="product-desc">
                Гарантировано сохранит вашу фигуру!
            </div>
            <div class="product-price">
                2490 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="5">
            <div class="product-name">
                Цезарь
            </div>
            <div class="product-price">
                2690 Тенге<span>---с мясом цыплёнка</span>
            </div>
            <div class="product-price">
                2490 Тенге<span>---с креветками</span>
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="supi">
        Супы:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="6">
            <div class="product-name">
                Солянка
            </div>
            <div class="product-price">
                1990 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="burgeri">
        Бургеры:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="7">
            <div class="product-name">
                Old school
            </div>
            <div class="product-desc">
                Говяжья котлета, сыр чеддер, свежие помидоры, огурчики, лист салата, лук маринованный
            </div>
            <div class="product-price">
                3290 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="gor-bluda">
        Горячие блюда:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="8">
            <div class="product-name">
                Куринная грудка по-тайски
            </div>
            <div class="product-price">
                3490 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="9">
            <div class="product-name">
               Лосось с овощами WOK
            </div>
            <div class="product-desc">
              По вашему желанию, блюдо может быть приготовлено на пару
            </div>
            <div class="product-price">
                5790 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="pasta">
        Паста:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="10">
            <div class="product-name">
                Карбонара
            </div>
            <div class="product-price">
                2890 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="pizza">
        Пицца:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="11">
            <div class="product-name">
                Маргарита
            </div>
            <div class="product-price">
                2290 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="rolli">
        Роллы:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="12">
            <div class="product-name">
              Филадельфия
            </div>
            <div class="product-price">
                2690 Тенге<span>---с лососем</span>
            </div>
            <div class="product-price">
                2490 Тенге<span>---с угрём</span>
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="garniri">
        Гарниры:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="13">
            <div class="product-name">
                Фри / Дольки
            </div>

            <div class="product-price">
                990 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="deserti">
        Десерты:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="14">
            <div class="product-name">
                Испанский чизкейк
            </div>
            <div class="product-price">
                1790 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
</div>
