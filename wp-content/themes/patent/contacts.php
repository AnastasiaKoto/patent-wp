<?php
/* Template Name: Контакты
*/

get_header();
?>
<main class="main">
	<?php get_template_part('templates/blocks/titles', 'wrapper'); ?>
    <section class="contacts">
        <div class="container">
            <div class="contacts__content flex">
                <div class="contacts__content-block">
                    <?php if(get_field('address', 'option')) { ?>
                        <div class="contacts__content-group">
                            <div>Адрес:</div>
                            <p><?php echo get_field('address', 'option'); ?></p>
                        </div>
                    <?php } ?>
                    <?php if(get_field('header_mail', 'option')) { ?>
                        <div class="contacts__content-group">
                            <div>E-mail:</div>
                            <a href="<?php echo get_field('header_mail', 'option'); ?>"><?php echo get_field('header_mail', 'option'); ?></a>
                        </div>
                    <?php } ?>
                    <?php
                    if( have_rows('header_tel', 'option') ) {
                        while( have_rows('header_tel', 'option') ) {
                            the_row();
                            $tel_link = get_sub_field('header-tel_link');
                            $tel_tel = get_sub_field('header-tel_tel');
                    ?>
                        <div class="contacts__content-group">
                            <div>Телефон:</div>
                            <a href="tel:<?php echo $tel_link; ?>"><?php echo $tel_tel; ?></a>
                        </div>
                    <?php } } ?>
                    <?php if(get_field('work_time', 'option')) { ?>
                        <div class="contacts__content-group time_desk">
                            <div>Время работы:</div>
                            <p><?php echo get_field('work_time', 'option'); ?></p>
                        </div>
                    <?php } ?>
                    <?php if(get_field('mb_time-work', 'option')) { ?>
                        <div class="contacts__content-group time_mob">
                            <div>Время работы:</div>
                            <p><?php echo get_field('mb_time-work', 'option'); ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="contacts__content-block">
                    <h2 class="titles">заказать услугу патентного поверенного</h2>
                    <p>
                    Равным образом консультация с широким активом требуют от нас анализа форм развития.
                    </p>
                    <?php get_template_part('templates/forms/feedback'); ?>
                </div>
            </div>
        </div>
    </section>
<?php if(get_field('map', 'option')) { ?>
    <section class="map">
        <?php echo get_field('map', 'option'); ?>
    </section>
<?php } ?>
<?php get_template_part('templates/blocks/services', 'block'); ?>
</main>
<?php get_footer(); ?>
