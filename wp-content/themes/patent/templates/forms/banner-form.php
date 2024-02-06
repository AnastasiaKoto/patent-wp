<form class="" name="banner_form" id="banner_form" action="" method="post">
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
        <!-- <div class="patent-form__items">
            <div class="patent-form__items-btn"><span>Услуга</span>
                <svg width="14.707031" height="8.060547" viewBox="0 0 14.707 8.06055" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                    <defs/>
                    <path id="Vector 2" d="" fill="#1E1D25" fill-opacity="1.000000" fill-rule="nonzero"/>
                    <path id="Vector 2" d="M0.353516 0.353516L7.35352 7.35352L14.3535 0.353516" stroke="#1E1D25" stroke-opacity="1.000000" stroke-width="1.000000"/>
                </svg>
        </div> -->
            <?php 
                $args = array(
                    'post_type' => 'services',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                );
                $services = new WP_Query($args);
                if ($services ->have_posts()) {
                ?>
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
            <?php 
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="patent-form__inner-btn">
        <button type="submit" class="btn dark__btn patent-form__btn btn__submit">Заказать услугу</button>
        <label class="patent-form__custom-checkbox">
            <input type="checkbox" name="agree">
            <span class="patent-form__checkmark"></span>
            Я даю согласие на обработку моих персональных данных
        </label>
    </div>

</form>