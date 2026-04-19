<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?= $data['name'] ? $data['name'] . ' купить в Донецке, Макеевке, ДНР по выгодной цене с доставкой или самовывозом, тел. ' . $this->set['phone'] . ($page ? ' - текущая страница ' . $page : '') : $this->set['meta_description'] . ', тел. ' . $this->set['phone'] . ($infoData['name'] ? ' - ' . $infoData['name'] : '') ?>">

	<meta name="keywords" content="<?= $data['name'] ? $data['name'] . ', ' : '' ?><?= $this->set['meta_keywords'] ?>">

	<meta property="og:title" content="<?= $data['name'] ?  $data['name'] . ' | ' . $this->set['meta_name'] : $this->set['meta_name'] . ' | ' . $this->set['meta_title'] . ($infoData['name'] ? ' | ' . $infoData['name'] : '') ?>">

	<meta property="og:description" content="<?= $data['name'] ? $data['name'] . ' заказать в Донецке, Макеевке, ДНР по выгодной цене с доставкой или самовывозом, тел. ' . $this->set['phone'] . ($page ? '. страница каталога - ' . $page : '') : $this->set['meta_og_description'] . ', тел. ' . $this->set['phone'] . ($infoData['name'] ? ' - ' . $infoData['name'] : '') ?>">

	<meta property="og:image" content="/favicon.svg">

	<link rel="icon" href="<?= SITE_URL ?>/favicon.svg" type="image/svg+xml">

	<title><?= $data['name'] ?  $data['name'] . ($page ? ' - страница ' . $page : '') . ' | ' . $this->set['meta_name'] : $this->set['meta_name'] . ' | ' . $this->set['meta_title'] . ($infoData['name'] ? ' | ' . $infoData['name'] : '') ?></title>

	<?php $this->getStyles() ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__wrapper">
				<div class="header__container _container">
					<div class="header__body">
						<div class="header__main">
							<a href="<?= $this->alias() ?>" class="header__logo"><img src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['name'] ?>"></a>
							<div class="header__menu menu">
								<nav class="menu__body">
									<ul data-spollers="768,max" class="menu__list">

										<?php if (!empty($this->menu['catalog'])) : ?>

											<li class="menu__item">
												<!-- <a href="<?= $this->alias('catalog') ?>" class="menu__link">Подарки</a> -->
												<button data-spoller type="button" class="menu__link">КАТАЛОГ</button>
												<!-- <button data-spoller type="button" class="menu__arrow _icon-arrow-down"></button> -->
												<ul class="menu__sub-list">

													<?php foreach ($this->menu['catalog'] as $item) : ?>

														<li class="menu__sub-item">
															<a href="<?= $this->alias(['catalog' => $item['alias']]) ?>" class="menu__sub-link"><?= $item['name'] ?></a>
														</li>

													<?php endforeach; ?>

												</ul>
											</li>

										<?php endif; ?>

										<?php if (!empty($this->phones)) : ?>

											<li class="menu__item">

												<button data-spoller type="button" class="menu__link-cat" style="margin-bottom: 0; cursor: auto; font-weight: 700; font-size: 22px; color: #ff0101">Позвонить</button>

												<ul class="menu__sub-list">

													<?php foreach ($this->phones as $phone) : ?>

														<li class="menu__sub-item">

															<a href="tel:<?= preg_replace('/[^+\d]/', '', $phone['name']) ?>" class="menu__sub-link"><?= $phone['name'] ?></a>

														</li>

													<?php endforeach; ?>

												</ul>

											</li>

										<?php endif; ?>

										<?php if (!empty($this->emails) || !empty($this->socials)) : ?>

											<li class="menu__item">

												<button data-spoller type="button" class="menu__link-cat" style="margin-bottom: 0; cursor: auto; font-weight: 700; font-size: 22px; color: #ff0101;">Написать</button>

												<ul class="menu__sub-list">

													<?php foreach ($this->socials as $item) : ?>

														<li class="menu__sub-item"><a href="<?= $this->alias($item['external_alias']) ?>" class="menu__sub-link"><?= $item['name'] ?></a></li>

													<?php endforeach; ?>

													<?php foreach ($this->emails as $email) : ?>

														<li class="menu__sub-item">

															<a href="mailto:<?= $email['name'] ?>" target="_blank" class="menu__sub-link"><?= $email['name'] ?></a>

														</li>

													<?php endforeach; ?>

												</ul>

											</li>

										<?php endif; ?>

										<?php if (!empty($this->menu['information'])) : ?>

											<?php foreach ($this->menu['information'] as $item) : ?>

												<li class=" menu__item">

													<a href="<?= $this->alias(['information' => $item['alias']]) ?>" class="menu__link"><?= $item['name'] ?></a>

												</li>

											<?php endforeach; ?>

										<?php endif; ?>

										<li class="menu__item"><a href="<?= $this->alias('contacts') ?>" class="menu__link">Контакты</a></li>

									</ul>
								</nav>
							</div>
						</div>

						<div class="header__search">
							<div class="search-form" id="searchButton">
								<button type="button" class="search-form__icon _icon-search"></button>
								<form action="#" class="search-form__item">
									<button class="search-form__btn _icon-search"></button>
									<input autocomplete="off" type="text" name="search" placeholder="найти..." class="search-form__input">
									<input type="hidden" name="search_table" value="goods">
									<div class="dropdown-content search_res">
										<!-- <a href="#">Ссылка 1</a>
										<a href="#">Ссылка 2</a>
										<a href="#">Ссылка 3</a> -->
									</div>
								</form>
							</div>
						</div>

						<button type="button" class="icon-menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</header>
		<main class="page">