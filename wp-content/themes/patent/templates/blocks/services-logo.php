<?php
$logo_title = get_field('logo_title', 'option');
$logo_desc = get_field('logo_desc', 'option');
$logo_slider = get_field('logo_slider', 'option');
?>


<?php if (!empty($logo_title)): ?>

    <div class="points-slider">
        <div class="points-slider__inner">
            <h3 class="points-slider__title"><?php echo $logo_title ?></h3>
            <p class="points-slider__text"><?php echo $logo_desc ?></p>
        </div>
        <div class="points-slider__slides">
            <div class="points-slider__list">
                <?php if (!empty($logo_slider)) { ?>
                    <?php
                    foreach ($logo_slider as $slide) {
                        $image_url = $slide['slide']['url'];
                        $image_title = $slide['slide']['title'];
                        ?>
                        <div class="points-slider__item">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_title; ?>">
                        </div>

                        <?php
                    }
                    ?>
                <?php } ?>

            </div>
            <div class="points-arrows">
                <span class="points-arrows__item points-slider__arrows__end"> < </span>
                <span class="points-arrows__item points-slider__arrows__next"> > </span>
            </div>
        </div>
    </div>
<?php endif; ?>
