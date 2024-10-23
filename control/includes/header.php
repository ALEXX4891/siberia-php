<?
$result = mysqli_query($db, "SELECT * FROM contacts");

$row1 = mysqli_fetch_array($result);
?>

<header class="header lock-padding">
	<section class="section header__section">
		<div class="header__container control__container">
			<div class="header__top-block control__top-block">
				<div class="header__logo logo">
					<a href="/" class="logo__link">
						<img class="logo__main" width="116" height="43" src="/assets/img/logo.svg" alt="застройщик сибирь">
					</a>
				</div>

				<div class="header__nav-wrap">
					<nav class="nav header__nav">
						<ul class="nav__list control__nav-list">
							<li class="nav__item">
								<a href="/control/pages/novosti/" class="nav__link">
									<p class="nav__text">
										Новости
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/control/pages/akcii/" class="nav__link">
									<p class="nav__text">
										Акции
									</p>
								</a>
							</li>
							<li class="nav__item">
								<a href="/control/pages/kontakty/" class="nav__link">
									<p class="nav__text">
										Контакты
									</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="header__btns">
					<a class="header__btn header__btn_site-link" href="/">
						Перейти на сайт
					</a>
					<a class="header__btn header__btn_exit" href="/control/login.php">
						Выйти
					</a>
				</div>

			</div>
		</div>
	</section>
</header>