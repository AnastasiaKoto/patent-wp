<section class="benefit">
    <div class="container">
        <h2 class="titles">Чем полезен Патентный поверенный именно мне?</h2>
        <div class="benefit__banner flex">
            <div class="banner__img">
                <img class="banner__img-main" src="/wp-content/themes/patent/images/benefit_banner.png" alt="">
                <img class="banner__img-mob" src="/wp-content/themes/patent/images/man-mob.png" alt="">
            </div>
            <div class="benefit-banner__content">
                <div class="big__title">
                    Цель  – привести дела клиента в полный порядок и поддерживать его
                </div>
                <p class="benefit-banner__text hidden-text">
                    Как патентный поверенный и юрист способен создать весь комплекс действий по защите иновационного бизнеса. Подготовлю договор об учреждении ООО, при котором партнеры будут эффективно взаимодействовать, мы зарегистрируем товарный знак, получим патент на устройство или вещество
                    из любой отрасли (техника, элктроника, проукты питания, стройматрерилы, медицина….).Получим патент на дизайн, составим авторское соглашение
                    с разделением авторского вклада.Защитим интересы компаниив на стадии досудебного урегулирвания и в суде,Проведем экспертзизу, проведем патентые исследования.Проведем инвентарицацию и оценку сущесвуюх объектов для создания эффективного портфеля объектов или при покупке бизнеса.Ваши дела всегда будут в порядке! 
                    Я привожу дела килентов в прядок и в сложных ситуациях нахожу примелемый выход.
                </p>
                <div class="benefit-card__more benefitBtn">Читать полностью</div>
                <div class="big__title">
                    Меня ценят за внимание к деталям, усердие и находчивость.
                </div>
            </div>
        </div>
        <?php
        $profs = get_field('profs');



        if($profs) {
            ?>
            <div class="benefit__list grid">
                <?php foreach($profs as $prof) { ?>
                    <div class="benefit__card flex">
                        <div class="benefit-card__img">
                            <img src="<?php echo $prof['img']; ?>" alt="">
                        </div>
                        <div class="benefit-card__txt">
                            <div class="title">
                                <?php echo $prof['title']; ?>
                            </div>
                            <p>
                                <?php echo $prof['title_descr']; ?>
                            </p>
                            <p class="benefit-card__descr hidden">
                                <?php echo $prof['txt']; ?>
                            </p>
                            <div class="benefit-card__more">Читать полностью</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="#" class="btn dark__btn serv_btn">
                Основные услуги
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 10.25L5.5 5.75L10 10.25" stroke="white" />
                    <path d="M1 5.25L5.5 0.75L10 5.25" stroke="white" />
                </svg>
            </a>
        <?php } ?>
    </div>
</section>
