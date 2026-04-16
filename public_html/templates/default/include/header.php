<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="stylesheet" href="css/style.min.css"> -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="<?= $this->set['description'] ?>">
	<meta name="keywords" content="<?= $this->set['keywords'] ?>">

	<meta property="og:title" content="<?= $this->set['name'] ?>" />
	<meta property="og:description" content="<?= $this->set['description'] ?>" />
	<meta property="og:image" content="<?= $this->img($this->set['main_img']) ?>" />

	<link rel="icon" href="https://dss-krovlya.ru/favicon.ico" type="image/x-icon">



	<title><?= $this->set['name'] ?></title>

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