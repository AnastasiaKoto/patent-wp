<?php
/*
Template name: Услуга
Template post type: services
*/
get_header(); // подключаем шапку сайта
?>
<main class="main">
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

<section class="prices">
    <div class="container">
        <h2 class="titles">стоимость</h2>
        <ul class="prices__list">
            <li class="prices__item">
                <div class="prices-card">
                    <span class="prices-card__stage-text">1 этап</span>
                    <ul class="prices-card__list">
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительный анализ</span>
                            <span class="prices-card__text-average">обозначения</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение перспектив</span>
                            <span class="prices-card__text-average">регистрации</span>
                            <span class="prices-card__text-radius">2.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение деятельности</span>
                            <span class="prices-card__text-average">по классам МКТУ</span>
                            <span class="prices-card__text-radius">1.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительная проверка</span>
                            <span class="prices-card__text-average">слова на тождество</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                    </ul>
                    <ul class="prices-card__list-info">
                        <li>
                            <span class="prices-card__text-bold">2.000 ₽</span>
                            <span class="prices-card__text-average">(1 рабочий день)</span>
                            <p>Без отчета, но с аналитикой. Поиск решения при выявлении проблем</p>
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
            <li class="prices__item">
                <div class="prices-card">
                    <span class="prices-card__stage-text prices-card__stage-text--color">2 этап</span>
                    <ul class="prices-card__list">
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительный анализ</span>
                            <span class="prices-card__text-average">обозначения</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение перспектив</span>
                            <span class="prices-card__text-average">регистрации</span>
                            <span class="prices-card__text-radius">2.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение деятельности</span>
                            <span class="prices-card__text-average">по классам МКТУ</span>
                            <span class="prices-card__text-radius">1.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительная проверка</span>
                            <span class="prices-card__text-average">слова на тождество</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                    </ul>
                    <ul class="prices-card__list-info">
                        <li>
                            <span class="prices-card__text-bold">2.000 ₽</span>
                            <span class="prices-card__text-average">(1 рабочий день)</span>
                            <p>Без отчета, но с аналитикой. Поиск решения при выявлении проблем</p>
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
            <li class="prices__item">
                <div class="prices-card">
                    <span class="prices-card__stage-text">3 этап</span>
                    <ul class="prices-card__list">
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительный анализ</span>
                            <span class="prices-card__text-average">обозначения</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение перспектив</span>
                            <span class="prices-card__text-average">регистрации</span>
                            <span class="prices-card__text-radius">2.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение деятельности</span>
                            <span class="prices-card__text-average">по классам МКТУ</span>
                            <span class="prices-card__text-radius">1.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold ">Предварительная проверка</span>
                            <span class="prices-card__text-average">слова на тождество</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                    </ul>
                    <ul class="prices-card__list-info">
                        <li>
                            <span class="prices-card__text-bold">2.000 ₽</span>
                            <span class="prices-card__text-average">(1 рабочий день)</span>
                            <p>Без отчета, но с аналитикой. Поиск решения при выявлении проблем</p>
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

            <li class="prices__item">
                <div class="prices-card">
                    <span class="prices-card__stage-text">1 этап</span>
                    <ul class="prices-card__list">
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительный анализ</span>
                            <span class="prices-card__text-average">обозначения</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение перспектив</span>
                            <span class="prices-card__text-average">регистрации</span>
                            <span class="prices-card__text-radius">2.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение деятельности</span>
                            <span class="prices-card__text-average">по классам МКТУ</span>
                            <span class="prices-card__text-radius">1.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительная проверка</span>
                            <span class="prices-card__text-average">слова на тождество</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                    </ul>
                    <ul class="prices-card__list-info">
                        <li>
                            <span class="prices-card__text-bold">2.000 ₽</span>
                            <span class="prices-card__text-average">(1 рабочий день)</span>
                            <p>Без отчета, но с аналитикой. Поиск решения при выявлении проблем</p>
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
            <li class="prices__item">
                <div class="prices-card">
                    <span class="prices-card__stage-text prices-card__stage-text--color">2 этап</span>
                    <ul class="prices-card__list">
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительный анализ</span>
                            <span class="prices-card__text-average">обозначения</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение перспектив</span>
                            <span class="prices-card__text-average">регистрации</span>
                            <span class="prices-card__text-radius">2.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение деятельности</span>
                            <span class="prices-card__text-average">по классам МКТУ</span>
                            <span class="prices-card__text-radius">1.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительная проверка</span>
                            <span class="prices-card__text-average">слова на тождество</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                    </ul>
                    <ul class="prices-card__list-info">
                        <li>
                            <span class="prices-card__text-bold">2.000 ₽</span>
                            <span class="prices-card__text-average">(1 рабочий день)</span>
                            <p>Без отчета, но с аналитикой. Поиск решения при выявлении проблем</p>
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
            <li class="prices__item">
                <div class="prices-card">
                    <span class="prices-card__stage-text">3 этап</span>
                    <ul class="prices-card__list">
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительный анализ</span>
                            <span class="prices-card__text-average">обозначения</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение перспектив</span>
                            <span class="prices-card__text-average">регистрации</span>
                            <span class="prices-card__text-radius">2.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Определение деятельности</span>
                            <span class="prices-card__text-average">по классам МКТУ</span>
                            <span class="prices-card__text-radius">1.000 ₽</span>
                        </li>
                        <li class="prices-card__item">
                            <span class="prices-card__text-bold">Предварительная проверка</span>
                            <span class="prices-card__text-average">слова на тождество</span>
                            <span class="prices-card__text-radius">Бесплатно</span>
                        </li>
                    </ul>
                    <ul class="prices-card__list-info">
                        <li>
                            <span class="prices-card__text-bold">2.000 ₽</span>
                            <span class="prices-card__text-average">(1 рабочий день)</span>
                            <p>Без отчета, но с аналитикой. Поиск решения при выявлении проблем</p>
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

        </ul>

        <div class="prices__term">
            <span>!</span>
            <p> Стандартный срок регистрации товарного знака составляем от 6 до 8 месяцев</p>
        </div>

        <ul class="prices__list-tasks">
            <li class="prices__item-task prices__item-task--color">
                <h3 class="prices__text-title">Здесь указываем полную стоимость как пример</h3>
                <p class="prices__text-400">для салонов красоты в одном классе</p>
                <div class="prices__text-svg">
                    <svg width="43" height="8" viewBox="0 0 43 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.3536 4.35355C42.5488 4.15829 42.5488 3.84171 42.3536 3.64645L39.1716 0.464466C38.9763 0.269204 38.6597 0.269204 38.4645 0.464466C38.2692 0.659728 38.2692 0.976311 38.4645 1.17157L41.2929 4L38.4645 6.82843C38.2692 7.02369 38.2692 7.34027 38.4645 7.53553C38.6597 7.7308 38.9763 7.7308 39.1716 7.53553L42.3536 4.35355ZM0.345703 4.5H42V3.5H0.345703V4.5Z" fill="black" />
                    </svg>
                </div>
            </li>
            <li class="prices__item-task">
                <h3 class="prices__text-title">Для словесного знака
                </h3>
                <p class="prices__text-900">КЛЕОПАТРА</p>
                <p class="prices__text-inner">
                    <span class="prices__text-600">
                        60 000 ₽
                    </span>
                    <span class="prices__text-400-grey">Все услуги - поиск/заявка/все пошлины</span>
                </p>
            </li>
            <li class="prices__item-task">
                <h3 class="prices__text-title">Для комбинированного знака
                </h3>
                <img class="prices__item-task-img" src="/wp-content/themes/patent/images/cleopatra.png" alt="cleopatra" width="49" height="60">
                <p class="prices__text-900">КЛЕОПАТРА</p>
                <p class="prices__text-inner">
                    <span class="prices__text-600">
                        50 000 ₽
                    </span>
                    <span class="prices__text-400-grey">Все услуги - поиск/заявка/все пошлины</span>
                </p>
            </li>
        </ul>
    </div>
