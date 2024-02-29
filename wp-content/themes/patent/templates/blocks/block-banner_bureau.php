
<section class="banner <?=is_page(381)?'banner_office':'' ?>" >
    <div class="container">
        <div class="banner__content flex">
            <div class="banner__block">
                <div class="banner__offer">
                    <h1 class="titles main__title"><?php $banner_list_title = get_field('offers_list_title'); echo $banner_list_title ?></h1>
                    <?php

                    $banner_list = get_field('offers_list');
                    if($banner_list) {
                        ?>
                        <ul>
                            <?php foreach($banner_list as $point) { ?>
                                <li><?php echo $point['offers_point']; ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>

                </div>
                <?php
                if( have_rows('utp') ) { ?>
                    <div class="banner__list grid">
                        <?php
                        while( have_rows('utp') ) {
                            the_row();
                            $compet = get_sub_field('compet');
                            $operat = get_sub_field('operat');
                            $care = get_sub_field('care');
                            ?>
                            <?php if($compet) { ?>
                                <div class="banner__point">
                                    <div class="block__title">
                                        Компетентность
                                    </div>
                                    <p>
                                        <?php echo $compet; ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if($operat) { ?>
                                <div class="banner__point">
                                    <div class="block__title">
                                        Оперативность
                                    </div>
                                    <p>
                                        <?php echo $operat; ?>
                                    </p>
                                </div>
                            <?php } ?>
                            <?php if($care) { ?>
                                <div class="banner__point">
                                    <div class="block__title">
                                        Забота о деле клиента
                                    </div>
                                    <p>
                                        <?php echo $care; ?>
                                    </p>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="banner__block banner__block-main">
                <?php if(get_field('photo')) { ?>
                    <img src="<?php echo get_field('photo'); ?>" alt="">
                <?php } ?>
            </div>
            <div class="banner__block banner__block-mob">
                <!-- man-mob.png -->
                <img src="/wp-content/themes/patent/images/man-mob.png" alt="">
            </div>
        </div>
    </div>
</section>
