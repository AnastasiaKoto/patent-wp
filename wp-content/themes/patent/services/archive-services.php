<?php 
/* Template Name: Услуги
*/
get_header();
?>
<main class="main">
	<?php get_template_part('templates/blocks/titles', 'wrapper'); ?>
    <section class="service-cats">
        <div class="container">
            <?php 
            $terms = get_terms(array(
                'taxonomy' => 'services_category',
                'hide_empty' => true,
                'parent' => 0,
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            if (!empty($terms) && !is_wp_error($terms) ) {
                foreach ($terms as $term) {
            ?>
                <div class="service-cats__group">
                    <h2 class="service-cats__title">
                        <?php echo $term->name; ?>
                    </h2>
                    <div class="service-cats__list grid">
                        <?php 
                        $childrens = get_terms(array(
                            'taxonomy' => 'services_category',
                            'hide_empty' => true,
                            'parent' => $term->term_id,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        ));
                        if (!empty($childrens)) {
                            $count = 1;
                            foreach ($childrens as $children) {
                        ?>
                                <div class="service-cats__card services__card">
                                    <div class="serv__header-block flex">
                                        <div class="number">
                                            <?php echo '0' . $count; ?>
                                        </div>
                                        <div class="titles__wrapp">
                                            <h3 class="small__titles"><?php echo $children->name; ?></h3>
                                            <div class="small__price">
                                                <span><?php echo get_field('arch-price', 'services_category_' . $children->term_id); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="service-cats__card-list flex"> <!-- Поместили ul здесь -->
                                        <?php 
                                        $args = array(
                                            'post_type' => 'services',
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'services_category',
                                                    'field'    => 'id',
                                                    'terms'    => $children->term_id, // Заменили $children->id на $children->term_id
                                                ),
                                            ),
                                        );
                                        $services = new WP_Query($args);
                                        if ($services->have_posts()) {
                                            while ( $services->have_posts() ) {
                                                $services->the_post(); 
                                        ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>">
                                                    <h4 class="mini-title"><?php the_title(); ?></h4>
                                                    <div class="small__price">
                                                        <span><?php echo get_field('price', get_the_ID()); ?></span>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php
                                            }
                                            wp_reset_postdata(); // Восстановление оригинальных данных о посте
                                        }
                                        ?>
                                    </ul> <!-- Закрыли ul здесь -->
                                </div>
                        <?php
                            $count++;
                            }
                        }
                        ?>
                    </div>
                </div>
            <?php
                }
            }
            ?>
            <div class="service-cats__group service__dop">
                <h2 class="service-cats__title">
                    Дополнительно
                </h2>
                <div class="service-cats__list grid">
                    <div class="service-cats__card services__card">
                        <a href="/" class="serv__header-block flex">
                            <div class="number">
                                01
                            </div>
                            <h3 class="small__titles">патентное бюро</h3>
                        </a>
                    </div>
                    <div class="service-cats__card services__card">
                        <a href="<?php echo home_url(); ?>" class="serv__header-block flex">
                            <div class="number">
                                02
                            </div>
                            <h3 class="small__titles">патентный поверенный</h3>
                        </a>
                    </div>
                </div>
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
<?php get_footer(); ?>