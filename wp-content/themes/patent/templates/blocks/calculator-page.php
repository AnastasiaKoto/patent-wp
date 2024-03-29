<section class="calculator-page">
    <div class="container">
        <h2 class="banner-services__title">С помощью калькулятора вы можете узнать классы МКТУ, их количество,
            рассчитать полную стоимость для вашего случая</h2>

        <div class="calculator">
            <div class="calculator__caunt">
                <span>1</span>
                <span>/</span>
                <span>6</span>
            </div>
            <div class="calculator-container">
                <div class="calculator__wrapper">
                    <div class="calculator__inner">
                        <div class="calculator__type">
                            <h2 class="calculator__title">тип товарного знака</h2>
                            <label class="">
                                <input type="radio" name="wordmark_option" value="<?php if(get_field('sl_price', 'option')) { echo get_field('sl_price', 'option'); } else { echo 0; } ?>">
                                Словесный
                            </label>
                            <label class="">
                                <input type="radio" name="wordmark_option" value="<?php if(get_field('img_price', 'option')) { echo get_field('img_price', 'option'); } else { echo 0; } ?>">
                                Изобразительный
                            </label>
                            <label class="">
                                <input type="radio" name="wordmark_option" value="<?php if(get_field('comb_price', 'option')) { echo get_field('comb_price', 'option'); } else { echo 0; } ?>">
                                Комбинированный
                            </label>
                        </div>

                        <div class="calculator__inner  calculator__inner-m">
                            <div class="calculator__logos calculator__logos-m">
                                <p>Примеры словесного товарного знака:</p>
                                <?php 
                                $word_images = get_field('word_images', 'option');
                                if($word_images) { 
                                ?>
                                    <ul>
                                        <?php
                                        foreach($word_images as $image) {
                                        ?>
                                            <li>
                                                <img src="<?php echo $image['img']; ?>" alt="">
                                            </li>
                                        <?php 
                                        }
                                        ?>
                                    </ul>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="calculator__logos calculator__logos-m" style="display: none;">
                                <p>Примеры изобразительного товарного знака:</p>
                                <?php 
                                $img_images = get_field('img_images', 'option');
                                if($img_images) { 
                                ?>
                                    <ul>
                                        <?php
                                        foreach($img_images as $image) {
                                        ?>
                                            <li>
                                                <img src="<?php echo $image['img']; ?>" alt="">
                                            </li>
                                        <?php 
                                        }
                                        ?>
                                    </ul>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="calculator__logos calculator__logos-m" style="display: none;">
                                <p>Примеры комбинированного товарного знака:</p>
                                <?php 
                                $comby_images = get_field('comby_images', 'option');
                                if($comby_images) { 
                                ?>
                                    <ul>
                                        <?php
                                        foreach($comby_images as $image) {
                                        ?>
                                            <li>
                                                <img src="<?php echo $image['img']; ?>" alt="">
                                            </li>
                                        <?php 
                                        }
                                        ?>
                                    </ul>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="calculator__type">
                            <h2 class="calculator__title calculator__title-mb18">название товарного знака*</h2>
                            <label class="">
                                <input type="text" placeholder="Введите название">

                            </label>
                            <label class="calculator__file-input-label">
                                <input type="file" class="calculator__file-input">
                            </label>

                            <span class="calculator__optional">*Поле не является обязательным для заполнения</span>
                        </div>
                    </div>
                    <div class="calculator__inner  calculator__inner-p">
                        <div class="calculator__logos calculator__logos-p">
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

                        <div class="calculator__logos calculator__logos-p" style="display: none;">
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

                        <div class="calculator__logos calculator__logos-p" style="display: none;">
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


                <div style="display: none"  class="calculator__wrapper">
                    <div class="calculator__inner calculator__inner-2">
                        <div class="calculator__type">
                            <h2 class="calculator__title">Требуется ли предварительная проверка вашего товарного знака?
                            </h2>
                            <div class="calculator__text">
                                <?php if(get_field('two-screen_descr', 'option')) { echo get_field('two-screen_descr', 'option'); } ?>
                            </div>
                            <label class="">
                                <input type="radio" name="wordmark2_option" value="yes">
                                Да, требуется полная проверка моего товарного знака (3-4 дня).
                            </label>
                            <label class="">
                                <input type="radio" name="wordmark2_option" value="no">
                                Нет, не требуется. Мне известна возможность регистрации моего товарного знака.
                            </label>
                        </div>

                    </div>


                </div>

                <div style="display: none"  class="calculator__wrapper">
                    <div class="calculator__inner calculator__inner-2">
                        <div class="calculator__type">
                            <h2 class="calculator__title">классы МКТУ</h2>
                            <div class="calculator__text calculator__text--w100">
                                <?php if(get_field('three-screen_descr', 'option')) { echo get_field('three-screen_descr', 'option'); } ?>
                            </div>
                            <div class="calculator__subtitle">Выберите классы МКТУ, в которых хотите проверить товарный
                                знак</div>
                        </div>
                        <div class="calculator-box calculator-box-inner">
                            <div class="calculator-box__wrapper--fb800">
                                <!--start mkty -->
                                <?php 
                                $products_categories = get_field('products_cats', 'option');
                                if($products_categories) {
                                ?>
                                    <!--area -->
                                    <div class="section-mkty__area sectiom-mkty-area">
                                        <div class="sectiom-mkty__title">
                                            Классы товаров
                                        </div>
                                        <?php
                                        foreach($products_categories as $category) {
                                            $products_classes = $category['classes'];
                                        ?>
                                        <!--row -->
                                            <div class="sectiom-mkty-area__row">
                                                <div class="section-mkty-area__items">
                                                    <?php
                                                    if($products_classes) {
                                                        foreach($products_classes as $class) {
                                                    ?>
                                                            <a href="javascript:void(0)" data-target="mkty-tabs-item_<?php echo $class['classes_name']; ?>" data-number="<?php echo $class['classes_name']; ?>"
                                                            class="section-mkty-area__item section-mkty-area-item">
                                                                <?php echo $class['classes_name']; ?>
                                                            </a>
                                                    <?php 
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="section-mkty-area__name">
                                                    <?php echo $category['category_name']; ?>
                                                </div>

                                            </div>
                                            <!-- endrow -->
                                        <?php 
                                        } 
                                        ?>
                                    </div>
                                    <!--end area -->
                                <?php 
                                }
                                ?>
                                <?php 
                                $service_classes = get_field('service_classes', 'option');
                                if($service_classes) {
                                ?>
                                    <!--area -->
                                    <div class="section-mkty__area sectiom-mkty-area">
                                        <div class="sectiom-mkty__title">
                                            Классы услуг
                                        </div>
                                        <!--row -->
                                        <div class="sectiom-mkty-area__row">
                                            <div class="section-mkty-area__items">
                                            <?php
                                            foreach($service_classes as $class) {
                                            ?>
                                                <a href="javascript:void(0)" class="section-mkty-area__item section-mkty-area-item" data-target="mkty-tabs-item_<?php echo $class['class_name']; ?>" data-number="<?php echo $class['class_name']; ?>">
                                                    <?php echo $class['class_name']; ?>
                                                </a>
                                            <?php 
                                            }
                                            ?>
                                            </div>
                                            <div class="section-mkty-area__name"></div>
                                        </div>

                                        <!-- endrow -->

                                    </div>
                                    <!--endarea -->
                                <?php 
                                }
                                ?>
                                <?php 
                                if($products_categories || $service_classes) {
                                ?>
                                    <div class="section-mkty__tabs section-mkty-tabs section-mkty-tabs-styles">
                                        <?php
                                        if($products_categories) {
                                            foreach($products_categories as $category) {
                                                $products_classes = $category['classes'];
                                                foreach($products_classes as $class) {
                                        ?>
                                                    <!-- tab -->
                                                    <div class="section-mkty-tabs__item section-mkty-tabs-item" id="mkty-tabs-item_<?php echo $class['classes_name']; ?>">
                                                        <?php echo $class['class_descr']; ?>
                                                    </div>
                                                    <!-- end tab -->
                                                <?php
                                                }
                                                ?>
                                        <?php
                                            } 
                                        }
                                        ?>
                                        <?php
                                        if($service_classes) {
                                            foreach($service_classes as $class) {
                                        ?>
                                                <!-- tab -->
                                                <div class="section-mkty-tabs__item section-mkty-tabs-item" id="mkty-tabs-item_<?php echo $class['class_name']; ?>">
                                                    <?php echo $class['class_descr']; ?>
                                                </div>
                                                <!-- end tab -->
                                            <?php
                                            }
                                            ?>
                                        <?php
                                        } 
                                        ?>
                                        <!-- </div> -->
                                        <!-- end mkty-->
                                    </div>
                                <?php 
                                }
                                ?>
                            </div>
                            <div class="calculator-box__wrapper--fb300">
                                <p class="calculator-helps__link calculator-helps__link-m">Чтобы ознакомиться более подробно с каждым классом,
                                    <a  href="/mktu/">перейдите на страницу МКТУ
                                        <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464466C15.9763 0.269204 15.6597 0.269204 15.4645 0.464466C15.2692 0.659728 15.2692 0.976311 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.7308 15.9763 7.7308 16.1716 7.53553L19.3536 4.35355ZM0 4.5H19V3.5H0V4.5Z" fill="#5671B2" />
                                        </svg>
                                    </a>
                                </p>
                                <div class="calculator-box__wrapper">
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

                                        <div class="calculator-helps__input-text">
                                            <div class="selected-count-block" id="selected-count">0</div>
                                            <span>Количество выбранных классов</span>
                                        </div>


                                    </div>
                            </div>
                        </div>


                    </div>
                        <p class="calculator-helps__link calculator-helps__link-p">Чтобы ознакомиться более подробно с
                            каждым классом,
                            <a href="http://patent.veht.ru/mktu/" target="_blank">перейдите на страницу МКТУ
                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464466C15.9763 0.269204 15.6597 0.269204 15.4645 0.464466C15.2692 0.659728 15.2692 0.976311 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.7308 15.9763 7.7308 16.1716 7.53553L19.3536 4.35355ZM0 4.5H19V3.5H0V4.5Z"
                                            fill="#5671B2" />
                                </svg>
                            </a>
                        </p>

                </div>

            </div>


                <div style="display: none" class="calculator__wrapper">
                    <div class="calculator__inner calculator__inner-2">
                        <div class="calculator__type">
                            <h2 class="calculator__title">Выберите тип регистрации</h2>
                            <div class="calculator__text">
                                <?php if(get_field('four-screen_descr', 'option')) { echo get_field('four-screen_descr', 'option'); } ?>
                            </div>
                            <label class="">
                                <input type="radio" name="wordmark3_option" value="0" checked>
                                Стандартная регистрация 10-15 месяцев
                            </label>
                            <label class="">
                                <input type="radio" name="wordmark3_option" value="<?php if(get_field('of_price', 'option')) { echo get_field('of_price', 'option'); } else { echo 0; } ?>">
                                Ускоренная регистрация 2-3 месяца*
                            </label>
                            <div class="calculator__text--min">*Увеличивает пошлину на 100 000 рублей</div>
                        </div>

                    </div>


                </div>

                <div style="display: none" class="calculator__wrapper">
                    <div class="calculator__inner calculator__inner-2">
                        <div class="calculator__type">
                            <h2 class="calculator__title">Будете ли вы учувствовать в сохранении природы на планете?
                            </h2>
                            <div class="calculator__text">
                                <?php if(get_field('five-screen_descr', 'option')) { echo get_field('five-screen_descr', 'option'); } ?>
                            </div>
                            <label class="">
                                <input type="radio" name="wordmark4_option" value="<?php if(get_field('paper_price', 'option')) { echo get_field('paper_price', 'option'); } else { echo 0; }  ?>" checked>
                                Получить свидетельство на бумаге
                            </label>
                            <label class="">
                                <input type="radio" name="wordmark4_option" value="<?php if(get_field('paper_gosprice', 'option')) { echo get_field('paper_gosprice', 'option'); } else { echo 0; }  ?>">
                                Получить свидетельство в электронном виде
                            </label>
                        </div>

                    </div>


                </div>

                <div style="display: none" class="calculator__wrapper calculator-value-inner">
                    <div class="calculator-value">
                        <div class="calculator__inner calculator__inner--sb">
                            <h2 class="calculator__title">Цена за наши услуги</h2>
                            <ul class="calculator-value__list calculator-value__list-js1">
                                <li>
                                    <p>
                                        <span class="calculator-value__span">Ваш товарный знак:</span>
                                        <span class="calculator-value__span calculator-value__span-bold calculator-value__span-jsstr">апр</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Поиск:</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-s1"> 0 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Подача заявки и ведение дел</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-s2">0 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Получение свидетельства</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-3">0 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Итого:</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-s-4">0 ₽</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="calculator__inner calculator__inner--sb">
                            <div class="">
                                <h2 class="calculator__title">Пошлины Роспатента</h2>
                                <p class="calculator__subtitle-text">Размер пошлины зависит от количества классов МКТУ,
                                    которые вы указали при расчете.</p>
                            </div>
                            <ul class="calculator-value__list calculator-value__list-js2">
                                <li>
                                    <p>
                                        <span class="calculator-value__span">Подача заявки</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-1">0 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Проведение экспертизы</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-4">0 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Получение свидетельства</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-2">0 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Итого:</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-3">0 ₽</span>
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="calculator-value-bottom">
                        <p>Всего за регистрацию: <span class="totalAmount">0 ₽</span></p>
                    </div>
                </div>









            <div class="calculator__inner-btn">
                <a style="display: none" class="calculator__end" href="#">
                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.46967 5.46967C0.176777 5.76256 0.176777 6.23744 0.46967 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46447 6.59619 0.989592 6.3033 0.696699C6.01041 0.403805 5.53553 0.403805 5.24264 0.696699L0.46967 5.46967ZM11 5.25L1 5.25L1 6.75L11 6.75L11 5.25Z"
                            fill="#1E1D25" fill-opacity="0.6" />
                    </svg>
                    назад
                </a>

                <div style="display: none" class="calculator__questions">
                    остались вопросы? хотите получить услугу?
                    <span>
                        тогда оставьте заявку
                        <svg width="25" height="8" viewBox="0 0 25 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.3536 4.35355C24.5488 4.15829 24.5488 3.84171 24.3536 3.64645L21.1716 0.464466C20.9763 0.269204 20.6597 0.269204 20.4645 0.464466C20.2692 0.659728 20.2692 0.976311 20.4645 1.17157L23.2929 4L20.4645 6.82843C20.2692 7.02369 20.2692 7.34027 20.4645 7.53553C20.6597 7.7308 20.9763 7.7308 21.1716 7.53553L24.3536 4.35355ZM0 4.5H24V3.5H0V4.5Z"
                                fill="#1E1D25" />
                        </svg>
                    </span>
                </div>

                <a class="calculator__next">
                    <span>далее</span>
                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5303 6.53033C10.8232 6.23744 10.8232 5.76256 10.5303 5.46967L5.75736 0.696699C5.46447 0.403806 4.98959 0.403806 4.6967 0.696699C4.40381 0.989593 4.40381 1.46447 4.6967 1.75736L8.93934 6L4.6967 10.2426C4.40381 10.5355 4.40381 11.0104 4.6967 11.3033C4.98959 11.5962 5.46447 11.5962 5.75736 11.3033L10.5303 6.53033ZM0 6.75H10V5.25H0V6.75Z"
                            fill="white" />
                    </svg>
                </a>
                <a style="display: none;"  href="#calc-popup" class="btn header__btn lite__btn global-trigger btn-hidde">Оставить заявку</a>
            </div>
        </div>
    </div>


        <!-- Global Popup Сalc -->
        <div class="global-popup" id="calc-popup" style="display:none">
            <div class="global-popup__inner">
                <h2 class="global-popup__title">
                    заказать звонок
                    патентного поверенного
                </h2>
                <p>Равным образом консультация с широким активом требуют
                    от нас анализа форм развития. </p>
                <!--заказать услугу патнетного поверенного -->
              <?php get_template_part('templates/forms/feedback', 'calc'); ?>
                <!--заказать услугу патнетного поверенного -->
            </div>
        </div>

        <a style="display: none" href="#calc-popup" class="btn header__btn lite__btn global-trigger">обратный звонок</a>
</section>





<script>
    document.addEventListener('DOMContentLoaded', function() {


        // Шаг 1
        const radioButtons = document.querySelectorAll('input[name="wordmark_option"]');
        let sum = 0;

        radioButtons.forEach(button => {
            button.addEventListener('change', function() {
                sum = parseInt(this.value);

            });
        });

        // Шаг 2
        const radioButtons2 = document.querySelectorAll('input[name="wordmark2_option"]');
        const selectedTrademark = document.querySelector('.calculator-value__span-jsstr');

        let priceSearch = 0; // ТИП ТОВАРНОГО ЗНАКА


        radioButtons2.forEach(button => {
            button.addEventListener('change', function() {
                if (this.value === 'yes') {
                    let selectedTrademarkName = document.querySelector('input[name="wordmark_option"]:checked').nextSibling.nodeValue.trim();
                    selectedTrademark.innerHTML = selectedTrademarkName;
                    priceSearch = sum; // Устанавливаем цену поиска на основе выбора на шаге 1
                    console.log(priceSearch)
                } else {
                    selectedTrademark.innerHTML = '';
                    priceSearch = 0;
                    console.log(priceSearch)
                }
                updateTotalPrice(); // Обновляем общую цену при изменении цены поиска
            });
        });

        // Шаг 3
        const items = document.querySelectorAll('.section-mkty-area-item');
        let selectedCountBlock = document.getElementById("selected-count");
        let totalPriceAll = 0;
        let selectedClassesCount = 0;
        let additionalClassPrice = 0;

        items.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('section-clicked');

                const clickedItems = document.querySelectorAll('.section-mkty-area-item.section-clicked');
                const clickedCount = clickedItems.length;
                selectedClassesCount = clickedItems.length;

                let basePrice = 0;
                if (priceSearch >= 11000 && priceSearch <= 16000) {
                    basePrice = priceSearch;
                    if (priceSearch >= 13000) {
                        basePrice += (priceSearch >= 15000) ? 4000 : 2000;
                    }
                }



                if (clickedCount <= 5) {
                    additionalClassPrice = 35000;
                } else {
                    additionalClassPrice = 35000 + (clickedCount - 5) * ((priceSearch >= 15000) ? 4000 : 2000);
                }

                totalPriceAll = basePrice + priceSearch;


                selectedCountBlock.textContent = clickedCount.toString(); // Обновляем счетчик выбранных классов
                console.log(totalPriceAll, '1!')
                console.log(selectedClassesCount, '2!')
                console.log(additionalClassPrice, '3!')
                updateTotalPrice(); // Обновляем общую цену при изменении выбранных пунктов
            });
        });

        // Шаг 4
        const radioButtons3 = document.querySelectorAll('input[name="wordmark3_option"]');
        let duesCertificate = 10000;

        radioButtons3.forEach(button => {
            button.addEventListener('change', function() {
                let registrationType = parseInt(this.value);


                if (registrationType === 100000) {
                    duesCertificate = 100000;
                    console.log(duesCertificate)
                } else {
                    duesCertificate = 10000;
                }
                updateTotalPrice();
            });
        });

        // Шаг 5
        const radioButtons4 = document.querySelectorAll('input[name="wordmark4_option"]');
        let priceEvidence = 0;

        radioButtons4.forEach(button => {
            button.addEventListener('change', function() {
                let certificateFormat = parseInt(this.value);

                if (certificateFormat === 5000) {
                    priceEvidence = 5000;
                    console.log(priceEvidence)
                } else {
                    priceEvidence = 1400;
                    console.log(priceEvidence)
                }
                updateTotalPrice();
            });
        });


        // ЦЕНА ЗА НАШИ УСЛУГИ
        const searchFields = document.querySelector('.calculator-value__span-js-s1'); // Поиск:
        const applicationAndCase  = document.querySelector('.calculator-value__span-js-s2'); // Подача заявки и ведение дел
        const obtainingCertificate = document.querySelector('.calculator-value__span-js-3'); // Получение свидетельства
        const servicePrice = document.querySelector('.calculator-value__span-js-s-4'); // Итого:

        // ПОШЛИНЫ РОСПАТЕНТА
        const applicationFee = document.querySelector('.calculator-value__span-js-c-1'); // Подача заявки
        const carryingOutAnExamination = document.querySelector('.calculator-value__span-js-c-4'); // Проведение экспертизы
        const obtainingCertificateFee = document.querySelector('.calculator-value__span-js-c-2'); // Получение свидетельства
        const servicePriceFee = document.querySelector('.calculator-value__span-js-c-3'); // Итого:

        // ВСЕГО ЗА РЕГИСТРАЦИЮ:
        const totalAmount = document.querySelector('.totalAmount'); // Итого:


        function updateTotalPrice() {
            // ЦЕНА ЗА НАШИ УСЛУГИ
            let searchFieldsPrice = priceSearch + totalPriceAll; // вывод цены 2 + 3 шаг
            searchFields.textContent = searchFieldsPrice;

            let applicationAndCasePrice = additionalClassPrice + duesCertificate; // Подача заявки и ведение дел
            applicationAndCase.textContent = applicationAndCasePrice;

            let obtainingCertificatePrice = priceEvidence; // Получение свидетельства
            obtainingCertificate.textContent = obtainingCertificatePrice;

            let servicePriceAll = searchFieldsPrice + applicationAndCasePrice + obtainingCertificatePrice; // Получение свидетельства
            servicePrice.textContent = servicePriceAll;

            // ПОШЛИНЫ РОСПАТЕНТА

            // Расчет стоимости по количеству выбранных классов
            let fixedPrice = 2450; // Фиксированная цена за первые 5 классов
            let additionalClassFee = 700; // Дополнительная плата за каждый класс свыше 5
            let totalClassFee = fixedPrice + (Math.max(selectedClassesCount - 5, 0) * additionalClassFee);
            console.log(totalClassFee); // Выводим результат в консоль или используйте эту переменную по своему усмотрению

            let applicationFeePrice = totalClassFee; // Получение свидетельства
            applicationFee.textContent = applicationFeePrice;


            // Расчет стоимости проведения экспертизы
            let examinationBasePrice = 8050; // Фиксированная цена за первый класс
            let additionalExaminationFee = 1750; // Дополнительная плата за каждый класс свыше 1

            let totalExaminationFee = examinationBasePrice + (Math.max(selectedClassesCount - 1, 0) * additionalExaminationFee);

            // Учитываем ускоренную экспертизу, если выбрана
            if (duesCertificate === 100000) {
                totalExaminationFee += 100000;
            }

            carryingOutAnExamination.textContent = totalExaminationFee; // Отображаем стоимость проведения экспертизы



            // Расчет стоимости получения свидетельства
            let certificateBasePrice = 11200; // Фиксированная цена за свидетельство
            let electronicCertificateFee = 1400; // Дополнительная плата за электронное свидетельство

            let totalCertificateFee = certificateBasePrice;

            // Проверяем, нужно ли добавить дополнительную плату за электронное свидетельство
            if (priceEvidence === 1400) {
                totalCertificateFee += electronicCertificateFee;
            }

            // Проверяем, нужно ли добавить дополнительную плату за количество классов
            if (selectedClassesCount > 5) {
                let additionalClassFee = (selectedClassesCount - 5) * 700;
                totalCertificateFee += additionalClassFee;
            }

            obtainingCertificateFee.textContent = totalCertificateFee; // Отображаем стоимость получения свидетельства


            let pricesSent = applicationFeePrice + totalExaminationFee + totalCertificateFee; // итого
            servicePriceFee.textContent = pricesSent;

            let pricesAll = pricesSent + servicePriceAll; // итого
            totalAmount.textContent = pricesAll;

        }







    });



</script>





<style>
    .section-clicked {
        background-color: #5671B2;
        color: white;
    }
</style>