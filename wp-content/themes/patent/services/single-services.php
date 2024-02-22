<?php
/*
Template name: Услуга
Template post type: services
*/
get_header(); // подключаем шапку сайта
?>
<main class="main">
<!--Банер-->
    <?php get_template_part('templates/blocks/services', 'baner'); ?>
<!--Банер-->

<!--стоимость-->
    <?php get_template_part('templates/blocks/services', 'price'); ?>
<!--стоимость-->

<!--калькулятор-->
    <?php get_template_part('templates/blocks/calculator', 'page'); ?>
<!--калькулятор-->


<!--  Договор и оплата-->
    <?php get_template_part('templates/blocks/services', 'payment'); ?>
<!--  Договор и оплата-->


<!--    Важные моменты и слайдер логотипов-->
    <section class="points">
        <div class="container">
            <!--   Важные моменты---->
            <?php get_template_part('templates/blocks/services', 'moments'); ?>
            <!--   Важные моменты---->

            <!-- слайдер логотипов---->
            <?php get_template_part('templates/blocks/services', 'logo'); ?>
            <!--слайдер логотипов---->
        </div>
    </section>
 <!--   Важные моменты и слайдер логотипов---->


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

<!-- статья-->
    <?php get_template_part('templates/blocks/services', 'single_article'); ?>
<!-- статья-->

<!--вам может быть интересно-->
    <?php get_template_part('templates/blocks/services', 'interesting'); ?>
<!--вам может быть интересно-->
</main>
<?php
get_footer();
?>
