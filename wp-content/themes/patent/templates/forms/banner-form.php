<form name="banner" id="banner" action="" method="POST">
    <div class="patent-form__inner">
        <div class="patent-form__items inp__wrapper">
            <input type="text" name="order_name" placeholder="Имя">
        </div>
        <div class="patent-form__items inp__wrapper">
            <input type="text" name="order_mail" placeholder="Email">
        </div>
        <div class="patent-form__items inp__wrapper">
            <input type="text" name="order_tel" placeholder="Телефон">
        </div>
        <?php 
            $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => 5,
            );
            $services = new WP_Query($args);
            if ($services ->have_posts()) { ?>
                <select name="order_service" id="order_service" class="order__inp">
                    <?php 
                    while ( $services->have_posts() ) {
                        $services->the_post();
                    ?>
                    <option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
                    <?php } ?>
                </select>
                <div class="order__custom-select">
                    <div class="order__default">Услуга</div>
                    <div class="order__services-list">
                        <ul class="flex">
                            <?php 
                            while ( $services->have_posts() ) {
                                $services->the_post();
                            ?>
                            <li data-value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
        ?>
    </div>
    <div class="patent-form__inner-btn">
        <button type="submit" class="btn dark__btn patent-form__btn btn__submit">Заказать услугу</button>
        <label class="patent-form__custom-checkbox">
            <input type="checkbox" name="agree">
            <span class="patent-form__checkmark"></span>
            Я даю согласие на обработку моих персональных данных
        </label>
    </div>
    <div class="global_err">Дождитесь отправки предыдущей формы!</div>
</form>