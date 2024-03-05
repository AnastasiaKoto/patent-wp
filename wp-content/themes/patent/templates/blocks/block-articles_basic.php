<section class="services ">
    <div class="container">
        <h2 class="titles">основные услуги</h2>
        <?php
        $args = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'posts_per_page' => 5,
        );
        $query = new WP_Query($args);
        if ($query ->have_posts()) {
            ?>
            <div class="services__list grid">
                <?php
                $count = 1;
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="services__card flex">
                        <div class="number">
                            <?php echo '0'. $count; ?>
                        </div>
                        <div class="services-card__content">
                            <h3 class="small__titles">
                                <?php the_title(); ?>
                            </h3>
                            <?php if(get_field('price', get_the_ID())) { ?>
                                <div class="small__price">
                                    <span><?php echo get_field('price', get_the_ID()); ?></span>
                                    <span class="services-card__icon">
								<svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5"></path>
								</svg>
							</span>
                                </div>
                            <?php } ?>
                            <?php if(get_field('price_descr', get_the_ID())) { ?>
                                <p>
                                    <?php echo get_field('price_descr', get_the_ID()); ?>
                                </p>
                            <?php } ?>
                        </div>

                    </a>
                    <?php $count++; } ?>
                <div class="services__card last__card last__card-hidden">
                    <div class="services-card__content">
                        <a href="/services/" class="btn dark__btn all__btn">Все услуги</a>
                        <div class="small__price">
                            Ознакомиться со всеми услугами
                        </div>
                    </div>
                </div>
            </div>
            <div class="services__card last__card last__card-mob">
                <div class="services-card__content">
                    <a href="/services/" class="btn dark__btn all__btn">Все услуги</a>
                    <div class="small__price">
                        Ознакомиться со всеми услугами
                    </div>
                </div>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</section>
