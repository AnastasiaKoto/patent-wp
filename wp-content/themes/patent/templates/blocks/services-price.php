<?php
$word_mark = get_field('word_mark');
$comby_mark = get_field('comby_mark');

$service_stages = get_field('service_stages');
$registration_period = get_field('registration_period');
$full_sum_example = get_field('full_sum_example');

$parties_desc = get_field('parties_desc');
?>


<?php if ( !empty($service_stages)): ?>
    <section class="prices">
        <div class="container">
            <h2 class="titles">стоимость </h2>
            <?php if (!empty($parties_desc)): ?>
            <div class="prices-subtitle">
                <h3 class="prices-subtitle__title">На стороне заявителя</h3>
                <div class="prices-subtitle__text"> <?php echo $parties_desc ?> </div>
            </div>
  <?php endif; ?>
            <ul class="prices__list">
                <?php
                if (!empty($service_stages)) {
                    $stage_number = 1;
                    foreach ($service_stages as $stage) {
                        ?>
                        <li class="prices__item">
                            <div class="prices-card">
                                <div class="prices-card__part1">
                                <span class="prices-card__stage-text   <?php echo $stage['selected_title'] ? 'prices-card__stage-text--color' : ''; ?>"><?php echo $stage_number++; ?> этап</span>

                                <ul class="prices-card__list">
                                    <?php
                                    foreach ($stage['stages_list'] as $substage) {
                                        ?>
                                        <li class="prices-card__item <?php echo $substage['selection'] ? 'yellow' : ''; ?>">
                                            <div class="prices-card__text"><?php echo $substage['title']; ?></div>

                                            <?php if ($substage['substage_check']) { ?>
                                                <span class="prices-card__text-radius"> <?php echo $substage['substage_price']; ?></span>
                                            <?php } ?>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                    
                                </ul>
                                </div>
                                <div class="prices-card__part2">
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
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>


            <div class="slide_count prices__slide_count">
            <span class=" slick-prev-price slick-prev-price_1">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 1L2 6L7 11" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
            </span>
                <span class="currentCoach">1</span><span class="slesh">/</span><span class="allCoach">6</span>
                <span class="slick-next-price slick-next-price_1">
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
