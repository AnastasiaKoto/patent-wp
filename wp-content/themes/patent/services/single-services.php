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
                        защищать компанию. <span>Защита! – первое что важно!</span></p>
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

            <div style="display: none" class="calculator__wrapper">
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


            <div style="display: none" class="calculator__wrapper">
                <div class="calculator__inner calculator__inner-2">
                    <div class="calculator__type">
                        <h2 class="calculator__title">Требуется ли предварительная проверка вашего товарного знака?</h2>
                        <div class="calculator__text">
                            Если вы не уверены в возможности регистрации вашего товарного знака,
                            его необходимо проверить. Мы проведем поиск сходных знаков, как уже зарегистрированных, так и заявок, поданных на регистрацию, а так же проверим
                            ваш знак на соответствие требованиям законодательства. Это значительно (до 95%) увеличивает вероятность того, что ваш знак будет зарегистрирован.
                        </div>
                        <label class="">
                            <input type="radio" name="wordmark2_option">
                            Да, требуется полная проверка моего товарного знака (3-4 дня).
                        </label>
                        <label class="">
                            <input type="radio" name="wordmark2_option">
                            Нет, не требуется. Мне известна возможность регистрации моего товарного знака.
                        </label>
                    </div>
                    
                </div>


            </div>

            <div class="calculator__wrapper">
                <div class="calculator__inner calculator__inner-2">
                    <div class="calculator__type">
                        <h2 class="calculator__title">классы МКТУ</h2>
                        <div class="calculator__text calculator__text--w100">
                            Каждый товарный знак регистрируется в отношении определённых товаров
                            и услуг, распределенных по классам. Всего таких классов на сегодняшний день 45
                            (34 — товаров и 11 — услуг), они установлены Международной классификацией товаров и услуг для регистрации знаков (МКТУ). От того, в скольких классах будет регистрироваться знак, зависит пошлина за подачу заявки.
                        </div>
                        <div class="calculator__subtitle">Выберите классы МКТУ, в которых хотите проверить товарный знак</div>
                    </div>
                    <div class="calculator-box calculator-box-2">
                        <div class="calculator-box__wrapper calculator-box__wrapper--fb800">
                            <h3 class="calculator-box__title">Классы товаров</h3>
                            <div class="calculator-box__list">
                                <div class="calculator-box__inner">
                                    <div class="calculator-box__items">
                                        <div class="calculator-box__item">1</div>
                                        <div class="calculator-box__item">2</div>
                                    </div>
                                    <div class="calculator-box__text">агрохимия, краски, ацетон;</div>
                                </div>
                            </div>

                            <div class="calculator-box__list">
                                <div class="calculator-box__inner">
                                    <div class="calculator-box__items">
                                        <div class="calculator-box__item">3</div>
                                        <div class="calculator-box__item">4</div>
                                        <div class="calculator-box__item">5</div>
                                        <div class="calculator-box__item">6</div>
                                        <div class="calculator-box__item">7</div>
                                        <div class="calculator-box__item">8</div>
                                        <div class="calculator-box__item">9</div>
                                        <div class="calculator-box__item">10</div>
                                        <div class="calculator-box__item">11</div>
                                        <div class="calculator-box__item">12</div>
                                        <div class="calculator-box__item">13</div>
                                        <div class="calculator-box__item">14</div>
                                        <div class="calculator-box__item">15</div>
                                        <div class="calculator-box__item">16</div>

                                        <div class="calculator-box__item">17</div>
                                        <div class="calculator-box__item">18</div>
                                        <div class="calculator-box__item">19</div>
                                        <div class="calculator-box__item">20</div>
                                        <div class="calculator-box__item">21</div>
                                        <div class="calculator-box__item">22</div>
                                        <div class="calculator-box__item">23</div>
                                        <div class="calculator-box__item">24</div>
                                    </div>

                                </div>
                            </div>

                            <div class="calculator-box__list">
                                <div class="calculator-box__inner">
                                    <div class="calculator-box__items">
                                        <div class="calculator-box__item">25</div>
                                    </div>
                                    <div class="calculator-box__text">одежда</div>
                                </div>
                            </div>

                            <div class="calculator-box__list">
                                <div class="calculator-box__inner">
                                    <div class="calculator-box__items">
                                        <div class="calculator-box__item">26</div>
                                        <div class="calculator-box__item">27</div>
                                        <div class="calculator-box__item">28</div>
                                    </div>
                                </div>
                            </div>

                            <div class="calculator-box__list">
                                <div class="calculator-box__inner">
                                    <div class="calculator-box__items">
                                        <div class="calculator-box__item">29</div>
                                        <div class="calculator-box__item">25</div>
                                        <div class="calculator-box__item">25</div>
                                        <div class="calculator-box__item">25</div>
                                        <div class="calculator-box__item">25</div>
                                    </div>
                                    <div class="calculator-box__text">продукты питания</div>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-box__wrapper calculator-box__wrapper--fb300">
                            <div class="calculator-helps">
                                <label class="patent-form__custom-checkbox">
                                    <input type="checkbox" >
                                    <span class="patent-form__checkmark"></span>
                                    Мне нужна помощь в подборе
                                    классов МКТУ. Я хотел бы получить консультацию специалиста
                                </label>

                                <p class="calculator-helps__text">
                                    Телефон для консультации
                                    <a href="">+7 (926) 207-17-90</a>
                                    Пройдите калькулятор до конца
                                    и заполните заявку
                                </p>

                                <label  class="calculator-helps__input-text">
                                    <input type="text" placeholder="1">
                                    <span>Количество выбранных классов</span>
                                </label>
                                

                            </div>
                        </div>
                        
                    </div>
                </div>


            </div>

            <div style="display: none" class="calculator__wrapper">
                <div class="calculator__inner calculator__inner-2">
                    <div class="calculator__type">
                        <h2 class="calculator__title">Выберите тип регистрации</h2>
                        <div class="calculator__text">
                            Обычно от 10 до 15 месяцев может занять регистрация, в некоторых случаях, требуется ускорить этот процесс, тогда мы можем приложить дополнительные усилия
                            и зарегистрировать за 2–3 месяца.
                        </div>
                        <label class="">
                            <input type="radio" name="wordmark3_option">
                            Стандартная регистрация 10-15 месяцев
                        </label>
                        <label class="">
                            <input type="radio" name="wordmark3_option">
                            Ускоренная регистрация 2-3 месяца*
                        </label>
                        <div class="calculator__text--min">*Увеличивает пошлину на 100 000 рублей</div>
                    </div>

                </div>


            </div>

            <div style="display: none" class="calculator__wrapper">
                <div class="calculator__inner calculator__inner-2">
                    <div class="calculator__type">
                        <h2 class="calculator__title">Будете ли вы учувствовать в сохранении природы на планете?</h2>
                        <div class="calculator__text">
                            <span>Можно не получать готовое свидетельство на бумаге и сэкономить 1 400 руб.</span>
                            В этом случае будет только публикация в эл. реестре – ссылка
                            Но если по каким-либо причинам Вам важно его получить (доверие к системе), мысделаем это.
                        </div>
                        <label class="">
                            <input type="radio" name="wordmark4_option">
                            Получить свидетельство на бумаге
                        </label>
                        <label class="">
                            <input type="radio" name="wordmark4_option">
                            Получить свидетельство в электронном виде
                        </label>
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

    <section class="approach">
        <div class="container">
            <h2 class="titles">Ответственный подход к вашей задаче</h2>
            <ul class="approach__list">
                <li class="approach__item">
                    <div class="approach__img">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.2 19.8L27.2 16.8C26.8 16.4 26.2 16.4 25.8 16.8L16.5 26.1V30.5H20.9L30.2 21.2C30.6 20.8 30.6 20.2 30.2 19.8ZM20.1 28.5H18.5V26.9L23.5 21.9L25.1 23.5L20.1 28.5ZM26.5 22.1L24.9 20.5L26.5 18.9L28.1 20.5L26.5 22.1ZM10.5 23.5H12.5V25.5H10.5V23.5ZM14.5 18.5H18.5V20.5H14.5V18.5ZM10.5 18.5H12.5V20.5H10.5V18.5ZM14.5 13.5H22.5V15.5H14.5V13.5ZM10.5 13.5H12.5V15.5H10.5V13.5Z" fill="#1E1D25" />
                            <path d="M7.5 28.5V7.5H10.5V10.5H22.5V7.5H25.5V13.5H27.5V7.5C27.5 6.4 26.6 5.5 25.5 5.5H22.5V4.5C22.5 3.4 21.6 2.5 20.5 2.5H12.5C11.4 2.5 10.5 3.4 10.5 4.5V5.5H7.5C6.4 5.5 5.5 6.4 5.5 7.5V28.5C5.5 29.6 6.4 30.5 7.5 30.5H12.5V28.5H7.5ZM12.5 4.5H20.5V8.5H12.5V4.5Z" fill="#1E1D25" />
                        </svg>
                    </div>
                    <h3 class="approach__title">Работаем на результат</h3>
                    <div class="approach__text">
                        В случае препятствий упорно разрабатываем аргументы в защиту регистрации.
                    </div>
                </li>

                <li class="approach__item">
                    <div class="approach__img">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_550_2934)">
                                <path d="M0.5 3.25049C0.5 2.28349 1.284 1.50049 2.25 1.50049H14.75C15.717 1.50049 16.5 2.28349 16.5 3.25049V12.7505C16.5 13.2146 16.3156 13.6597 15.9874 13.9879C15.6592 14.3161 15.2141 14.5005 14.75 14.5005H8.561L5.987 17.0735C5.78324 17.2772 5.52367 17.4158 5.24111 17.472C4.95854 17.5282 4.66567 17.4993 4.3995 17.3891C4.13333 17.2789 3.90581 17.0922 3.74571 16.8527C3.58561 16.6132 3.5001 16.3316 3.5 16.0435V14.5005H2.25C1.78587 14.5005 1.34075 14.3161 1.01256 13.9879C0.684374 13.6597 0.5 13.2146 0.5 12.7505V3.25049ZM2.25 3.00049C2.1837 3.00049 2.12011 3.02683 2.07322 3.07371C2.02634 3.1206 2 3.18418 2 3.25049V12.7505C2 12.8885 2.112 13.0005 2.25 13.0005H4.25C4.44891 13.0005 4.63968 13.0795 4.78033 13.2202C4.92098 13.3608 5 13.5516 5 13.7505V15.9395L7.72 13.2205C7.78948 13.1507 7.87207 13.0953 7.96303 13.0576C8.05399 13.0198 8.15152 13.0004 8.25 13.0005H14.75C14.8163 13.0005 14.8799 12.9741 14.9268 12.9273C14.9737 12.8804 15 12.8168 15 12.7505V3.25049C15 3.18418 14.9737 3.1206 14.9268 3.07371C14.8799 3.02683 14.8163 3.00049 14.75 3.00049H2.25ZM22.75 9.00049H19.25C19.0511 9.00049 18.8603 8.92147 18.7197 8.78082C18.579 8.64017 18.5 8.4494 18.5 8.25049C18.5 8.05158 18.579 7.86081 18.7197 7.72016C18.8603 7.57951 19.0511 7.50049 19.25 7.50049H22.75C23.716 7.50049 24.5 8.28449 24.5 9.25049V18.7505C24.5 19.2146 24.3156 19.6597 23.9874 19.9879C23.6592 20.3161 23.2141 20.5005 22.75 20.5005H21.5V22.0435C21.4999 22.3316 21.4144 22.6132 21.2543 22.8527C21.0942 23.0922 20.8667 23.2789 20.6005 23.3891C20.3343 23.4993 20.0415 23.5282 19.7589 23.472C19.4763 23.4158 19.2168 23.2772 19.013 23.0735L16.439 20.5005H11.25C10.7859 20.5005 10.3408 20.3161 10.0126 19.9879C9.68437 19.6597 9.5 19.2146 9.5 18.7505V17.2855C9.5 17.0866 9.57902 16.8958 9.71967 16.7552C9.86032 16.6145 10.0511 16.5355 10.25 16.5355C10.4489 16.5355 10.6397 16.6145 10.7803 16.7552C10.921 16.8958 11 17.0866 11 17.2855V18.7505C11 18.8885 11.112 19.0005 11.25 19.0005H16.75C16.949 19.0005 17.14 19.0795 17.28 19.2205L20 21.9395V19.7505C20 19.5516 20.079 19.3608 20.2197 19.2202C20.3603 19.0795 20.5511 19.0005 20.75 19.0005H22.75C22.8163 19.0005 22.8799 18.9741 22.9268 18.9273C22.9737 18.8804 23 18.8168 23 18.7505V9.25049C23 9.18418 22.9737 9.1206 22.9268 9.07371C22.8799 9.02683 22.8163 9.00049 22.75 9.00049ZM13.03 5.78049L8.03 10.7805C7.96057 10.8504 7.878 10.9059 7.78704 10.9437C7.69608 10.9816 7.59852 11.0011 7.5 11.0011C7.40148 11.0011 7.30392 10.9816 7.21296 10.9437C7.122 10.9059 7.03943 10.8504 6.97 10.7805L4.47 8.28049C4.4004 8.21089 4.34519 8.12826 4.30752 8.03732C4.26985 7.94638 4.25047 7.84892 4.25047 7.75049C4.25047 7.65206 4.26985 7.55459 4.30752 7.46365C4.34519 7.37272 4.4004 7.29009 4.47 7.22049C4.5396 7.15089 4.62223 7.09568 4.71317 7.05801C4.8041 7.02034 4.90157 7.00096 5 7.00096C5.09843 7.00096 5.1959 7.02034 5.28683 7.05801C5.37777 7.09568 5.4604 7.15089 5.53 7.22049L7.5 9.18949L11.97 4.72049C12.0396 4.65089 12.1222 4.59568 12.2132 4.55801C12.3041 4.52034 12.4016 4.50096 12.5 4.50096C12.5984 4.50096 12.6959 4.52034 12.7868 4.55801C12.8778 4.59568 12.9604 4.65089 13.03 4.72049C13.0996 4.79009 13.1548 4.87272 13.1925 4.96365C13.2301 5.05459 13.2495 5.15206 13.2495 5.25049C13.2495 5.34892 13.2301 5.44638 13.1925 5.53732C13.1548 5.62826 13.0996 5.71089 13.03 5.78049Z" fill="#1E1D25" />
                            </g>
                            <defs>
                                <clipPath id="clip0_550_2934">
                                    <rect width="24" height="23.9995" fill="white" transform="translate(0.5 0.500488)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="approach__title">Не оставляем клиента одного</h3>
                    <div class="approach__text">
                        Оспариваем решение об отказе, используя свою находчивость и энтузиазм
                        <a href="">в Палате по патентным спорам</a>
                        <a href="">В Суде по интеллектуальным правам</a>
                    </div>
                </li>

                <li class="approach__item">
                    <div class="approach__img">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_550_2937)">
                                <path d="M2.87305 4.43495L11.5022 1.9165L20.1227 4.43495V9.5993C20.1226 12.246 19.2898 14.8256 17.7421 16.9726C16.1943 19.1197 14.0103 20.7252 11.4993 21.5619C8.98754 20.7254 6.80275 19.1196 5.2545 16.9721C3.70626 14.8246 2.87309 12.2443 2.87305 9.5969V4.43495Z" stroke="#1E1D25" stroke-width="1.91663" stroke-linejoin="round" />
                                <path d="M7.18555 11.0203L10.5396 14.3744L16.2895 8.62451" stroke="#1E1D25" stroke-width="1.91663" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_550_2937">
                                    <rect width="22.9995" height="22.9995" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="approach__title">Организуем преследование нарушителя бренда</h3>
                    <div class="approach__text">
                        В случае препятствий упорно разрабатываем аргументы в защиту регистрации.
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="what">
        <div class="container">
            <h2 class="titles">ЧТО МОЖЕТ ПОНАДОБИТСЯ ЕЩЕ В ПРОЦЕССЕ РЕГИСТРАЦИИ</h2>

            <ul class="what__list">
                <li class="what__item">
                    <h3 class="what__title">Внесение изменений</h3>
                    <div class="what__text--min">(адрес, лого, )</div>
                    <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                    </svg>
                </li>

                <li class="what__item">
                    <h3 class="what__title">Получение доп. Доказательств</h3>
                    <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                    </svg>
                </li>

                <li class="what__item">
                    <h3 class="what__title">Получение письма-согласия/ письма-поручения</h3>
                    <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                    </svg>
                </li>
                <li class="what__item">
                    <h3 class="what__title">Аннулирование препятствующего ТЗ</h3>
                    <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                    </svg>
                </li>

                <li class="what__item">
                    <h3 class="what__title">Оспаривание Палата</h3>
                    <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                    </svg>
                </li>

                <li class="what__item">
                    <h3 class="what__title">Судебное опротестование</h3>
                    <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                    </svg>
                </li>
            </ul>

            <div class="what__container">
                <div class="what__wrapper--title">
                    <h2 class="titles">ОТДЕЛЬНЫЕ УСЛУГИ</h2>
                    <span>Что может понадобиться после регистрации</span>
                </div>

                <ul class="what__list">
                    <li class="what__item">
                        <h3 class="what__title">Внесение изменений</h3>
                        <div class="what__text--min">(адрес, лого, )</div>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>

                    <li class="what__item">
                        <h3 class="what__title">Получение доп. Доказательств</h3>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>

                    <li class="what__item">
                        <h3 class="what__title">Получение письма-согласия/ письма-поручения</h3>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>
                    <li class="what__item">
                        <h3 class="what__title">Аннулирование препятствующего ТЗ</h3>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>

                    <li class="what__item">
                        <h3 class="what__title">Оспаривание Палата</h3>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>

                    <li class="what__item">
                        <h3 class="what__title">Судебное опротестование</h3>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>

                    <li class="what__item">
                        <h3 class="what__title">Судебное опротестование</h3>
                        <div class="what__text">от 15 000 ₽ или от 55 400 ₽</div>
                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </section>

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


</main>
<?php
get_footer();
?>