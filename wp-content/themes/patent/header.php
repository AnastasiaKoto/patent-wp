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
?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div id="page" class="site">
			<header class="header">
				<div class="container">
					<div class="header__content flex">
						<div class="header__block">
							<a href="<?php echo home_url(); ?>" class="header__logo">
								<img src="<?php echo get_field('logo', 'option'); ?>">
							</a>
							<?php 
							wp_nav_menu( array(
								'theme_location'=> 'header',
								'menu_id'=> 'header',
								'menu_class'        => 'flex', // класс элемента <ul>
								'container'         => 'nav', // тег контейнера или false, если контейнер не нужен
								'container_class' => 'header__nav',
								'echo'              => true, // вывести или вернуть
								'depth'             => 1, // количество уровней вложенности
							) );
							?>
						</div>
						<div class="header__block flex">
							<address class="header__address">
								<a href="mailto:<?php echo get_field('header_mail', 'option'); ?>"><?php echo get_field('header_mail', 'option'); ?></a>
								<?php 
								if( have_rows('header_tel', 'option') ) {
									while( have_rows('header_tel', 'option') ) {
										the_row();
										$tel_link = get_sub_field('header-tel_link');
										$tel_tel = get_sub_field('header-tel_tel');
								?>
								<a href="tel:<?php echo $tel_link; ?>"><?php echo $tel_tel; ?></a>
								<?php } } ?>
							</address>
							<a href="#" class="btn header__btn lite__btn">Заказать звонок</a>
							<div class="header__socials flex">
								<?php if(get_field('wa_link', 'option')) { ?>
								<a href="<?php echo get_field('wa_link', 'option'); ?>">
									<img src="/wp-content/themes/patent/images/WhatsApp.svg" alt="">
								</a>
								<?php } ?>
								<?php if(get_field('tg_link', 'option')) { ?>
								<a href="<?php echo get_field('tg_link', 'option'); ?>">
									<img src="/wp-content/themes/patent/images/Telegram.svg" alt="">
								</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div id="content" class="site-content">
