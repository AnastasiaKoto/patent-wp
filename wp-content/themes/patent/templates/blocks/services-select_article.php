<?php
$services_reg_boxes = get_field('services_reg_box');
$services_after_boxes = get_field('services_after_box');
$services_reg_box_field = get_field_object('services_reg_box');
$services_after_box_field = get_field_object('services_after_box');
?>



<?php if ( !empty($services_reg_boxes) || !empty($services_after_boxes)): ?>
    <section class="what">
        <div class="container">
            <?php if ($services_reg_boxes): ?>
                <h2 class="titles"> <?php echo   $services_reg_box_field['label'] ?></h2>
                <ul class="what__list">
                    <?php foreach ($services_reg_boxes as $services_reg_box): ?>
                        <?php
                        $linked_post = $services_reg_box['services_reg']; // Получаем связанную запись
                        if ($linked_post): ?>
                            <li class="what__item">
                                <a href="<?php echo get_permalink($linked_post->ID); ?>">
                                    <h3 class="what__title"><?php echo get_the_title($linked_post->ID); ?></h3>
                                    <!--     <div class="what__text--min">(адрес, лого, )</div>-->
                                    <div class="what__text"><?php echo get_field('price', $linked_post->ID); ?></div>
                                    <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if ($services_after_boxes): ?>
                <div class="what__container">
                    <div class="what__wrapper--title">
                        <h2 class="titles">ОТДЕЛЬНЫЕ УСЛУГИ</h2>
                        <span><?php echo   $services_after_box_field['label'] ?></span>
                    </div>

                    <ul class="what__list">
                        <?php foreach ($services_after_boxes as $services_after_box): ?>
                            <?php
                            $linked_post = $services_after_box['services_after']; // Получаем связанную запись
                            if ($linked_post): ?>
                                <li class="what__item">
                                    <a href="<?php echo get_permalink($linked_post->ID); ?>">
                                        <h3 class="what__title"><?php echo get_the_title($linked_post->ID); ?></h3>
                                        <!--     <div class="what__text--min">(адрес, лого, )</div>-->
                                        <div class="what__text"><?php echo get_field('price', $linked_post->ID); ?></div>
                                        <svg class="what__svg" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>


        </div>
    </section>
<?php endif; ?>
