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
                            <a href="">перейдите на страницу МКТУ
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
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-s1">1
                                            000 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Подача заявки и ведение дел</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-s2">26
                                            000 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Получение свидетельства</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-3">12
                                            000 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Итого:</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-s-4">38
                                            000 ₽</span>
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
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-1">10
                                            500 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Получение свидетельства</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-2">11
                                            200 ₽</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span class="calculator-value__span">Итого:</span>
                                        <span
                                                class="calculator-value__span calculator-value__span-bold calculator-value__span-js-c-3">21
                                            700 ₽</span>
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="calculator-value-bottom">
                        <p>Всего за регистрацию: <span class="total-js">59 700 ₽</span></p>
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

                <a class="calculator__next" href="#">
                    <span>далее</span>
                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5303 6.53033C10.8232 6.23744 10.8232 5.76256 10.5303 5.46967L5.75736 0.696699C5.46447 0.403806 4.98959 0.403806 4.6967 0.696699C4.40381 0.989593 4.40381 1.46447 4.6967 1.75736L8.93934 6L4.6967 10.2426C4.40381 10.5355 4.40381 11.0104 4.6967 11.3033C4.98959 11.5962 5.46447 11.5962 5.75736 11.3033L10.5303 6.53033ZM0 6.75H10V5.25H0V6.75Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<script>


    // Шаг 1
    // Получаем все радио-кнопки по имени группы для типа товарного знака
    const radioButtons = document.querySelectorAll('input[name="wordmark_option"]');

    // Получаем все радио-кнопки по имени группы для проверки товарного знака
    const radioButtons2 = document.querySelectorAll('input[name="wordmark2_option"]');

    // Объявляем переменную для хранения суммы
    let sum = 0;

    // Назначаем обработчик события изменения для каждой радио-кнопки типа товарного знака
    radioButtons.forEach(button => {
        button.addEventListener('change', function() {
            // Получаем значение выбранной радио-кнопки и преобразуем его в число
            sum = parseInt(this.value);
            console.log('Выбранная сумма для типа товарного знака:', sum);
        });
    });

    // Шаг 2

    let selectedTrademark = document.querySelector('.calculator-value__span-jsstr');


    // Проходимся по всем радио-кнопкам второй группы и добавляем обработчик события
    radioButtons2.forEach(button => {
        button.addEventListener('change', function() {
            // Обновляем значение переменной при изменении выбора во второй группе
            selectedValue = document.querySelector('input[name="wordmark_option"]:checked').value;
            // Проверяем, был ли выбран вариант "Да" во второй группе
            if (this.value === 'yes') {
                // Выводим название товарного знака в соответствующий элемент
                let selectedTrademarkName = document.querySelector('input[name="wordmark_option"]:checked').nextSibling.nodeValue.trim();
                selectedTrademark.textContent = selectedTrademarkName;

                // Выводим цену в соответствующий элемент
                let price = parseInt(selectedValue);
                priceSearch.textContent = price;
            } else {
                // Если выбрано "Нет", то сбрасываем значения
                selectedTrademark.textContent = '';
                priceSearch.textContent = '';
                console.log(price)
            }
        });
    });






    // Шаг 3
    // Получаем все элементы с классом "section-mkty-area__item"
    // Получаем все элементы с классом section-mkty-area-item
    const items = document.querySelectorAll('.section-mkty-area-item');

    // Добавляем цену 1000 к каждому элементу
    items.forEach(item => {
        item.dataset.price = '1000';
    });

    // Переменные для хранения общей цены без скидки и с учетом скидки
    let totalPrice = 0;
    let discountedPrice = 0;

    // Добавляем обработчик клика для каждого элемента
    items.forEach(item => {
        item.addEventListener('click', () => {
            // Добавляем класс при клике
            item.classList.toggle('section-clicked');

            // Подсчитываем количество выбранных элементов
            let selectedCountElement = document.getElementById("selected-count");
            const clickedItems = document.querySelectorAll('.section-mkty-area-item.section-clicked');
            const clickedCount = clickedItems.length;

            // Вычисляем общую цену выбранных элементов без скидки
            totalPrice = 0;
            clickedItems.forEach(clickedItem => {
                totalPrice += parseInt(clickedItem.dataset.price);
            });

            // Вычисляем цену за каждый класс и прибавляем к итоговой цене
            const classPrice = 1000; // Указываем цену за каждый класс
            const additionalPrice = classPrice * clickedCount;
            const totalPriceWithClasses = totalPrice + additionalPrice;

            // Вычисляем цену с учетом скидки после выбора более 10 элементов
            discountedPrice = totalPriceWithClasses;
            if (clickedCount > 10) {
                const discountPrice = Math.ceil(clickedCount / 10) * 1000;
                discountedPrice -= discountPrice;
            }

            // Выводим цену в соответствующий элемент
            priceSearch.textContent = discountedPrice;

            // Выводим результат в консоль
            console.log('Количество выбранных элементов:', clickedCount);
            console.log('Общая цена выбранных элементов без скидки:', totalPrice);
            console.log('Цена со скидкой:', discountedPrice);

            // Обновляем текст внутри элемента div
            selectedCountElement.textContent = clickedCount;
        });
    });


    // Шаг 4

    // Получаем все радио-кнопки по имени группы для типа регистрации
    const radioButtons3 = document.querySelectorAll('input[name="wordmark3_option"]');

    // Назначаем обработчик события изменения для каждой радио-кнопки типа регистрации
    radioButtons3.forEach(button => {
        button.addEventListener('change', function() {
            // Получаем значение выбранной радио-кнопки и преобразуем его в число
            const registrationCost = parseInt(this.value);

            // Обновляем стоимость подачи заявки и ведения дел
            let applicationCost = 10000;
            applicationCost += registrationCost === 100000 ? 100000 : 0;

            // Обновляем стоимость проведения экспертизы
            let expertiseCost = 0;
            expertiseCost += registrationCost === 100000 ? 100000 : 0;

            // Выводим обновленные значения стоимостей
            console.log('Стартовая стоимость подачи заявки и ведения дел:', applicationCost);
            console.log('Стартовая стоимость проведения экспертизы:', expertiseCost);

            // Выводим значения цен
            priceBusiness.textContent = applicationCost;
            duesFiling.textContent = applicationCost;
            duesCertificate.textContent = expertiseCost;
            duesTotal.textContent = applicationCost + expertiseCost;
        });
    });

    // Шаг 5
    // Получаем все радио-кнопки по имени группы для выбора формата свидетельства
    const radioButtons4 = document.querySelectorAll('input[name="wordmark4_option"]');

    // Назначаем обработчик события изменения для каждой радио-кнопки формата свидетельства
    radioButtons4.forEach(button => {
        button.addEventListener('change', function() {
            // Получаем значение выбранной радио-кнопки и преобразуем его в число
            const certificateCost = parseInt(this.value);

            // Обновляем стоимость получения свидетельства
            let certificatePrice = 0;
            certificatePrice += certificateCost === 1400 ? 1400 : 5000;

            // Выводим обновленное значение стоимости получения свидетельства
            console.log('Стартовая стоимость получения свидетельства:', certificatePrice);

            // Выводим значение цены
            priceEvidence.textContent = certificatePrice;
            priceTotal.textContent = certificatePrice;
        });
    });

    // Шаг 6
    // Получаем все поля для вывода цены
    let priceTrademark = document.querySelector('.calculator-value__span-jsstr');  // Ваш товарный знак:
    let priceSearch = document.querySelector('.calculator-value__span-js-s1');  // Поиск:
    let priceBusiness  = document.querySelector('.calculator-value__span-js-s2');  // Подача заявки и ведение дел
    let priceEvidence = document.querySelector('.calculator-value__span-js-3');  // Получение свидетельства
    let priceTotal = document.querySelector('.calculator-value__span-js-s-4');  // Итого:

    let duesFiling = document.querySelector('.calculator-value__span-js-c-1');  // Подача заявки
    let duesCertificate  = document.querySelector('.calculator-value__span-js-c-2');  // Получение свидетельства
    let duesTotal = document.querySelector('.calculator-value__span-js-c-3');  // Итого:

    let allTotal = document.querySelector('.total-js');  // ВСЕГО ЗА РЕГИСТРАЦИЮ:

</script>






<style>
    .section-clicked {
        background-color: #5671B2;
        color: white;
    }
</style>