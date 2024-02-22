<?php
$payment_title = get_field('payment_title', 'option');
$payment_desc_wrapper = get_field('payment_desc_wrapper', 'option');
$payment_sale = get_field('payment_sale', 'option');
?>


<?php if (!empty($payment_title)): ?>
    <section class="discounts">
        <div class="container">
            <div class="discounts__wrapper">
                <div class="discounts__inner discounts__inner--sb">
                    <img class="discounts__img" src="/wp-content/themes/patent/images/payment-icon.svg" alt="">
                    <h3 class="discounts__title"><?php echo $payment_title ?> </h3>

                    <?php if (!empty($payment_desc_wrapper)) { ?>
                        <?php foreach ($payment_desc_wrapper as $items) { ?>
                            <p class="discounts__text"><span><?php echo $items['title']; ?></span> <?php echo $items['desc']; ?></p>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="discounts__inner discounts__inner-bg">
                    <div class="">
                        <h2 class="discounts__inner-title"> <?php echo $payment_sale ?></h2>
                        <a href="">Получить скидку</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
