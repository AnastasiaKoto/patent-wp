<?php
/* Template Name: Кейсы
*/
get_header();
?>
<main class="main">
    <?php get_template_part('templates/blocks/titles', 'wrapper'); ?>
    <?php
    $args = array(
        'post_type' => 'keyses',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );
    $keyses = new WP_Query($args);
    if ($keyses->have_posts()) {
        ?>
        <section class="keyses-section keyses-section__pt39">
            <div class="container">
                <div class="tabs keyses__tabs">
                    <ul class="tabs__caption ">
                        <?php
                        $count_tab = 1;
                        while ( $keyses->have_posts() ) {
                            $keyses->the_post();
                            ?>
                            <li data-target="<?=$count_tab ?>"  <?php if($count_tab == 1) { ?> class="active" <?php } ?>><?php the_title(); ?></li>
                            <?php $count_tab++;  } ?>
                    </ul>
                    <?php
                    $count_keys = 1;
                    while ( $keyses->have_posts() ) {
                        $keyses->the_post();
                        ?>
                        <div id="tab__content_<?=$count_keys?>" class="tabs__content <?php if($count_keys == 1) { ?> active <?php } ?>">
                            <?php
                            $keyses_field = get_field('servise_keyses', get_the_ID());
                            if($keyses_field) {
                                $num_keys = count($keyses_field);
                                $counter = 0;
                                ?>
                                <div class="keyses__wrapper">
                                    <?php
                                    foreach($keyses_field as $keys) {
                                        $counter++;
                                        ?>
                                        <div class="keyses-slide keyses-slide__shadow flex <?php if ($counter > 4) echo 'hidden'; ?>">
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
                                        <?php
                                    }
                                    ?>
                                </div>
                            <?php if ($num_keys > 4) : ?>
                                <a class="btn dark__btn keyses-section__btn" id="showMoreKeyses">Показать еще</a>

                            <?php endif; ?>

                            <?php } ?>
                        </div>
                        <?php $count_keys++; } ?>
                </div>
            </div>
        </section>
    <?php } else {
        wp_reset_postdata();
        ?>
        <div class="no-found">Извините, ничего не найдено</div>
    <?php } ?>


    <div class="orfer-form__wrapper-gray">
    <!--заказать услугу патнетного поверенного -->
    <?php get_template_part('templates/blocks/form', 'order'); ?>
    <!--заказать услугу патнетного поверенного -->
    </div>

</main>
<?php get_footer(); ?>
