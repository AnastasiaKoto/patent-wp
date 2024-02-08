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
                <div class="calculator__inner">
                    <div class="calculator__caunt">
                        <span>1</span>
                        <span>/</span>
                        <span>6</span>
                    </div>

                </div>
            </div>
        </div>
    </section>


</main>
<?php
get_footer();
?>