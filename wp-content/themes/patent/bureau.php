<?php
/* Template Name: Патентное бюро
 */

get_header();
global $post;
?>
<main class="main">
    <?php get_template_part('templates/blocks/titles', 'wrapper'); ?>
    <!-- Основные услуги-->
    <?php get_template_part('templates/blocks/block', 'banner_bureau'); ?>
    <!-- Основные  услуги-->

    <!--статья-->
    <?php
    $bureau_wrapper = get_field('bureau-wrapper');
    if ($bureau_wrapper) {
        ?>
        <section class="article-box" style="padding-bottom: 0">
            <div class="container">
                <div class="article-box__wrapper">
                    <?php foreach ($bureau_wrapper as $item): ?>
                        <h2 class="prices-subtitle__title">
                            <?php echo $item['title'] ?>
                        </h2>
                        <div class="article-box__text ">
                            <p>
                                <?php echo $item['content'] ?>
                            </p>
                        </div>
                        <div class="article-box__readmore">
                            <span>Читать полностью </span>
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1"  />
                            </svg>

                        </div>
                        <br />
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    <?php } ?>
    <!--статья-->

    <!-- Основные услуги-->
    <?php get_template_part('templates/blocks/block', 'articles_basic'); ?>
    <!-- Основные  услуги-->

    <!--  Получите преимущество-->
    <?php get_template_part('templates/blocks/block', 'features'); ?>
    <!-- Получите преимущество-->

    <!--  кейсы клиентов-->
    <?php get_template_part('templates/blocks/block', 'cases'); ?>
    <!-- кейсы клиентов-->


    <!--  Цель – привести дела клиента-->
    <section class="benefit">
        <div class="container">

            <!--  Чем полезен Патентный поверенный именно мне? -->
            <?php get_template_part('templates/blocks/block', 'benefit_baner'); ?>
            <!-- Чем полезен Патентный поверенный именно мне?-->

        </div>
    </section>
    <!-- Цель – привести дела клиента-->

    <?php
    $branches = get_field('branches');
    if ($branches) {
        ?>
        <section class="branch">
            <div class="container">
                <h2 class="titles">Какую отрасль Вы представляете?</h2>
                <div class="benefit__list grid">
                    <?php foreach ($branches as $branch) { ?>
                        <div class="benefit__card flex">
                            <div class="benefit-card__img">
                                <img src="<?php echo $branch['img']; ?>" alt="">
                            </div>
                            <div class="benefit-card__txt">
                                <div class="title">
                                    <?php echo $branch['title']; ?>
                                </div>
                                <p class="benefit-card__descr hidden">
                                    <?php echo $branch['txt']; ?>
                                </p>
                                <div class="benefit-card__more">Читать полностью</div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- заказать услугу патнетного поверенного -->
    <?php get_template_part('templates/blocks/form', 'patent'); ?>
    <!--заказать услугу патнетного поверенного -->

    <!-- Патентный поверенный дает рекомендации -->
    <?php get_template_part('templates/blocks/block', 'articles_recomendation'); ?>
    <!-- Патентный поверенный дает рекомендации -->



    <!--Статьи  -->
    <?php get_template_part('templates/blocks/block', 'doubarticles'); ?>
    <!-- Статьи  -->

    <!--заказать услугу патнетного поверенного -->
    <?php get_template_part('templates/blocks/form', 'order'); ?>
    <!--заказать услугу патнетного поверенного -->



</main>
<?php get_footer(); ?>