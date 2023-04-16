<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Modal;

?>

<div class="title-menu">
    Барное меню
</div>



<div class="menuWrapper">
    <div class="menuLimiter">
        <menu class="menu">
            <li class="menu-item">
                <a href="#classic">Классика</a>
            </li>
            <li class="menu-item">
                <a href="#cocktails">Коктейли</a>
            </li>
            <li class="menu-item">
                <a href="#bez-cocktails">Безалкогольные коктейли</a>
            </li>
            <li class="menu-item">
                <a href="#tinctures">Фирменные настойки</a>
            </li>
            <li class="menu-item">
                <a href="#limonade">Лимонады</a>
            </li>
            <li class="menu-item">
                <a href="#tea">Чаи</a>
            </li>
            <li class="menu-item">
                <a href="#coffee">Кофейные напитки</a>
            </li>
            <li class="menu-item">
                <a href="#smoothies">Смузи</a>
            </li>
            <li class="menu-item">
                <a href="#fresh">Фреши</a>
            </li>
            <li class="menu-item">
                <a href="#beer">Пиво</a>
            </li>
            <li class="menu-item">
                <a href="#whiskey">Виски</a>
            </li>
            <li class="menu-item">
                <a href="#burbon">Бурбон</a>
            </li>
            <li class="menu-item">
                <a href="#liquor">Ликеры</a>
            </li>
            <li class="menu-item">
                <a href="#vodka">Водка</a>
            </li>
            <li class="menu-item">
                <a href="#rom">Ром</a>
            </li>
            <li class="menu-item">
                <a href="#cognac">Коньяк</a>
            </li>
        </menu>
    </div>
</div>

<div class="main-section">

    <div class="main-subtitle" id="">
        Классика:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="15">
            <div class="product-name">
                Mojito Classic
            </div>
            <div class="product-price">
                1500 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="main-subtitle" id="cocktails">
        Коктейли:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="16">
            <div class="product-name">
                Rancho Pancho
            </div>
            <div class="product-desc">
                Страстный тропический коктейль на основе маракуйи с нотами Мексики
            </div>
            <div class="product-price">
                1990 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="bez-cocktails">
        Безалкогольные коктейли:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="17">
            <div class="product-name">
                Мохито земляничный
            </div>
            <div class="product-price">
                1388 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="18">
            <div class="product-name">
                Ice Tea
            </div>
            <div class="product-price">
                1000 Тенге<span>---Малиновый</span>
            </div>
            <div class="product-price">
                1000 Тенге<span>---Дынный</span>
            </div>
            <div class="product-price">
                1000 Тенге<span>---Персиковый</span>
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="tinctures">
        Фирменные настойки:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="19">
            <div class="product-name">
                Лимончелло
            </div>
            <div class="product-price">
                500 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="limonade">
        Лимонады:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="20">
            <div class="product-name">
                Тархун со смородиной
            </div>
            <div class="product-price">
                1299 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="21">
            <div class="product-name">
                Малина апельсин
            </div>
            <div class="product-price">
                1299 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="22">
            <div class="product-name">
                Освежающий дынный лимонад
            </div>
            <div class="product-price">
                1299 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="tea">
        Чаи:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="23">
            <div class="product-name">
                Ташкентский
            </div>
            <div class="product-price">
                2099 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="coffee">
        Кофейные напитки:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="24">
            <div class="product-name">
                Espresso
            </div>
            <div class="product-price">
                422 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="smoothies">
        Смузи:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="25">
            <div class="product-name">
                Лесные ягоды
            </div>
            <div class="product-price">
                1233 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="fresh">
        Фреши:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="26">
            <div class="product-name">
                Морковный
            </div>
            <div class="product-price">
                999 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="beer">
        Пиво:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="27">
            <div class="product-name">
                Жигулёвское
            </div>
            <div class="product-price">
                500 Тенге<span>---бутылка 0.5</span>
            </div>
            <div class="product-price">
                2490 Тенге<span>---Бочка 3 литра</span>
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="whiskey">
        Виски:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="28">
            <div class="product-name">
                William Lawsons
            </div>
            <div class="product-price">
                2223 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="burbon">
        Бурбон:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="29">
            <div class="product-name">
                Jim Beam
            </div>
            <div class="product-price">
                1333 Тенге<span>---white</span>
            </div>
            <div class="product-price">
                1777 Тенге<span>---double rock</span>
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>


    <div class="main-subtitle" id="liquor">
        Ликеры:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="30">
            <div class="product-name">
                Jim Beam Honey
            </div>
            <div class="product-price">
                1333 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="vodka">
        Водка:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="31">
            <div class="product-name">
                Воздух
            </div>
            <div class="product-price">
                2500 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="rom">
        Ром:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="32">
            <div class="product-name">
                Captain Morgan
            </div>
            <div class="product-price">
                2490 Тенге<span>---White</span>
            </div>
            <div class="product-price">
                2490 Тенге<span>---Dark</span>
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

    <div class="main-subtitle" id="cognac">
        Коньяк:
    </div>
    <div class="product-wrapper">
        <div class="product-content" data-id="34">
            <div class="product-name">
                Казахстан
            </div>
            <div class="product-price">
                2490 Тенге
            </div>
        </div>
        <div class="product-img">
            <img src="/img/product1.webp" alt="">
        </div>
    </div>

</div>
