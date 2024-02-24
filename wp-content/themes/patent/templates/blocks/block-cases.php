<?php
$args = array(
    'post_type' => 'keyses',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);
$keyses = new WP_Query($args);
if ($keyses->have_posts()) {
    ?>
    <section class="keyses">
        <div class="container">
            <h2 class="titles">кейсы клиентов</h2>
            <div class="tabs keyses__tabs">
                <ul class="tabs__caption">
                    <?php
                    $count_tab = 1;
                    while ( $keyses->have_posts() ) {
                        $keyses->the_post();
                        ?>
                        <li <?php if($count_tab == 1) { ?> class="active" <?php } ?>><?php the_title(); ?></li>
                        <?php $count_tab++;  } ?>
                </ul>
                <?php
                $count_keys = 1;
                while ( $keyses->have_posts() ) {
                    $keyses->the_post();
                    ?>
                    <div class="tabs__content <?php if($count_keys == 1) { ?> active <?php } ?>">
                        <?php
                        $keyses_field = get_field('servise_keyses', get_the_ID());
                        if($keyses_field) {
                            ?>
                            <div class="keyses__slider slick-slider">
                                <?php foreach($keyses_field as $keys) { ?>
                                    <div class="keyses-slide flex">
                                        <div class="keyses__left">
                                            <img src="<?php echo $keys['logo']; ?>" alt="">
                                            <div class="keys__descr">
                                                <?php echo $keys['short_descr']; ?>
                                            </div>
                                        </div>
                                        <div class="keyses__right">
                                            <div class="title">
                                                Задача
                                            </div>
                                            <div class="descr">
                                                <?php echo $keys['task']; ?>
                                            </div>
                                            <div class="title">
                                                что сделали
                                            </div>
                                            <div class="descr">
                                                <?php echo $keys['result']; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php $count_keys++; } ?>
            </div>
            <div class="slide_count">
				<span class="slick-prev-new keyses__slick">
					<
			    </span>
                <span class="currentCoach">2</span><span class="slesh">/</span><span class="allCoach">3</span>
                <span class="slick-next-new keyses__slick">
					>
				</span>
            </div>
        </div>
    </section>
<?php }
wp_reset_postdata();
?>

