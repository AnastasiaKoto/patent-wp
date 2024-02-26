<section class="doubarticles">
    <div class="container">
        <h2 class="titles">
            Статьи
        </h2>
        <div class="newsblock flex">
            <?php
            $args = array(
                'post_type' => 'articles',
                'post_status' => 'publish',
                'posts_per_page' => 2,
            );
            $articles = new WP_Query($args);
            if ($articles->have_posts()) {
                ?>
                <div class="newsblock__block">
                    <div class="subtitle">
                        Это важно иметь в виду
                    </div>
                    <div class="newsblock__list flex">
                        <?php
                        while ( $articles->have_posts() ) {
                            $articles->the_post();
                            $thumbnail_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="newsblock__card flex">
                                <div class="newsblock__img">
                                    <img src="<?php echo $image_url; ?>" alt="">
                                </div>
                                <div class="newstitle">
                                    <?php the_title(); ?>
                                </div>
                                <p>
                                    <?php echo get_field('artic_short-descr', get_the_ID()); ?>
                                </p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
            <?php
            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => 1,
            );
            $news = new WP_Query($args);
            if ($news->have_posts()) {
                ?>
                <div class="newsblock__block">
                    <div class="subtitle">
                        Вам может быть интересно
                    </div>
                    <div class="newsblock__list flex">
                        <?php
                        while ( $news->have_posts() ) {
                            $news->the_post();
                            $thumbnail_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
                            ?>
                            <a href="<?php echo get_permalink(); ?>" class="newsblock__card flex">
                                <div class="newsblock__img">
                                    <img src="<?php echo $image_url; ?>" alt="">
                                </div>
                                <div class="newstitle">
                                    <?php echo the_title(); ?>
                                </div>
                                <p>
                                    <?php echo get_field('news_short-descr', get_the_ID()); ?>
                                </p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
