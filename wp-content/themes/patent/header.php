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
                <a href="<?php echo home_url(); ?>" class="header__logo">
                    <img src="<?php echo get_field('logo', 'option'); ?>">
                </a>
                <nav class="nav" data-nav>
                    <ul class="nav__list">
                        <?php
                        function add_additional_class_on_a($classes, $item, $args)
                        {
                            if (isset($args->add_a_class)) {
                                $classes['class'] = $args->add_a_class;
                            }
                            return $classes;
                        }
                        add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'container'      => false,
                                'items_wrap'     => '%3$s',
                                'add_a_class'     => 'header-mobile__link',

                            )
                        );
                        ?>
                        <li class="nav__item">
                            <ul class="header-mobile__social header-mobile__social-2">
                                <?php if (get_field('tg_link', 'option')) { ?>
                                    <li>   <a href="<?php echo get_field('tg_link', 'option'); ?>">
                                            <img src="/wp-content/themes/patent/images/Telegram.svg" alt="" width="44">
                                        </a>   </li>
                                <?php } ?>

                                <?php if (get_field('wa_link', 'option')) { ?>
                                    <li> <a href="<?php echo get_field('wa_link', 'option'); ?>">
                                        <img src="/wp-content/themes/patent/images/WhatsApp.svg" alt="" width="44">
                                    </a>     </li>
                                <?php } ?>

                            </ul>
                        </li>
                        <li class="nav__item nav__item-2">
                            <a class="header-mobile__link-2" href="mailto:<?php echo get_field('header_mail', 'option'); ?>">
                                <?php echo get_field('header_mail', 'option'); ?>
                            </a>
                        </li>
                        <li class="nav__item">
                            <?php
                            if (have_rows('header_tel', 'option')) {
                                while (have_rows('header_tel', 'option')) {
                                    the_row();
                                    $tel_link = get_sub_field('header-tel_link');
                                    $tel_tel  = get_sub_field('header-tel_tel');
                                    ?>
                                    <a class="header-mobile__link-2" href="tel:<?php echo $tel_link; ?>">
                                        <?php echo $tel_tel; ?>
                                    </a>
                                <?php }
                            } ?>
                        </li>
                        <li class="nav__item">
                            <a  href="#callback-popup" class="  global-trigger header-mobile__btn">Заказать звонок</a>
                        </li>
                    </ul>
                </nav>
                <button class="burger" data-burger aria-label="Открыть меню" aria-expanded="false">
                    <span class="burger__line"></span>
                </button>
            </div>

            <div class="header-mobile__bottom">
                <?php
                if (have_rows('header_tel', 'option')) {
                    while (have_rows('header_tel', 'option')) {
                        the_row();
                        $tel_link = get_sub_field('header-tel_link');
                        $tel_tel  = get_sub_field('header-tel_tel');
                        ?>
                        <a class="header-mobile__text--500" href="tel:<?php echo $tel_link; ?>">
                            <?php echo $tel_tel; ?>
                        </a>
                    <?php }
                } ?>
                <a class="header-mobile__text--500" href="mailto:<?php echo get_field('header_mail', 'option'); ?>">
                    <?php echo get_field('header_mail', 'option'); ?>
                </a>

                <ul class="header-mobile__social">
                    <?php if (get_field('tg_link', 'option')) { ?>
                        <li>   <a href="<?php echo get_field('tg_link', 'option'); ?>">
                                <img src="/wp-content/themes/patent/images/Telegram.svg" alt="" width="31">
                            </a> </li>
                    <?php } ?>

                    <?php if (get_field('wa_link', 'option')) { ?>
                        <li> <a href="<?php echo get_field('wa_link', 'option'); ?>">
                                <img src="/wp-content/themes/patent/images/WhatsApp.svg" alt="" width="31">
                            </a> </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">
