<?php
$services_mobile_boxes = get_field('services_mobile_box', 'option');
?>
<section class="order-form">
    <div class="container">
        <div class="form__content flex">
            <div class="form__part">
                <h2 class="titles">
                    заказать услугу патентного&nbsp;поверенного
                </h2>
                <p>
                    Равным образом консультация с широким активом требуют от нас анализа форм развития.
                </p>
                <img src="/wp-content/themes/patent/images/form_bg.svg" alt="">
            </div>
            <div class="form__part">
                <?php get_template_part('templates/forms/feedback'); ?>
            </div>
        </div>
    </div>
    <div class="form-bottom">
        <div class="container">
            <h2 class="titles">
                Услуги
            </h2>
            <?php if ($services_mobile_boxes): ?>
                    <ul class="form-bottom__list">
                        <?php foreach ($services_mobile_boxes as $services_mobile_box): ?>
                            <?php
                            $linked_post = $services_mobile_box['services_mobile']; // Получаем связанную запись
                            if ($linked_post): ?>
                                <li class="form-bottom__item">
                                    <a href="<?php echo get_permalink($linked_post->ID); ?>">
                                     <span><?php echo get_the_title($linked_post->ID); ?></span>
                                        <svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
