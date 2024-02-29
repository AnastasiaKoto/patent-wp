<section class="titles__block <?=is_page(381)?'titles__block_dark titles__block_office':'' ?>" >
    <div class="container">
        <div class="breadcrumbs ">
            <?php 
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb();
            }
            ?>
        </div>
        <h1 class="titles page__title"><?php the_title(); ?></h1>
    </div>
</section>