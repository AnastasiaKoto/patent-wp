<?php
$service_field = get_field('service_offer');
$offer_field = get_field('offer_list');
?>


<section class="banner banner-services">
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
                <h1 class="title banner-services__title"><?php the_title(); ?></h1>
                <?php if (!empty($service_field)): ?>
                    <div class="banner-services__offerse">
                        <p><?php echo $service_field ?></p>
                        <a href="#" class="dark__btn btn banner__btn">Заказать услугу</a>
                    </div>
                <?php endif; ?>

                <?php if (!empty($offer_field)): ?>
                    <div class="banner__list grid">
                        <?php
                        foreach($offer_field as $item) {
                            ?>
                            <div class="banner__point banner-services__point">
                                <p><?php echo $item ?> </p>
                            </div>
                            <?php
                        }?>
                    </div>
                <?php endif; ?>
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
