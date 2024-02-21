<?php
/*
Template name: Услуга
Template post type: services
*/
get_header(); // подключаем шапку сайта

// поля
$service_field = get_field('service_offer');
$offer_field = get_field('offer_list');
$word_mark = get_field('word_mark');
$comby_mark = get_field('comby_mark');
$important_moments = get_field('important_moments');
$service_stages = get_field('service_stages');
$registration_period = get_field('registration_period');
$full_sum_example = get_field('full_sum_example');
$services_reg_boxes = get_field('services_reg_box');
$services_after_boxes = get_field('services_after_box');
$approach_wrapper = get_field('approach_wrapper');



// опции
$payment_title = get_field('payment_title', 'option');
$payment_desc_wrapper = get_field('payment_desc_wrapper', 'option');
$payment_sale = get_field('payment_sale', 'option');

$logo_title = get_field('logo_title', 'option');
$logo_desc = get_field('logo_desc', 'option');
$logo_slider = get_field('logo_slider', 'option');





    // объекты
$services_reg_box_field = get_field_object('services_reg_box');
$services_after_box_field = get_field_object('services_after_box');
$approach_wrapper_field = get_field_object('approach_wrapper');



?>
<main class="main">


    <!--Банер-->


<section class="banner">
    <div class="container">
        <div class="breadcrumbs">
            <?php
            if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb();
            }
            ?>
        </div>
        <div class="banner__content flex">
            <div class="banner__block">
                <h1 class="title banner-services__title"><?php the_title(); ?></h1>
                <?php if (!empty($service_field)): ?>
                <div class="banner-services__offerse">
                    <p><?php echo $service_field ?></p>
                    <a href="#" class="dark__btn btn banner__btn">Заказать услугу</a>
                </div>
                <?php endif; ?>

                <?php if (!empty($offer_field)): ?>
                <div class="banner__list grid">
                    <?php
                    foreach($offer_field as $item) {
                    ?>
                        <div class="banner__point banner-services__point">
                            <p><?php echo $item ?> </p>
                        </div>
                        <?php
                    }?>
                </div>
                       <?php endif; ?>
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

    <!--Банер-->

