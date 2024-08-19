<?
$result = mysqli_query($db, "SELECT * FROM contacts");

$row1 = mysqli_fetch_array($result);
?>

<header class="header lock-padding">
	<section class="section header__section">
		<div class="header__container">
			<div class="header__top-block">
				<div class="header__logo logo">
					<a href="/" class="logo__link">
						<img class="logo__main" width="116" height="43" src="/assets/img/logo.svg" alt="Логотип Сибирь">
					</a>
				</div>

				<div class="header__nav-wrap">
					<nav class="nav header__nav">
						<ul class="nav__list">
							<li class="nav__item">
								<a href="/pages/proekty/" class="nav__link">
									<p class="nav__text">
										Проекты
									</p>
								</a>
							</li>
							<li class="nav__item nav__item_apartments">
								<a href="/pages/kvartiry/" class="nav__link">
									<p class="nav__text">
										Квартиры
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/kommercia/" class="nav__link">
									<p class="nav__text">
										Коммерция
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/sotrudnichestvo/" class="nav__link">
									<p class="nav__text">
										Сотрудничество
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/sposob-pokupki/" class="nav__link">
									<p class="nav__text">
										Способ покупки
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/akcii/" class="nav__link">
									<p class="nav__text">
										Акции
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/o-companii/" class="nav__link">
									<p class="nav__text">
										О компании
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/novosti/" class="nav__link">
									<p class="nav__text">
										Новости
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/pages/kontakty/" class="nav__link">
									<p class="nav__text">
										Контакты
									</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="header__contacts contacts">
					<a href="tel:8 (3452) 611-157" class="contacts__item contacts__item_phone">8 (3452) 611-157</a>
				</div>
				<button class="header__burger burger">
					<div class="burger__open-btn">
						<svg width="30" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 1H30M0 16H30M0 8.25806H30" stroke="#8C8C8C" stroke-width="1.5" />
						</svg>
					</div>

					<div class="burger__close-btn">
						<svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L31 16M31 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
						</svg>
					</div>

				</button>
			</div>
		</div>
	</section>
</header>