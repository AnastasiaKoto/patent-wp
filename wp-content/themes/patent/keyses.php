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
                                $num_keys = count($keyses_field);
                                $counter = 0;
                                ?>
                                <div class="keyses__wrapper">
                                    <?php
                                    foreach($keyses_field as $keys) {
                                        $counter++;
                                        ?>
                                        <style>
                                            .keyses-slide.flex.hidden{
                                                display: none !important;
                                            }
                                        </style>
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
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var showMoreButton = document.getElementById('showMoreKeyses');
                                        if (showMoreButton) {
                                            showMoreButton.addEventListener('click', function() {
                                                var hiddenSlides = document.querySelectorAll('.keyses-slide.hidden');
                                                var counter = 0;
                                                hiddenSlides.forEach(function(slide) {
                                                    if (counter < 4) {
                                                        slide.classList.remove('hidden');
                                                        counter++;
                                                    }
                                                });
                                                if (document.querySelectorAll('.keyses-slide.hidden').length === 0) {
                                                    showMoreButton.style.display = 'none';
                                                }
                                            });
                                        }
                                    });
                                </script>

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
</main>
<?php get_footer(); ?>
