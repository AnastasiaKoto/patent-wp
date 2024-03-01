<section class="features">
    <div class="container">
        <h2 class="titles">Получите преимущество</h2>
        <?php
        $features = get_field('features');
        if($features) {
            ?>
            <div class="features__block grid">
                <?php foreach($features as $feature) { ?>
                    <div class="features-block__card">
                        <div class="small__titles">
                            <?php echo $feature['title']; ?>
                        </div>
                        <p>
                            <?php echo $feature['descr']; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="lead__block grid">
            <div class="lead__card">
                <div class="big__title">
                    общая консультация бесплатно
                </div>
                <?php
                $general_list = get_field('general', $post->ID);
                if($general_list) {
                    ?>
                    <ul>
                        <?php foreach($general_list as $point) { ?>
                            <li>
                                <?php echo $point['contain']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <a href="#callback-consult" class="btn dark__btn global-trigger">Получить консультацию</a>
            </div>
            <div class="lead__card">
                <div class="big__title">
                    консультации определяющие ваш вопрос
                </div>
                <?php
                $specialized_list = get_field('special', $post->ID);
                if($specialized_list) {
                    ?>
                    <ul>
                        <?php foreach($specialized_list as $point) { ?>
                            <li>
                                <?php echo $point['point']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <a href="#callback-application" class="btn dark__btn global-trigger">Оставить заявку</a>
            </div>
        </div>
    </div>
</section>



<!-- Global Popup -->
<div class="global-popup" id="callback-consult" style="display:none">
    <div class="global-popup__inner">
        <h2 class="global-popup__title">
            Получить консультацию
            патнетного поверенного
        </h2>
        <p>Равным образом консультация с широким активом требуют
            от нас анализа форм развития. </p>
        <!--заказать услугу патнетного поверенного -->
        <?php get_template_part('templates/forms/feedback', 'consult'); ?>
        <!--заказать услугу патнетного поверенного -->
    </div>
</div>




<!-- Global Popup -->
<div class="global-popup" id="callback-application" style="display:none">
    <div class="global-popup__inner">
        <h2 class="global-popup__title">
            Оставить заявку
        </h2>
        <p>Равным образом консультация с широким активом требуют
            от нас анализа форм развития. </p>
        <!--заказать услугу патнетного поверенного -->
        <?php get_template_part('templates/forms/feedback', 'application'); ?>
        <!--заказать услугу патнетного поверенного -->
    </div>
</div>
