<?php
/*
 Template name: Услуга
 Template post type: services
 */
get_header(); // подключаем шапку сайта
?>
<main class="main">
    <section class="banner">
        <div class="breadcrumbs">
            <div class="container">
                <?php 
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb();
                }
                ?>
            </div>
        </div>
        <h1><?php the_title(); ?></h1>
    </section>
</main>
<?php
get_footer();
?>