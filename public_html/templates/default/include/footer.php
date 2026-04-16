</main>
<footer class="footer">
	<div class="footer__container _container">
		<div class="footer__body">
			<div class="footer__main">
				<a href="<?= $this->alias() ?>" class="footer__logo _footer-title"><?= $this->set['name'] ?></a>
				<div class="footer__text"><?= $this->set['short_content'] ?></div>
				<div class="footer__contacts contacts-footer">


					<?php if (!empty($this->address)) : ?>

						<ul>

							<?php foreach ($this->address as $adres) : ?>

								<li>

									<div class="contacts-footer__item _icon-location"><?= $adres['name'] ?></div>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

					<?php if (!empty($this->phones)) : ?>

						<ul>

							<?php foreach ($this->phones as $phone) : ?>

								<li>

									<a href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['name']) ?>" class="contacts-footer__item _icon-phone"><?= $phone['name'] ?></a>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

					<?php if (!empty($this->emails)) : ?>

						<ul>

							<?php foreach ($this->emails as $email) : ?>

								<li>

									<a href="mailto:<?= $email['name'] ?>" target="_blank" class="contacts-footer__item"><?= $email['name'] ?></a>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

				</div>
			</div>
			<div data-spollers="767,max" class="footer__menu menu-footer">
				<div class="menu-footer__column">

					<?php if (!empty($this->menu['catalog'])) : ?>

						<button type="button" data-spoller class="menu-footer__title _footer-title">Продукция</button>
						<ul class="menu-footer__list">



							<?php foreach ($this->menu['catalog'] as $item) : ?>

								<li><a href="<?= $this->alias(['catalog' => $item['alias']]) ?>" class="menu-footer__link"><?= $item['name'] ?></a></li>

							<?php endforeach; ?>


						</ul>

					<?php endif; ?>

				</div>
				<div class="menu-footer__column">

					<?php if (!empty($this->menu['information-bottom'])) : ?>

						<button type="button" data-spoller class="menu-footer__title _footer-title">Информация</button>
						<ul class="menu-footer__list">

							<?php foreach ($this->menu['information-bottom'] as $item) : ?>

								<li><a href="<?= $this->alias(['information' => $item['alias']]) ?>" class="menu-footer__link"><?= $item['name'] ?></a></li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

				</div>
				<div class="menu-footer__column">

					<?php if (!empty($this->socials)) : ?>

						<button type="button" data-spoller class="menu-footer__title _footer-title">Соц.сети</button>
						<ul class="menu-footer__list">

							<?php foreach ($this->socials as $item) : ?>

								<li><a href="<?= $this->alias($item['external_alias']) ?>" class="menu-footer__link"><?= $item['name'] ?></a></li>

							<?php endforeach; ?>

							<!-- <li><a href="" class="menu-footer__link">Instagram</a></li> -->

						</ul>

					<?php endif; ?>

				</div>
			</div>
			<div class="footer__subscribe subscribe">

				<a href="<?= $this->alias() ?>" class="header__logo"><img src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['name'] ?>"></a>
				<!-- <div class="subscribe__title _footer-title">Stay Updated</div>
				<form data-message="subscribe" data-test action="#" class="subscribe__form">
					<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Enter your email" class="subscribe__input _req _email">
					<button type="submit" class="subscribe__button _icon-send"></button>
				</form> -->
			</div>
		</div>
	</div>
</footer>
</div>
<div class="popup popup_popup">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
		</div>
	</div>
</div>
<div class="popup popup_subscribe-message">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
		</div>
	</div>
</div>
<div class="popup popup_video">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close popup__close_video"></div>
			<div class="popup__video _video"></div>
		</div>
	</div>
</div>

<!-- Swiper -->
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<!-- <script src="js/vendors.min.js"></script>
<script src="js/app.min.js"></script> -->

<?php $this->getScripts() ?>

</body>

</html>