<!--стоимость-->
    <?php if ( !empty($service_stages)): ?>
    <section class="prices">
    <div class="container">
        <h2 class="titles">стоимость</h2>
        <ul class="prices__list">
            <?php
            if (!empty($service_stages)) {
                $stage_number = 1;
                foreach ($service_stages as $stage) {
                    ?>
                    <li class="prices__item">
                        <div class="prices-card">
                            <span class="prices-card__stage-text   <?php echo $stage['selected_title'] ? 'prices-card__stage-text--color' : ''; ?>"><?php echo $stage_number++; ?> этап</span>

                            <ul class="prices-card__list">
                                    <?php
                                    foreach ($stage['stages_list'] as $substage) {
                                        ?>
                                <li class="prices-card__item">
                                    <div class="prices-card__text <?php echo $substage['selection'] ? 'yellow' : ''; ?>"><?php echo $substage['title']; ?></div>

                                            <?php if ($substage['substage_check']) { ?>
                                                <span class="prices-card__text-radius"> <?php echo $substage['substage_price']; ?></span>
                                            <?php } ?>
                                </li>
                                        <?php
                                    }
                                    ?>
                            </ul>
                            <ul class="prices-card__list-info">
                                <li>
                                    <span class="prices-card__text-bold"><?php echo $stage['stage_second']['price_or_descr']; ?></span>
                                    <?php if ($stage['stage_second']['show_deadline']) { ?>

                                        <span class="prices-card__text-average">(<?php echo $stage['stage_second']['deadline']; ?>)</span>

                                    <?php } ?>

                                    <?php echo $stage['stage_second']['descr_under_price']; ?>
                                </li>
                            </ul>
                            <ul class="prices-card__list-last">
                                <li>
                                    <span class="prices-card__text-bold">Результат</span>
                                    <p>Решение в вашу пользу</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>


        <div class="slide_count prices__slide_count">
            <span class="slick-prev-new keyses__slick">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 1L2 6L7 11" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
            </span>
            <span class="currentCoach">1</span><span class="slesh">/</span><span class="allCoach">6</span>
            <span class="slick-next-new keyses__slick">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 11L6 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
            </span>
        </div>

        <?php if (!empty($registration_period)): ?>
        <div class="prices__term">
            <span>!</span>
            <p><?php echo $registration_period ?></p>
        </div>
        <?php endif; ?>

        <?php if (!empty($full_sum_example)): ?>

        <ul class="prices__list-tasks">
            <li class="prices__item-task prices__item-task--color">
                <h3 class="prices__text-title">Здесь указываем полную стоимость как пример</h3>
                <p class="prices__text-400"><?php echo $full_sum_example ?></p>
                <div class="prices__text-svg">
                    <svg width="43" height="8" viewBox="0 0 43 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.3536 4.35355C42.5488 4.15829 42.5488 3.84171 42.3536 3.64645L39.1716 0.464466C38.9763 0.269204 38.6597 0.269204 38.4645 0.464466C38.2692 0.659728 38.2692 0.976311 38.4645 1.17157L41.2929 4L38.4645 6.82843C38.2692 7.02369 38.2692 7.34027 38.4645 7.53553C38.6597 7.7308 38.9763 7.7308 39.1716 7.53553L42.3536 4.35355ZM0.345703 4.5H42V3.5H0.345703V4.5Z" fill="black" />
                    </svg>
                </div>
            </li>


            <?php if (!empty($word_mark)): ?>
            <li class="prices__item-task">
                <h3 class="prices__text-title">Для словесного знака
                </h3>

                    <p class="prices__text-900"><?php echo $word_mark['text']; ?></p>
                    <p class="prices__text-inner">
                    <span class="prices__text-600">
                       <?php echo $word_mark['price']; ?> ₽
                    </span>
                        <span class="prices__text-400-grey"><?php echo $word_mark['all_serv']; ?></span>
                    </p>
            </li>
            <?php endif; ?>
            <?php if (!empty($comby_mark)): ?>
            <li class="prices__item-task">
                <h3 class="prices__text-title">Для комбинированного знака
                </h3>

                    <img class="prices__item-task-img" src="<?php echo $comby_mark['img']; ?>" alt="">

                    <p class="prices__text-inner">
                    <span class="prices__text-600">
                   <?php echo $comby_mark['price']; ?> ₽
                    </span>
                        <span class="prices__text-400-grey"><?php echo $comby_mark['all_serv']; ?></span>
                    </p>

            </li>
       <?php endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</section>
    <?php endif; ?>
    <!--стоимость-->


    <?php get_template_part('templates/blocks/calculator', 'page'); ?>

  <!--  Договор и оплата-->
    <?php if (!empty($payment_title)): ?>
<section class="discounts">
    <div class="container">
        <div class="discounts__wrapper">
            <div class="discounts__inner discounts__inner--sb">
                <img class="discounts__img" src="/wp-content/themes/patent/images/payment-icon.svg" alt="">
                <h3 class="discounts__title"><?php echo $payment_title ?> </h3>

                <?php if (!empty($payment_desc_wrapper)) { ?>
                        <?php foreach ($payment_desc_wrapper as $items) { ?>
                        <p class="discounts__text"><span><?php echo $items['title']; ?></span> <?php echo $items['desc']; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
            <div class="discounts__inner discounts__inner-bg">
                <div class="">
                    <h2 class="discounts__inner-title"> <?php echo $payment_sale ?></h2>
                    <a href="">Получить скидку</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php endif; ?>
    <!--  Договор и оплата-->


<!--    Важные моменты слайдер логотипов-->
    <section class="points">
        <div class="container">
            <?php if (!empty($important_moments)): ?>
                <h2 class="titles">Важные моменты</h2>
                <div class="points__wrapper">
                    <ul class="points__list">
                        <?php foreach ($important_moments as $moment): ?>
                            <li class="points__item">
                                <p class="points__inner">
                                    <span class="points__item--500"><?php echo $moment['question']; ?></span>
                                    <span class="points__item--svg">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.28418L6 6.28418L11 1.28418" stroke="white" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                                </p>
                                <?php if ($moment['answer']['block_type'] === 'list'): ?>
                                    <div class="points__hidden">
                                        <ul>
                                            <?php foreach ($moment['answer']['type_list'] as $item): ?>
                                                <li><?php echo $item['list_txt']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php elseif ($moment['answer']['block_type'] === 'text'): ?>
                                    <div class="points__hidden"><?php echo $moment['answer']['type_text']; ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="points-slider">
                <div class="points-slider__inner">
                    <h3 class="points-slider__title">Меня ценят за вдумчивость
                        и внимание к деталям, щепетильность</h3>
                    <p class="points-slider__text">Не беспокойтесь в 1-3 консультации Мы разберемся даже с очень сложным вопросом. Компания получит надежную регистрацию бренда.</p>
                </div>
                <div class="points-slider__slides">
                    <div class="points-slider__list">
                        <div class="points-slider__item">
                            <img src="/wp-content/themes/patent/images/sony.svg" alt="">
                        </div>
                        <div class="points-slider__item">
                            <img src="/wp-content/themes/patent/images/micro.svg" alt="">
                        </div>
                        <div class="points-slider__item">
                            <img src="/wp-content/themes/patent/images/british.svg" alt="">
                        </div>
                        <div class="points-slider__item">
                            <img src="/wp-content/themes/patent/images/asus.svg" alt="">
                        </div>
                        <div class="points-slider__item">
                            <img src="/wp-content/themes/patent/images/office.svg" alt="">
                        </div>
                    </div>
                    <div class="points-arrows">
                        <span class="points-arrows__item points-slider__arrows__end"> < </span>
                        <span class="points-arrows__item points-slider__arrows__next"> > </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Важные моменты слайдер логотипов---->


<!-- рекомендации-->
    <section class="targets">
        <div class="container">
            <h2 class="titles">рекомендации</h2>
            <div class="targets__wrapper">
                <ul class="targets__list">
                    <li class="targets__item">
                        <div class="targets__inner">
                            <div class="targets__img">
                                <div class="targets__logo">
                                    <span>logo</span>
                                </div>
                                <img src="/wp-content/themes/patent/images/man-2.png" width="119" alt="">
                                <div class="targets__after">
                                    <span>Иванов Иван Иванович</span>
                                    <span>Генеральный директор компании</span>
                                </div>
                            </div>
                           <p>
                               <span>Цель  – привести дела клиента
                               в полный порядок и поддерживать
                               его на всех этапах</span>
                               <a href="#">Читать отзыв полностью <span>(PDF, 64КБ)</span></a>
                           </p>
                        </div>
                    </li>

                    <li class="targets__item">
                        <div class="targets__inner">
                            <div class="targets__img">
                                <div class="targets__logo">
                                    <span>logo</span>
                                </div>
                                <img src="/wp-content/themes/patent/images/man-2.png" width="119" alt="">
                                <div class="targets__after">
                                    <span>Иванов Иван Иванович</span>
                                    <span>Генеральный директор компании</span>
                                </div>
                            </div>
                            <p>
                               <span>Цель  – привести дела клиента
                               в полный порядок и поддерживать
                               его на всех этапах</span>
                                <a href="#">Читать отзыв полностью <span>(PDF, 64КБ)</span></a>
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="slide_count slide_count-new">
				<span class="slick-prev-new-2 keyses__slick">
					&lt;
			    </span>
                    <span class="currentCoach">1</span><span class="slesh">/</span><span class="allCoach">2</span>
                    <span class="slick-next-new-2 keyses__slick">
					&gt;
				</span>
                </div>
            </div>
        </div>
    </section>
 <!-- рекомендации-->


    <!--   Ответственный подход к вашей задаче-->
    <?php if (!empty($approach_wrapper)):?>
        <section class="approach">
            <div class="container">
                <h2 class="titles">  <?php echo $approach_wrapper_field['label'] ?></h2>
                <ul class="approach__list">

                    <?php foreach ($approach_wrapper as $item) { ?>
                    <li class="approach__item">
                        <div class="approach__img">   <img src="<?php echo $item['img']['url']; ?>" alt="<?php echo $item['title']; ?>"></div>
                        <h3 class="approach__title"><?php echo $item['title']; ?></h3>
                        <div class="approach__text">
                         <?php echo $item['desc']; ?>
                            <?php if (!empty($item['href_box'])) { ?>
                                <div class="href-box">
                                    <?php foreach ($item['href_box'] as $href) { ?>
                                        <?php echo $href['href']; ?>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>
    <!--   Ответственный подход к вашей задаче-->


  <!--  Что может понадобиться еще в процессе регистрации
    ОТДЕЛЬНЫЕ УСЛУГИ-->
    <?php if ( !empty($services_reg_boxes) || !empty($services_after_boxes)): ?>
    <section class="what">
        <div class="container">
            <?php if ($services_reg_boxes): ?>
            <h2 class="titles"> <?php echo   $services_reg_box_field['label'] ?></h2>
                <ul class="what__list">
                    <?php foreach ($services_reg_boxes as $services_reg_box): ?>
                        <?php
                        $linked_post = $services_reg_box['services_reg']; // Получаем связанную запись
                        if ($linked_post): ?>
                            <li class="what__item">
                                <a href="<?php echo get_permalink($linked_post->ID); ?>">
                                    <h3 class="what__title"><?php echo get_the_title($linked_post->ID); ?></h3>
                               <!--     <div class="what__text--min">(адрес, лого, )</div>-->
                                    <div class="what__text"><?php echo get_field('price', $linked_post->ID); ?></div>
                                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if ($services_after_boxes): ?>
            <div class="what__container">
                    <div class="what__wrapper--title">
                        <h2 class="titles">ОТДЕЛЬНЫЕ УСЛУГИ</h2>
                        <span><?php echo   $services_after_box_field['label'] ?></span>
                    </div>

                    <ul class="what__list">
                        <?php foreach ($services_after_boxes as $services_after_box): ?>
                            <?php
                            $linked_post = $services_after_box['services_after']; // Получаем связанную запись
                            if ($linked_post): ?>
                                <li class="what__item">
                                    <a href="<?php echo get_permalink($linked_post->ID); ?>">
                                        <h3 class="what__title"><?php echo get_the_title($linked_post->ID); ?></h3>
                                        <!--     <div class="what__text--min">(адрес, лого, )</div>-->
                                        <div class="what__text"><?php echo get_field('price', $linked_post->ID); ?></div>
                                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
            </div>
        <?php endif; ?>


        </div>
    </section>
    <?php endif; ?>
    <!--  Что может понадобиться еще в процессе регистрации
       ОТДЕЛЬНЫЕ УСЛУГИ-->
   <!-- статья-->
    <section class="article-box">
        <div class="container">
            <div class="article-box__wrapper">
                <h2 class="article-box__title">Заголовок статьи</h2>
                <div class="article-box__text">
                    Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий.
                </div>
            </div>
        </div>
    </section>
    <!-- статья-->

<!--вам может быть интересно-->
    <section class="interesting">
        <div class="container">
            <h2 class="titles">вам может быть интересно</h2>
            <ul class="interesting__list">
                <li class="interesting__item">
                    <div class="interesting__img">
                        <img src="/wp-content/themes/patent/images/man.png" alt="">
                    </div>
                    <h3 class="interesting__title">качество поиска товарных знаков исключает риски отказа регистрации</h3>
                    <div class="interesting__text">Равным образом консультация с широким активом требуют от нас анализа форм...</div>
                </li>

                <li class="interesting__item">
                    <div class="interesting__img">
                        <img src="/wp-content/themes/patent/images/man.png" alt="">
                    </div>
                    <h3 class="interesting__title">качество поиска товарных знаков исключает риски отказа регистрации</h3>
                    <div class="interesting__text">Равным образом консультация с широким активом требуют от нас анализа форм...</div>
                </li>

                <li class="interesting__item">
                    <div class="interesting__img">
                        <img src="/wp-content/themes/patent/images/man.png" alt="">
                    </div>
                    <h3 class="interesting__title">качество поиска товарных знаков исключает риски отказа регистрации</h3>
                    <div class="interesting__text">Равным образом консультация с широким активом требуют от нас анализа форм...</div>
                </li>
            </ul>
        </div>
    </section>
<!--вам может быть интересно-->
</main>
<?php
get_footer();
?>