</section>

<section class="calculator-page">
    <div class="container">
        <h2 class="banner-services__title">С помощью калькулятора вы можете узнать классы МКТУ, их количество, рассчитать полную стоимость для вашего случая</h2>

        <div class="calculator">
            <div class="calculator__caunt">
                <span>1</span>
                <span>/</span>
                <span>6</span>
            </div>

            <div class="calculator__wrapper">
               <div class="calculator__inner">
                   <div class="calculator__type">
                       <h2 class="calculator__title">тип товарного знака</h2>
                       <label class="">
                           <input type="radio" name="wordmark_option">
                           Словесный
                       </label>
                       <label class="">
                           <input type="radio" name="wordmark_option">
                           Изобразительный
                       </label>
                       <label class="">
                           <input type="radio" name="wordmark_option">
                           Комбинированный
                       </label>
                   </div>

                   <div class="calculator__type">
                       <h2 class="calculator__title">название товарного знака*</h2>
                       <label class="">
                           <input type="text" placeholder="Введите название">

                       </label>
                       <label class="calculator__file-input-label">
                           <input type="file" class="calculator__file-input">
                       </label>

                       <span class="calculator__optional">*Поле не является обязательным для заполнения</span>
                   </div>
               </div>
                <div class="calculator__inner">
                    <div class="calculator__logos">
                        <p>Примеры словесного товарного знака:</p>
                        <ul>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/1/coca-cola.svg" alt="">
                            </li>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/1/Google.svg" alt="">
                            </li>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/1/Sony.svg" alt="">
                            </li>
                        </ul>
                    </div>

                    <div class="calculator__logos" style="display: none;">
                        <p>Примеры словесного товарного знака:</p>
                        <ul>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/2/apple.svg" alt="">
                            </li>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/2/mac.svg" alt="">
                            </li>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/2/star.svg" alt="">
                            </li>
                        </ul>
                    </div>

                    <div class="calculator__logos" style="display: none;">
                        <p>Примеры словесного товарного знака:</p>
                        <ul>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/3/adidas.svg" alt="">
                            </li>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/3/king.svg" alt="">
                            </li>
                            <li>
                                <img src="/wp-content/themes/patent/images/logos/3/peugeot.svg" alt="">
                            </li>
                        </ul>
                    </div>

                </div>

            </div>






            <a class="calculator__next" href="#">далее
                <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5303 6.53033C10.8232 6.23744 10.8232 5.76256 10.5303 5.46967L5.75736 0.696699C5.46447 0.403806 4.98959 0.403806 4.6967 0.696699C4.40381 0.989593 4.40381 1.46447 4.6967 1.75736L8.93934 6L4.6967 10.2426C4.40381 10.5355 4.40381 11.0104 4.6967 11.3033C4.98959 11.5962 5.46447 11.5962 5.75736 11.3033L10.5303 6.53033ZM0 6.75H10V5.25H0V6.75Z" fill="white" />
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="discounts">
    <div class="container">
        <div class="discounts__wrapper">
            <div class="discounts__inner discounts__inner--sb">
                <img class="discounts__img" src="/wp-content/themes/patent/images/payment-icon.svg" alt="">
                <h3 class="discounts__title">Договор и оплата</h3>
                <p class="discounts__text"><span>Договор предусматривает</span> контроль и уведомление клиента о ситуации на каждом этапе регистрации</p>
                <p class="discounts__text"><span>При последовательной оплате</span> мы пройдем все этапы и зарегистрируем товарный знак.</p>
            </div>
            <div class="discounts__inner discounts__inner-bg">
                <div class="">
                    <h2 class="discounts__inner-title">для наших клиентов скидка на пошлину 30%</h2>
                    <a href="">Получить скидку</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="points">
    <div class="container">
        <h2 class="titles">Важные моменты</h2>

        <div class="points__wrapper">
            <ul class="points__list">

                <li class="points__item">
                    <p class="points__inner">
                        <span class="points__item--500">Из чего складывается стоимость?</span>
                        <span class="points__item--svg">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.28418L6 6.28418L11 1.28418" stroke="white" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                    </p>
                    <div class="points__hidden">
                        Товарный знак уже зарегистрирован другой компанией
                    </div>
                </li>

                <li class="points__item">
                    <p class="points__inner">
                        <span class="points__item--500">Зачем регистрировать?</span>
                        <span class="points__item--svg">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.28418L6 6.28418L11 1.28418" stroke="white" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                    </p>
                    <div class="points__hidden">
                        Товарный знак уже зарегистрирован другой компанией
                    </div>
                </li>

                <li class="points__item">
                    <p class="points__inner">
                        <span class="points__item--500">Какие знаки бывают?</span>
                        <span class="points__item--svg">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.28418L6 6.28418L11 1.28418" stroke="white" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                    </p>
                    <div class="points__hidden">
                        Товарный знак уже зарегистрирован другой компанией
                    </div>
                </li>

                <li class="points__item">
                    <p class="points__inner">
                        <span class="points__item--500">Какие основные причины отказа для регистрации товарного знака?</span>
                        <span class="points__item--svg active">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 1.28418L6 6.28418L11 1.28418" stroke="white" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                    </p>

                    <div class="points__hidden active">
                        Товарный знак уже зарегистрирован другой компанией
                    </div>
                </li>

            </ul>
        </div>


    </div>
</section>

</main>
<?php
get_footer();
?>