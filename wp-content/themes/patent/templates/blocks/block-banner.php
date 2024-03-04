<section class="banner">
    <div class="container">
        <div class="banner__content flex">
            <div class="banner__block">
                <div class="banner__offer">
                    <h1 class="titles main__title"><?php the_title(); ?></h1>
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
                    <a  href="#useful-popup" class="dark__btn btn banner__btn click_btn_banner global-trigger">Кому и чем могу быть полезен</a>
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
<!-- Global Popup -->
<div class="global-popup" id="useful-popup" style="display:none">
    <div class="global-popup__inner">
        <h2 class="global-popup__title">
            заказать звонок
            патнетного поверенного
        </h2>
        <p>Равным образом консультация с широким активом требуют
            от нас анализа форм развития. </p>
        <!--заказать услугу патнетного поверенного -->
        <?php get_template_part('templates/forms/feedback', 'usefull'); ?>
        <!--заказать услугу патнетного поверенного -->
    </div>
</div>
