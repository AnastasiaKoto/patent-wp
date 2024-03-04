<?php
/* Template Name: Главная
*/

get_header();
global $post;
?>

<main class="main">

    <!-- Основные услуги-->
    <?php get_template_part('templates/blocks/block', 'banner'); ?>
    <!-- Основные  услуги-->

    <!-- Основные услуги-->
    <?php get_template_part('templates/blocks/block', 'articles_basic'); ?>
    <!-- Основные  услуги-->

    <!--  Получите преимущество-->
    <?php get_template_part('templates/blocks/block', 'features'); ?>
    <!-- Получите преимущество-->

    <!--  кейсы клиентов-->
    <?php get_template_part('templates/blocks/block', 'cases'); ?>
    <!-- кейсы клиентов-->


    <!--  Цель – привести дела клиента-->
    <section class="benefit">
        <div class="container">

            <!--  Чем полезен Патентный поверенный именно мне? -->
            <?php get_template_part('templates/blocks/block', 'benefit_baner'); ?>
            <!-- Чем полезен Патентный поверенный именно мне?-->

            <?php
            $profs = get_field('profs');
            if($profs) {
                ?>
                <div class="benefit__list grid">
                    <?php foreach($profs as $prof) { ?>
                        <div class="benefit__card flex">
                            <div class="benefit-card__img">
                                <img src="<?php echo $prof['img']; ?>" alt="">
                            </div>
                            <div class="benefit-card__txt">
                                <div class="title">
                                    <?php echo $prof['title']; ?>
                                </div>
                                <p>
                                    <?php echo $prof['title_descr']; ?>
                                </p>
                                <p class="benefit-card__descr hidden">
                                    <?php echo $prof['txt']; ?>
                                </p>
                                <div class="benefit-card__more">Читать полностью</div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <a   class="btn dark__btn serv_btn click_btn_services-top">
                    Основные услуги
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10.25L5.5 5.75L10 10.25" stroke="white" />
                        <path d="M1 5.25L5.5 0.75L10 5.25" stroke="white" />
                    </svg>
                </a>
            <?php } ?>
        </div>
    </section>
    <!-- Цель – привести дела клиента-->



	<?php
	$branches = get_field('branches');
	if($branches) {
	?>
	<section class="branch">
		<div class="container">
			<h2 class="titles">Какую отрасль Вы представляете?</h2>
			<div class="benefit__list grid">
				<?php foreach($branches as $branch) { ?>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="<?php echo $branch['img']; ?>" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							<?php echo $branch['title']; ?>
						</div>
						<p class="benefit-card__descr hidden">
							<?php echo $branch['txt']; ?>
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php } ?>


    <!-- заказать услугу патнетного поверенного -->
    <?php get_template_part('templates/blocks/form', 'patent'); ?>
    <!--заказать услугу патнетного поверенного -->

    <!-- Патентный поверенный дает рекомендации -->
    <?php get_template_part('templates/blocks/block', 'articles_recomendation'); ?>
    <!-- Патентный поверенный дает рекомендации -->


    <!--Статьи  -->
    <?php get_template_part('templates/blocks/block', 'doubarticles'); ?>
    <!-- Статьи  -->

    <!--заказать услугу патнетного поверенного -->
    <?php get_template_part('templates/blocks/form', 'order'); ?>
    <!--заказать услугу патнетного поверенного -->



</main>
<?php get_footer(); ?>
