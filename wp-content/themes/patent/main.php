<?php  
/* Template Name: Главная
*/

get_header();
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
				<div class="banner__block">
					<?php if(get_field('photo')) { ?>
					<img src="<?php echo get_field('photo'); ?>" alt="">
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="services">
		<div class="container">
			<h2 class="titles">основные услуги</h2>
			<div class="services__list grid">
				<a href="#" class="services__card flex">
					<div class="number">
						01
					</div>
					<div class="services-card__content">
						<h3 class="small__titles">
							Регистрация товарного знака
						</h3>
						<div class="small__price">
							от 15 000 ₽ или от 55 400 ₽
						</div>
						<p>
							С учетом пошлин
						</p>
					</div>
				</a>
				<a href="#" class="services__card flex">
					<div class="number">
						01
					</div>
					<div class="services-card__content">
						<h3 class="small__titles">
							Регистрация товарного знака
						</h3>
						<div class="small__price">
							от 15 000 ₽ или от 55 400 ₽
						</div>
						<p>
							С учетом пошлин
						</p>
					</div>
				</a>
				<a href="#" class="services__card flex">
					<div class="number">
						01
					</div>
					<div class="services-card__content">
						<h3 class="small__titles">
							Регистрация товарного знака
						</h3>
						<div class="small__price">
							от 15 000 ₽ или от 55 400 ₽
						</div>
						<p>
							С учетом пошлин
						</p>
					</div>
				</a>
				<a href="#" class="services__card flex">
					<div class="number">
						01
					</div>
					<div class="services-card__content">
						<h3 class="small__titles">
							Регистрация товарного знака
						</h3>
						<div class="small__price">
							от 15 000 ₽ или от 55 400 ₽
						</div>
						<p>
							С учетом пошлин
						</p>
					</div>
				</a>
				<a href="#" class="services__card flex">
					<div class="number">
						01
					</div>
					<div class="services-card__content">
						<h3 class="small__titles">
							Регистрация товарного знака
						</h3>
						<div class="small__price">
							от 15 000 ₽ или от 55 400 ₽
						</div>
						<p>
							С учетом пошлин
						</p>
					</div>
				</a>
				<div class="services__card last__card">
					<div class="services-card__content">
						<a href="#" class="btn dark__btn all__btn">Все услуги</a>
						<div class="small__price">
							Ознакомиться со всеми услугами
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<h2 class="titles">Получите преимущество</h2>
			<div class="features__block grid">
				<div class="features-block__card">
					<div class="small__titles">
						детальная аналитика
					</div>
					<p>
						гарантирует успех дела
					</p>
				</div>
				<div class="features-block__card">
					<div class="small__titles">
						детальная аналитика
					</div>
					<p>
						гарантирует успех дела
					</p>
				</div>
				<div class="features-block__card">
					<div class="small__titles">
						детальная аналитика
					</div>
					<p>
						гарантирует успех дела
					</p>
				</div>
				<div class="features-block__card">
					<div class="small__titles">
						детальная аналитика
					</div>
					<p>
						гарантирует успех дела
					</p>
				</div>
			</div>
			<div class="lead__block grid">
				<div class="lead__card">
					<div class="big__title">
						общая консультация бесплатно
					</div>
					<ul>
						<li>
							Вопросы по процедурам регистрации
						</li>
						<li>
							Вопросы по прогнозу регистрации
						</li>
						<li>
							Все вопросы, которые у нас вызывают обеспокоенность
						</li>
						<li>
							Все вопросы, которые у нас вызывают обеспокоенность
						</li>
						<li>
							Все вопросы, которые у нас вызывают обеспокоенность
						</li>
						<li>
							Все вопросы, которые у нас вызывают обеспокоенность
						</li>
					</ul>
					<a href="#" class="btn dark__btn">Получить консультацию</a>
				</div>
				<div class="lead__card">
					<div class="big__title">
						общая консультация бесплатно
					</div>
					<ul>
						<li>
							Вопросы по процедурам регистрации
						</li>
						<li>
							Вопросы по прогнозу регистрации
						</li>
						<li>
							Все вопросы, которые у нас вызывают обеспокоенность
						</li>
					</ul>
					<a href="#" class="btn dark__btn">Получить консультацию</a>
				</div>
			</div>
		</div>
	</section>
	<section class="keyses">
		<div class="container">
			<h2 class="titles">кейсы клиентов</h2>
			<div class="tabs keyses__tabs">
				<ul class="tabs__caption">
					<li class="active">Наименование услуги</li>
					<li>Наименование услуги</li>
				</ul>
				<div class="tabs__content active">
					<div class="keyses__slider slick-slider">
						<div class="keyses-slide flex">
							<div class="keyses__left">
								<img src="/images/keys__logo.svg" alt="">
								<div class="keys__descr">
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и мест
								</div>
							</div>
							<div class="keyses__right">
								<div class="title">
									Задача 111
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
								<div class="title">
									что сделали
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
							</div>
						</div>
						<div class="keyses-slide flex">
							<div class="keyses__left">
								<img src="/images/keys__logo.svg" alt="">
								<div class="keys__descr">
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и мест
								</div>
							</div>
							<div class="keyses__right">
								<div class="title">
									Задача
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
								<div class="title">
									что сделали
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs__content">
					<div class="keyses__slider slick-slider">
						<div class="keyses-slide flex">
							<div class="keyses__left">
								<img src="/images/keys__logo.svg" alt="">
								<div class="keys__descr">
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и мест
								</div>
							</div>
							<div class="keyses__right">
								<div class="title">
									Задача
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
								<div class="title">
									что сделали
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
							</div>
						</div>
						<div class="keyses-slide flex">
							<div class="keyses__left">
								<img src="/images/keys__logo.svg" alt="">
								<div class="keys__descr">
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и мест
								</div>
							</div>
							<div class="keyses__right">
								<div class="title">
									Задача
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
								<div class="title">
									что сделали
								</div>
								<p>
									Равным образом консультация с широким активом требуют от нас анализа форм развития. Таким образом рамки и место обучения кадров играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны постоянный количественный рост и сфера нашей активности играет важную роль в формировании существенных финансовых и административных условий. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="benefit">
		<div class="container">
			<h2 class="titles">Чем полезен Патентный поверенный именно мне?</h2>
			<div class="benefit__banner flex">
				<div class="banner__img">
					<img src="/images/benefit_banner.png" alt="">
				</div>
				<div class="benefit-banner__content">
					<div class="big__title">
						Цель  – привести дела клиента в полный порядок и поддерживать его
					</div>
					<p>
						Как патентный поверенный и юрист способен создать весь комплекс действий по защите иновационного бизнеса. Подготовлю договор об учреждении ООО, при котором партнеры будут эффективно взаимодействовать, мы зарегистрируем товарный знак, получим патент на устройство или вещество 
						из любой отрасли (техника, элктроника, проукты питания, стройматрерилы, медицина….).Получим патент на дизайн, составим авторское соглашение 
						с разделением авторского вклада.Защитим интересы компаниив на стадии досудебного урегулирвания и в суде,Проведем экспертзизу, проведем патентые исследования.Проведем инвентарицацию и оценку сущесвуюх объектов для создания эффективного портфеля объектов или при покупке бизнеса.Ваши дела всегда будут в порядке! 
						Я привожу дела килентов в прядок и в сложных ситуациях нахожу примелемый выход.
					</p>
					<div class="big__title">
						Меня ценят за внимание к деталям, усердие и находчивость.
					</div>
				</div>
			</div>
			<div class="benefit__list grid">
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/benef_cardimg.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Вы предприниматель
						</div>
						<p>
							(владелец компании)
						</p>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки, насколько она будет защищать (страховать) проинвестированные средства. СУТЬ  дела – привести дела клиента в полный порядок и поддерживать его при смене менеджмента. Вы получите видение в стратегическом плане
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/benef_cardimg.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Вы предприниматель
						</div>
						<p>
							(владелец компании)
						</p>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки, насколько она будет защищать (страховать) проинвестированные средства. СУТЬ  дела – привести дела клиента в полный порядок и поддерживать его при смене менеджмента. Вы получите видение в стратегическом плане
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/benef_cardimg.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Вы предприниматель
						</div>
						<p>
							(владелец компании)
						</p>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки, насколько она будет защищать (страховать) проинвестированные средства. СУТЬ  дела – привести дела клиента в полный порядок и поддерживать его при смене менеджмента. Вы получите видение в стратегическом плане
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/benef_cardimg.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Вы предприниматель
						</div>
						<p>
							(владелец компании)
						</p>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки, насколько она будет защищать (страховать) проинвестированные средства. СУТЬ  дела – привести дела клиента в полный порядок и поддерживать его при смене менеджмента. Вы получите видение в стратегическом плане
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
			</div>
			<a href="#" class="btn dark__btn serv_btn">Основные услуги</a>
		</div>
	</section>
	<section class="branch">
		<div class="container">
			<h2 class="titles">Какую отрасль Вы представляете?</h2>
			<div class="benefit__list grid">
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/dashicons_money.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Венчурный фонд
						</div>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки...
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/dashicons_money.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Венчурный фонд
						</div>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки...
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/dashicons_money.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Венчурный фонд
						</div>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки...
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
				<div class="benefit__card flex">
					<div class="benefit-card__img">
						<img src="/images/dashicons_money.svg" alt="">
					</div>
					<div class="benefit-card__txt">
						<div class="title">
							Венчурный фонд
						</div>
						<p class="benefit-card__descr hidden">
							С патентным поверенным будет полезно изначально обсудить стратегию развития компании в отношении патентования предполагаемой продукции.Мы сможем прояснить невидимые зоны и поставить задачи в правильную очередность.Например, определим степень защиты патентуемой разработки...
						</p>
						<div class="benefit-card__more">Читать полностью</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="patent-form">
		<div class="container">
			<h2 class="titles">
				заказать услугу патнетного поверенного
			</h2>
		</div>
	</section>
	<section class="articles">
		<div class="container">
			<div class="articles__block">
				<h2 class="titles">
					Патентный поверенный дает рекомендации, как построить инновационную компанию.
				</h2>
				<div class="tabs articles__tabs flex">
					<ul class="tabs__caption">
						<li class="active">Раздел 1</li>
						<li>Раздел 2</li>
					</ul>
					<div class="tabs__content article__content active">
						<div class="article__subtitle">
							раздел 111
						</div>
						<div class="title">
							От мысли к…..идее
						</div>
						<div class="article__txt">
							<p>
								Мысль ( мысль преврщается в идею) – (из идеи появлются очертания конструкции) – общее понимание проходит к проработке деталей и убеждению в работе устройства/Далее следует подвергнуть идею патентонм анализу на предмет надежной защитыЗатем построить модель коммерциализации продукта
							</p>
							<p>
								Классификация идей
							</p>
							<p>
								Мысль – формируется идея. В этом случае мы вместе можем довольно быстро представить перспективы идеи по следующей цепочке, а) возможность ее реализации по шкале**** б) вероятность ее привлекательности и коммерциализации с) потенциальная патентоспособность. Таким образом каждая ваша мысль в предпринимательсвком плане будет быстро обработана и систематизирована. Вы будете быстро принимать решения/
							</p>
						</div>
						<div class="article__content-list flex">
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
						</div>
					</div>
					<div class="tabs__content article__content">
						<div class="article__subtitle">
							раздел 2
						</div>
						<div class="title">
							От мысли к…..идее
						</div>
						<div class="article__txt">
							<p>
								Мысль ( мысль преврщается в идею) – (из идеи появлются очертания конструкции) – общее понимание проходит к проработке деталей и убеждению в работе устройства/Далее следует подвергнуть идею патентонм анализу на предмет надежной защитыЗатем построить модель коммерциализации продукта
							</p>
							<p>
								Классификация идей
							</p>
							<p>
								Мысль – формируется идея. В этом случае мы вместе можем довольно быстро представить перспективы идеи по следующей цепочке, а) возможность ее реализации по шкале**** б) вероятность ее привлекательности и коммерциализации с) потенциальная патентоспособность. Таким образом каждая ваша мысль в предпринимательсвком плане будет быстро обработана и систематизирована. Вы будете быстро принимать решения/
							</p>
						</div>
						<div class="article__content-list flex">
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
							<div class="article__content-list_point">
								<div class="art__count"><div>1</div></div>
								<div class="icon">
									<img src="/images/icon1.svg" alt="">
								</div>
								<div class="sm__title">Идея</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="doubarticles">
		<div class="container">
			<h2 class="titles">
				Статьи
			</h2>
			<div class="newsblock flex">
				<div class="newsblock__block">
					<div class="subtitle">
						Это важно иметь в виду
					</div>
					<div class="newsblock__list flex">
						<div class="newsblock__card flex">
							<div class="newsblock__img">
								<img src="/images/newsblock.png" alt="">
							</div>
							<div class="newstitle">
								качество поиска товарных знаков исключает риски отказа регистрации
							</div>
							<p>
								Равным образом консультация с широким активом требуют от нас анализа форм...
							</p>
						</div>
						<div class="newsblock__card flex">
							<div class="newsblock__img">
								<img src="/images/newsblock.png" alt="">
							</div>
							<div class="newstitle">
								качество поиска товарных знаков исключает риски отказа регистрации
							</div>
							<p>
								Равным образом консультация с широким активом требуют от нас анализа форм...
							</p>
						</div>
					</div>
				</div>
				<div class="newsblock__block">
					<div class="subtitle">
						Вам может быть интересно
					</div>
					<div class="newsblock__list flex">
						<div class="newsblock__card flex">
							<div class="newsblock__img">
								<img src="/images/newsblock.png" alt="">
							</div>
							<div class="newstitle">
								качество поиска товарных знаков исключает риски отказа регистрации
							</div>
							<p>
								Равным образом консультация с широким активом требуют от нас анализа форм...
							</p>
						</div>
					</div>
				</div>
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
					<img src="/images/form_bg.svg" alt="">
				</div>
				<div class="form__part">
					<form action="" method="post" id="order">
						<div class="form__wrapper flex">
							<input type="text" name="order_name" id="order_name" class="order__inp" placeholder="Имя">
							<input type="tel" name="order_tel" id="order_tel" class="order__inp" placeholder="Телефон">
							<input type="email" name="order_mail" id="order_mail" class="order__inp" placeholder="Email">
							<select name="order_service" id="order_service" class="order__inp">
								<option value="1">Такая-то услуга</option>
								<option value="2">Такая-то услуга 2</option>
							</select>
							<div class="order__custom-select">
								<div class="order__default">Услуга</div>
								<div class="order__services-list">
									<ul class="flex">
										<li data-value="1">Такая-то услуга</li>
										<li data-value="2">Такая-то услуга 2</li>
									</ul>
								</div>
							</div>
							<button class="btn dark__btn btn__submit" type="submit">Заказать услугу</button>
							<div class="agree__group flex">
								<input type="checkbox" name="agree" id="agree">
								<span class="custom__check"></span>
								<label for="agree" class="personal">
									Я даю согласие на&nbsp;обработку&nbsp;моих&nbsp;персональных&nbsp;данных
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>