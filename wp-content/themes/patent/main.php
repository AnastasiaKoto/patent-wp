<?php  
/* Template Name: Главная
*/

get_header();
global $post;
?>
<main class="main">
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
						<a href="#" class="dark__btn btn banner__btn">Кому и чем могу быть полезен</a>
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
	<section class="services ">
		<div class="container">
			<h2 class="titles">основные услуги</h2>
			<?php 
			$args = array(
				'post_type' => 'services',
				'post_status' => 'publish',
				'posts_per_page' => 5,
			);
			$query = new WP_Query($args);
			if ($query ->have_posts()) {
			?>
			<div class="services__list grid">
				<?php 
				$count = 1;
                while ( $query->have_posts() ) {
                    $query->the_post();
                ?>
				<a href="<?php the_permalink(); ?>" class="services__card flex">
					<div class="number">
						<?php echo '0'. $count; ?>
					</div>
					<div class="services-card__content">
						<h3 class="small__titles">
							<?php the_title(); ?>
						</h3>
						<?php if(get_field('price', get_the_ID())) { ?>
						<div class="small__price">
							<?php echo get_field('price', get_the_ID()); ?>
						</div>
						<?php } ?>
						<?php if(get_field('price_descr', get_the_ID())) { ?>
						<p>
							<?php echo get_field('price_descr', get_the_ID()); ?>
						</p>
						<?php } ?>
					</div>
				</a>
				<?php $count++; } ?>
				<div class="services__card last__card last__card-hidden">
					<div class="services-card__content">
						<a href="#" class="btn dark__btn all__btn">Все услуги</a>
						<div class="small__price">
							Ознакомиться со всеми услугами
						</div>
					</div>
				</div>
			</div>
			<div class="services__card last__card last__card-mob">
					<div class="services-card__content">
						<a href="#" class="btn dark__btn all__btn">Все услуги</a>
						<div class="small__price">
							Ознакомиться со всеми услугами
						</div>
					</div>
				</div>
			<?php }
			wp_reset_postdata(); 
			?>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<h2 class="titles">Получите преимущество</h2>
			<?php 
			$features = get_field('features');
			if($features) {
			?>
			<div class="features__block grid">
				<?php foreach($features as $feature) { ?>
				<div class="features-block__card">
					<div class="small__titles">
						<?php echo $feature['title']; ?>
					</div>
					<p>
						<?php echo $feature['descr']; ?>
					</p>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
			<div class="lead__block grid">
				<div class="lead__card">
					<div class="big__title">
						общая консультация бесплатно
					</div>
					<?php 
					$general_list = get_field('general', $post->ID); 
					if($general_list) {
					?>
					<ul>
						<?php foreach($general_list as $point) { ?>
						<li>
							<?php echo $point['contain']; ?>
						</li>
						<?php } ?>
					</ul>
					<?php } ?>
					<a href="#" class="btn dark__btn">Получить консультацию</a>
				</div>
				<div class="lead__card">
					<div class="big__title">
						консультации определяющие ваш вопрос
					</div>
					<?php 
					$specialized_list = get_field('special', $post->ID); 
					if($specialized_list) {
					?>
					<ul>
						<?php foreach($specialized_list as $point) { ?>
						<li>
							<?php echo $point['point']; ?>
						</li>
						<?php } ?>
					</ul>
					<?php } ?>
					<a href="#" class="btn dark__btn">Получить консультацию</a>
				</div>
			</div>
		</div>
	</section>
	<?php 
		$args = array(
			'post_type' => 'keyses',
			'post_status' => 'publish',
			'posts_per_page' => -1,
		);
		$keyses = new WP_Query($args);
		if ($keyses->have_posts()) {
	?>
	<section class="keyses">
		<div class="container">
			<h2 class="titles">кейсы клиентов</h2>
			<div class="tabs keyses__tabs">
				<ul class="tabs__caption">
					<?php 
					$count_tab = 1;
					while ( $keyses->have_posts() ) {
						$keyses->the_post();
					?>
					<li <?php if($count_tab == 1) { ?> class="active" <?php } ?>><?php the_title(); ?></li>
					<?php $count_tab++;  } ?>
				</ul>
				<?php 
				$count_keys = 1;
				while ( $keyses->have_posts() ) {
					$keyses->the_post();
				?>
				<div class="tabs__content <?php if($count_keys == 1) { ?> active <?php } ?>">
					<?php 
					$keyses_field = get_field('servise_keyses', get_the_ID());
					if($keyses_field) {
					?>
					<div class="keyses__slider slick-slider">
						<?php foreach($keyses_field as $keys) { ?>
						<div class="keyses-slide flex">
							<div class="keyses__left">
								<img src="<?php echo $keys['logo']; ?>" alt="">
								<div class="keys__descr">
									<?php echo $keys['short_descr']; ?>
								</div>
							</div>
							<div class="keyses__right">
								<div class="title">
									Задача
								</div>
								<div class="descr">
									<?php echo $keys['task']; ?>
								</div>
								<div class="title">
									что сделали
								</div>
								<div class="descr">
									<?php echo $keys['result']; ?>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<?php $count_keys++; } ?>
			</div>
		</div>
	</section>
	<?php } 
	wp_reset_postdata(); 
	?>
	<section class="benefit">
		<div class="container">
			<h2 class="titles">Чем полезен Патентный поверенный именно мне?</h2>
			<div class="benefit__banner flex">
				<div class="banner__img">
					<img class="banner__img-main" src="/wp-content/themes/patent/images/benefit_banner.png" alt="">
					<img class="banner__img-mob" src="/wp-content/themes/patent/images/man-mob.png" alt="">
				</div>
				<div class="benefit-banner__content">
					<div class="big__title">
						Цель  – привести дела клиента в полный порядок и поддерживать его
					</div>
					<p class="benefit-banner__text hidden-text">
						Как патентный поверенный и юрист способен создать весь комплекс действий по защите иновационного бизнеса. Подготовлю договор об учреждении ООО, при котором партнеры будут эффективно взаимодействовать, мы зарегистрируем товарный знак, получим патент на устройство или вещество 
						из любой отрасли (техника, элктроника, проукты питания, стройматрерилы, медицина….).Получим патент на дизайн, составим авторское соглашение 
						с разделением авторского вклада.Защитим интересы компаниив на стадии досудебного урегулирвания и в суде,Проведем экспертзизу, проведем патентые исследования.Проведем инвентарицацию и оценку сущесвуюх объектов для создания эффективного портфеля объектов или при покупке бизнеса.Ваши дела всегда будут в порядке! 
						Я привожу дела килентов в прядок и в сложных ситуациях нахожу примелемый выход.
					</p>
					<div class="benefit-card__more benefitBtn">Читать полностью</div>
					<div class="big__title">
						Меня ценят за внимание к деталям, усердие и находчивость.
					</div>
				</div>
			</div>
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
			<a href="#" class="btn dark__btn serv_btn">Основные услуги</a>
			<?php } ?>
		</div>
	</section>
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
	<section class="patent-form">
		<div class="container">
			<h2 class="titles patent-form-titles">
				заказать услугу патнетного поверенного
			</h2>
			<?php get_template_part('templates/forms/banner', 'form'); ?>
		</div>
	</section>
	<?php $recomendations = get_field('recomend');
	if($recomendations) { 
	?>
	<section class="articles">
		<div class="container">
			<div class="articles__block">
				<h2 class="titles">
					Патентный поверенный дает рекомендации, как построить инновационную компанию.
				</h2>
				<div class="tabs articles__tabs flex">
					<ul class="tabs__caption">
						<?php 
						$r_count = 1;
						foreach($recomendations as $recomendation) {
						?>
						<li <?php if($r_count == 1) { ?> class="active" <?php } ?>>Раздел <?php echo $r_count; ?></li>
						<?php $r_count++; } ?>
					</ul>
					<?php 
						$r2_count = 1;
						foreach($recomendations as $recomendation) {
							$stages = $recomendation['stages'];
					?>
					<div class="tabs__content article__content <?php if($r2_count == 1) { ?> active <?php } ?>">
						<div class="article__subtitle">
							раздел <?php echo $r2_count; ?>
						</div>
						<?php if($recomendation['title']) { ?>
						<div class="title">
							<?php echo $recomendation['title']; ?>
						</div>
						<?php } ?>
						<?php if($recomendation['txt']) { ?>
						<div class="article__txt">
							<?php echo $recomendation['txt']; ?>
						</div>
						<?php } ?>
						<?php if($stages) { 
							$count_inside = 1;
						?>
						<div class="article__content-list flex">
							<?php foreach($stages as $stage) { ?>
							<div class="article__content-list_point">
								<div class="art__count"><div><?php echo $count_inside; ?></div></div>
								<div class="icon">
									<img src="<?php echo $stage['img']; ?>" alt="">
								</div>
								<div class="sm__title"><?php echo $stage['stage_title']; ?></div>
							</div>
							<?php $count_inside++; } ?>
						</div>
						<?php } ?>
						<?php if($recomendation['txt2']) { ?>
						<div class="article__txt">
							<?php echo $recomendation['txt2']; ?>
						</div>
						<?php } ?>
						<?php  
						if($recomendation['show_rec']) {
							$rec = $recomendation['rec_group'];
						?>
						<!-- тут совет -->
						<div>
							<div>СОВЕТ</div>
							<div><?php // echo $rec['rec_txt']; ?> 
								<p>
									ЗДЕСЬ ВЫ МОЖЕТЕ ПРИГЛАСИТЬ МЕНЯ В КАЧЕСТВЕ ЭКСПЕРТА, ПОДТВЕРЖДАЮЩЕГО ВОЗМОЖНОСТЬ ПОЛУЧЕНИЯ ПАТЕНТА, ЗАЩИЩАЮЩЕГО ПРОДУКТ
								</p>
								<p>
									Если вы оказались на этом этапе без предыдущего моего участия, то рекомедуется проработать ситуацию с самого начала и проверить все данные в отношении существенных приззнаков и формулы патента в целом.
								</p>
							</div>
						</div>
						<!-- конец совета -->
						<?php 
						}
						?>
					</div>
					<?php $r2_count++; } ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<section class="doubarticles">
		<div class="container">
			<h2 class="titles">
				Статьи
			</h2>
			<div class="newsblock flex">
			<?php 
				$args = array(
					'post_type' => 'articles',
					'post_status' => 'publish',
					'posts_per_page' => 2,
				);
				$articles = new WP_Query($args);
				if ($articles->have_posts()) {
			?>
				<div class="newsblock__block">
					<div class="subtitle">
						Это важно иметь в виду
					</div>
					<div class="newsblock__list flex">
						<?php 
						while ( $articles->have_posts() ) {
							$articles->the_post();
							$thumbnail_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
						?>
						<a href="<?php echo get_permalink(); ?>" class="newsblock__card flex">
							<div class="newsblock__img">
								<img src="<?php echo $image_url; ?>" alt="">
							</div>
							<div class="newstitle">
								<?php the_title(); ?>
							</div>
							<p>
								<?php echo get_field('artic_short-descr', get_the_ID()); ?>
							</p>
						</a>
						<?php } ?>
					</div>
				</div>
				<?php 
				} 
				wp_reset_postdata();
				?>
				<?php 
					$args = array(
						'post_type' => 'news',
						'post_status' => 'publish',
						'posts_per_page' => 1,
					);
					$news = new WP_Query($args);
					if ($news->have_posts()) {
				?>
				<div class="newsblock__block">
					<div class="subtitle">
						Вам может быть интересно
					</div>
					<div class="newsblock__list flex">
						<?php 
						while ( $news->have_posts() ) {
							$news->the_post();
							$thumbnail_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
						?>
						<a href="<?php echo get_permalink(); ?>" class="newsblock__card flex">
							<div class="newsblock__img">
								<img src="<?php echo $image_url; ?>" alt="">
							</div>
							<div class="newstitle">
								<?php echo the_title(); ?>
							</div>
							<p>
								<?php echo get_field('news_short-descr', get_the_ID()); ?>
							</p>
						</a>
						<?php } ?>
					</div>
				</div>
				<?php 
				} 
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<section class="order-form">
		<div class="container">
			<div class="form__content flex">
				<div class="form__part">
					<h2 class="titles">
						заказать услугу патнетного&nbsp;поверенного
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
	</section>
</main>
<?php get_footer(); ?>