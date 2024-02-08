<?php
get_header(); 
?>
<main class="main">
    <?php get_template_part('templates/blocks/titles', 'wrapper'); ?>
    <section class="article">
        <div class="container">
            <div class="article__header flex">
                <div class="article__img">
                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0]; 
                    ?>
                    <img src="<?php echo $image_url; ?>" alt="">
                </div>
                <div class="article__titles">
                    <div class="article__date">
                        <?php the_date('F j, Y'); ?>
                    </div>
                    <?php if(get_field('custom_title')) { ?>
                    <h2 class="titles">
                        <?php echo get_field('custom_title'); ?>
                    </h2>
                    <?php } ?>
                    <?php if(get_field('artic_short-descr')) { ?>
                    <div class="article__short-descr">
                        <?php echo get_field('artic_short-descr'); ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="article__body">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <section class="mobile__block">
        <div class="container">
            <div class="form__mobile-block">
                <h2 class="titles">заказать услугу патнетного поверенного</h2>
                <p>
                    Равным образом консультация с широким активом требуют от нас анализа форм развития.
                </p>
                <?php get_template_part('templates/forms/feedback'); ?>
            </div>
        </div>
        <?php get_template_part('templates/blocks/services', 'block'); ?>
    </section>
</main>
<?php
get_footer();
?>