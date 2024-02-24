<?php
/*
Template name: Услуга-2
Template post type: services
*/
get_header(); // подключаем шапку сайта
?>
    <main class="main main__services2">

        <!--Банер-->
        <?php get_template_part('templates/blocks/services', 'baner'); ?>
        <!--Банер-->
        <!-- статья-->
        <?php get_template_part('templates/blocks/services', 'single_article'); ?>
        <!-- статья-->


        <!--стоимость-->
        <?php get_template_part('templates/blocks/services', 'price'); ?>
        <!--стоимость-->


        <section class="points  prices-pt0">
            <div class="container">
                <!--   Важные моменты---->
                <?php get_template_part('templates/blocks/services', 'moments'); ?>
                <!--   Важные моменты---->
            </div>
        </section>

        <!--стоимость-->
        <?php get_template_part('templates/blocks/services', 'price2'); ?>
        <!--стоимость-->

        <section class="points prices-pt0">
            <div class="container">
                <!--   Важные моменты2---->
                <?php get_template_part('templates/blocks/services', 'moments2'); ?>
                <!--   Важные моменты2---->
            </div>
        </section>

        <!--  Договор и оплата-->
        <?php get_template_part('templates/blocks/services', 'payment'); ?>
        <!--  Договор и оплата-->


        <section class="points prices-pt0">
            <div class="container">

                <!--   Важные моменты3---->
                <?php get_template_part('templates/blocks/services', 'moments3'); ?>
                <!--   Важные моменты---->

                <!-- слайдер логотипов3---->
                <?php get_template_part('templates/blocks/services', 'logo'); ?>
                <!--слайдер логотипов---->
            </div>
        </section>

        <!--  кейсы клиентов-->
        <?php get_template_part('templates/blocks/block', 'cases'); ?>
        <!-- кейсы клиентов-->




        <!-- рекомендации-->
        <?php get_template_part('templates/blocks/services', 'recommendations'); ?>
        <!-- рекомендации-->

        <!--   Ответственный подход к вашей задаче-->
        <?php get_template_part('templates/blocks/services', 'approach'); ?>
        <!--   Ответственный подход к вашей задаче-->



        <!--  Что может понадобиться еще в процессе регистрации
            ОТДЕЛЬНЫЕ УСЛУГИ-->
        <?php get_template_part('templates/blocks/services', 'select_article'); ?>
        <!--  Что может понадобиться еще в процессе регистрации
              ОТДЕЛЬНЫЕ УСЛУГИ-->
        <!-- статья2-->
        <?php get_template_part('templates/blocks/services', 'single_article2'); ?>
        <!-- статья2-->

        <!--вам может быть интересно-->
        <?php get_template_part('templates/blocks/services', 'interesting'); ?>
        <!--вам может быть интересно-->
        <!--заказать услугу патнетного поверенного -->
        <?php get_template_part('templates/blocks/form', 'order'); ?>
        <!--заказать услугу патнетного поверенного -->
    </main>
<?php
get_footer();
?>
