<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


<section class="section-404">
	<div class="container">
		<div class="section-404__inner">
			<div class="section-404__header section-404-header">
				<div class="section-404-header__title"> Патентный поверенный № 1387 </div>
				<div class="section-404-header__subtitle">Юрист Анатолий Павлов </div>
			</div>

			<div class="section-404__body section-404-body">
				<div class="section-404-body__text">
					К сожалению, такой страницы не существует
				</div>

				<div class="section-404-body__image">
					<img src="/wp-content/themes/patent/images/404-img.png" alt="404">
				</div>

			</div>
			<div class="section-404-body__bottom">
				<a class="btn-404" href="/">Вернуться на главную </a>
			</div>
		</div>
	</div>

</section>



<?/*
<div id="primary" class="test content-area">
  <main id="main" class="site-main">

	  <div class="error-404 not-found">
		  <header class="page-header">
			  <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
		  </header><!-- .page-header -->

		  <div class="page-content">
			  <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
			  <?php get_search_form(); ?>
		  </div><!-- .page-content -->
	  </div><!-- .error-404 -->

  </main><!-- #main -->
</div><!-- #primary -->
*/ ?>

<?php
get_footer();
