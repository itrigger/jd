<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="/wp-content/themes/jd/assets/css/screen.css">
</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<header id="site-header" class="site-header">
    <div class="site-header_line1">
        <div class="header-logo-wrap">
            <a href="/" class="header-logo-wrap__logo"></a>
        </div>
        <div class="header-slogan">
            опыт. ответственность. оперативность
        </div>

        <div class="header-contact-wrap">
            <div class="tel"><a href="tel:+74953692133">+7 495 369 21 33</a></div>
            <div class="mail"><a href="mailto:info@rvgn.ru">info@rvgn.ru</a></div>
            <div class="header-contact-wrap__btn-w">
                <a href="#" class="btn btn-solid">Заказать звонок</a>
                <a href="#" class="btn btn-alpha">Задать вопрос</a>
            </div>
        </div>
    </div>
    <div class="site-header_line2">
        <div class="menu-top">
            <ul class="menu">
                <li class="menu__item"><a href="/about">О компании</a></li>
                <li class="menu__item"><a href="/services">Услуги</a></li>
                <li class="menu__item"><a href="/info">Информация</a></li>
                <li class="menu__item"><a href="/news">Новости</a></li>
                <li class="menu__item"><a href="/reviews">Отзывы</a></li>
                <li class="menu__item"><a href="/contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
</header><!-- #site-header -->

