<section class="titles__block">
    <div class="container">
        <div class="breadcrumbs">
            <?php 
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb();
            }
            ?>
        </div>
        <h1 class="titles page__title"><?php the_title(); ?></h1>
    </div>
</section>