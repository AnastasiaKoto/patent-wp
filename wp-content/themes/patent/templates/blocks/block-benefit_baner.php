
<?php
$benefit_banner_title = get_field('benefit-banner-title');
$benefit_banner_title1 = get_field('benefit-banner-title1');
$benefit_banner_content = get_field('benefit-banner-content');
$benefit_banner_title2 = get_field('benefit-banner-title2');
if($benefit_banner_title) {
    ?>
    <h2 class="titles"><?php echo $benefit_banner_title ?></h2>
    <div class="benefit__banner flex">
        <div class="banner__img">
            <img class="banner__img-main" src="/wp-content/themes/patent/images/benefit_banner.png" alt="">
            <img class="banner__img-mob" src="/wp-content/themes/patent/images/man-mob.png" alt="">
        </div>
        <div class="benefit-banner__content">
            <div class="big__title">
                <?php echo $benefit_banner_title1 ?>
            </div>
            <p class="benefit-banner__text hidden-text">
                <?php echo $benefit_banner_content ?>
            </p>
            <div class="benefit-card__more benefitBtn">Читать полностью</div>
            <div class="big__title">
                <?php echo $benefit_banner_title2  ?>
            </div>
        </div>
    </div>

<?php } ?>
