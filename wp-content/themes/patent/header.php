<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?> <div id="page" class="site">
    <header class="header">
        <div class="container">
            <div class="header__content flex">
                <div class="header__block">
                    <a href="<?php echo home_url(); ?>" class="header__logo">
                        <img src="<?php echo get_field('logo', 'option'); ?>">
                    </a>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'header',
                            'menu_id'         => 'header',
                            'menu_class'      => 'flex', // класс элемента <ul>
                            'container'       => 'nav', // тег контейнера или false, если контейнер не нужен
                            'container_class' => 'header__nav',
                            'echo'            => true, // вывести или вернуть
                            'depth'           => 1, // количество уровней вложенности
                        ));
                    ?>
                </div>
                <div class="header__block flex">
                    <address class="header__address">
                        <a href="mailto:<?php echo get_field('header_mail', 'option'); ?>">
                            <?php echo get_field('header_mail', 'option'); ?>
                        </a>
                        <?php
                        if (have_rows('header_tel', 'option')) {
                            while (have_rows('header_tel', 'option')) {
                                the_row();
                                $tel_link = get_sub_field('header-tel_link');
                                $tel_tel  = get_sub_field('header-tel_tel');
                                ?>
                                <a href="tel:<?php echo $tel_link; ?>">
                                    <?php echo $tel_tel; ?>
                                </a>
                            <?php }
                        } ?>
                    </address>
                    <a href="#callback-popup" class="btn header__btn lite__btn global-trigger">Заказать звонок</a>
                    <div class="header__socials flex">
                        <?php if (get_field('wa_link', 'option')) { ?>
                            <a href="<?php echo get_field('wa_link', 'option'); ?>">
                                <img src="/wp-content/themes/patent/images/WhatsApp.svg" alt="">
                            </a>
                        <?php } ?>
                        <?php if (get_field('tg_link', 'option')) { ?>
                            <a href="<?php echo get_field('tg_link', 'option'); ?>">
                                <img src="/wp-content/themes/patent/images/Telegram.svg" alt="">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-mobile">
        <div class="container header-mobile__container">
            <div class="header-mobile__top">
                <p class="header-mobile__info">
                    <span class="header-mobile__text--400">Патентный поверенный № 1387</span>
                    <span class="header-mobile__text--600">Юрист Анатолий Павлов</span>
                </p>
                <nav class="nav" data-nav>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#" class="header-mobile__link">Главная</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="header-mobile__link">Услуги</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="header-mobile__link">О патентном бюро</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="header-mobile__link">МКТУ</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="header-mobile__link">Кейсы</a>
                        </li>
                        <li class="nav__item">
                            <ul class="header-mobile__social header-mobile__social-2">
                                <li>
                                    <a href="#">
                                        <img src="/wp-content/themes/patent/images/Telegram.svg" alt="" width="44" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/wp-content/themes/patent/images/WhatsApp.svg" alt="" width="44" />
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item nav__item-2">
                            <a href="#" class="header-mobile__link-2">info@gospatent.ru</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="header-mobile__link-2">+7 (926) 207-17-90</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="header-mobile__btn">Заказать звонок</a>
                        </li>
                    </ul>
                </nav>
                <button class="burger" data-burger aria-label="Открыть меню" aria-expanded="false">
                    <span class="burger__line"></span>
                </button>
            </div>

            <div class="header-mobile__bottom">
                <a class="header-mobile__text--500" href="#">+7 (926) 207-17-90</a>
                <a class="header-mobile__text--500" href="#">info@gospatent.ru</a>
                <ul class="header-mobile__social">
                    <li>
                        <a href="#">
                            <img src="/wp-content/themes/patent/images/Telegram.svg" alt="" width="31" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/wp-content/themes/patent/images/WhatsApp.svg" alt="" width="31" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <div id="content" class="site-content">
