<?php
/*
 Template name: Услуга
 Template post type: services
 */
get_header(); // подключаем шапку сайта
?>
    <main class="main">
        <!-- <section class="banner">
        <div class="breadcrumbs">
            <div class="container">
                <?php
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb();
        }
        ?>
                
            </div>
        </div>
        <h1><?php the_title(); ?></h1>
    </section> -->

        <section class="banner">
            <div class="container">
                <div class="banner__content flex">
                    <div class="banner__block">
                        <h1 class="title banner-services__title">регистрация товарного знака</h1>
                        <div class="banner-services__offerse">
                            <p>Основное средство конкурентных отношений Бренд должен эффективно выделять и надежно
                                защищать компанию. Защита! – первое что важно!</p>
                            <a href="#" class="dark__btn btn banner__btn">Заказать услугу</a>
                        </div>
                        <div class="banner__list grid">
                            <div class="banner__point banner-services__point">

                                <p>
                                    клиент избавляется от хлопот </p>
                            </div>
                            <div class="banner__point banner-services__point">

                                <p>
                                    Вам не потребуется за мной бегать</p>
                            </div>
                            <div class="banner__point banner-services__point">

                                <p>
                                    Вам не надо искать и рисковать, выбирая дешевую цену – у меня сбалансировано
                                    цена/качество</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner__block banner__block-main">
                        <img src="http://patent/wp-content/uploads/2024/01/banner_man.png" alt="">
                    </div>
                    <div class="banner__block banner__block-mob">
                        <!-- man-mob.png -->
                        <img src="/wp-content/themes/patent/images/man-mob.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
?>