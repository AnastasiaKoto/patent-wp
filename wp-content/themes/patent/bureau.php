<?php
/* Template Name: Патентное бюро
*/

get_header();
global $post;
?>

    <main class="main">

        <!-- Основные услуги-->
        <?php get_template_part('templates/blocks/block', 'banner_bureau'); ?>
        <!-- Основные  услуги-->

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
        <?php get_template_part('templates/blocks/block', 'benefit'); ?>
        <!-- Цель – привести дела клиента-->

        <?php
        $branches = get_field('branches');
        if($branches) {
            ?>
            <section class="branch">
                <div class="container">
                    <h2 class="titles">Какую отрасль Вы представляете?</h2>
                    <div class="benefit__list grid">
                        <?php foreach($branches as $branch) { ?>
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




        <?php $recomendations = get_field('recomend');
        if($recomendations) {
            ?>
            <section class="articles">
                <div class="container">
                    <div class="articles__block">
                        <h2 class="titles">
                            Патентный поверенный дает рекомендации, как построить инновационную компанию.
                        </h2>
                        <div class="tabs articles__tabs flex">
                            <ul class="tabs__caption">
                                <?php
                                $r_count = 1;
                                foreach($recomendations as $recomendation) {
                                    ?>
                                    <li <?php if($r_count == 1) { ?> class="active" <?php } ?>>Раздел <?php echo $r_count; ?></li>
                                    <?php $r_count++; } ?>
                            </ul>
                            <?php
                            $r2_count = 1;
                            foreach($recomendations as $recomendation) {
                                $stages = $recomendation['stages'];
                                ?>
                                <div class="tabs__content article__content <?php if($r2_count == 1) { ?> active <?php } ?>">
                                    <div class="article__subtitle">
                                        раздел <?php echo $r2_count; ?>
                                    </div>
                                    <?php if($recomendation['title']) { ?>
                                        <div class="title">
                                            <?php echo $recomendation['title']; ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($recomendation['txt']) { ?>
                                        <div class="article__txt">
                                            <?php echo $recomendation['txt']; ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($stages) {
                                        $count_inside = 1;
                                        ?>
                                        <div class="article__content-list flex">
                                            <?php foreach($stages as $stage) { ?>
                                                <div class="article__content-list_point">
                                                    <div class="art__count"><div><?php echo $count_inside; ?></div></div>
                                                    <div class="icon">
                                                        <img src="<?php echo $stage['img']; ?>" alt="">
                                                    </div>
                                                    <div class="sm__title"><?php echo $stage['stage_title']; ?></div>
                                                </div>
                                                <?php $count_inside++; } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($recomendation['txt2']) { ?>
                                        <div class="article__txt">
                                            <?php echo $recomendation['txt2']; ?>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if($recomendation['show_rec']) {
                                        $rec = $recomendation['rec_group'];
                                        ?>
                                        <!-- тут совет -->
                                        <div>
                                            <div>СОВЕТ</div>
                                            <div><?php // echo $rec['rec_txt']; ?>
                                                <p>
                                                    ЗДЕСЬ ВЫ МОЖЕТЕ ПРИГЛАСИТЬ МЕНЯ В КАЧЕСТВЕ ЭКСПЕРТА, ПОДТВЕРЖДАЮЩЕГО ВОЗМОЖНОСТЬ ПОЛУЧЕНИЯ ПАТЕНТА, ЗАЩИЩАЮЩЕГО ПРОДУКТ
                                                </p>
                                                <p>
                                                    Если вы оказались на этом этапе без предыдущего моего участия, то рекомедуется проработать ситуацию с самого начала и проверить все данные в отношении существенных приззнаков и формулы патента в целом.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- конец совета -->
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php $r2_count++; } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>


        <!--Статьи  -->
        <?php get_template_part('templates/blocks/block', 'doubarticles'); ?>
        <!-- Статьи  -->

        <!--заказать услугу патнетного поверенного -->
        <?php get_template_part('templates/blocks/form', 'order'); ?>
        <!--заказать услугу патнетного поверенного -->



    </main>
<?php get_footer(); ?>
