<footer class="footer">
	<div class="section footer__section">
		<div class="container footer__container">
			<div class="footer__top-block">

				<div class="footer__contacts contacts" id="footer-contacts">
					<a href="tel:<? echo preg_replace('/[^0-9\.]+/', '', $row1['phone']); ?>" class="contacts__item contacts__item_phone">
						<?= $row1['phone']; ?>
					</a>
					<a href="mailto:<? echo $row1['email']; ?>" class="contacts__item contacts__item_email">
						<? echo $row1['email']; ?>
					</a>
					<p class="contacts__item contacts__item_address">
					<?= $row1['address']; ?>
					</p>
				</div>

				<div class="footer__nav-wrap">
					<nav class="nav footer__nav">
						<span class="nav__title">
							недвижимость
						</span>
						<ul class="nav__list">

							<!-- <li class="nav__item">
								<a href="/pages/proekty/" class="nav__link">
									<p class="nav__text">
										Проекты
									</p>
								</a>
							</li> -->

							<!-- <li class="nav__item">
								<a href="/pages/kommercia/" class="nav__link">
									<p class="nav__text">
										Коммерция
									</p>
								</a>
							</li> -->

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

						</ul>
					</nav>

					<nav class="nav footer__nav">
						<span class="nav__title">
							квартиры
						</span>
						<ul class="nav__list">

							<li class="nav__item">
								<a href="/pages/kvartiry/?rooms=11" class="nav__link">
									<p class="nav__text">
										Студии
									</p>
								</a>
							</li>

							<li class="nav__item">
								<a href="/pages/kvartiry/?rooms=1" class="nav__link">
									<p class="nav__text">
										1-комнатные
									</p>
								</a>
							</li>

							<li class="nav__item">
								<a href="/pages/kvartiry/?rooms=2" class="nav__link">
									<p class="nav__text">
										2-комнатные
									</p>
								</a>
							</li>

							<li class="nav__item">
								<a href="/pages/kvartiry/?rooms=3" class="nav__link">
									<p class="nav__text">
										3-комнатные
									</p>
								</a>
							</li>

						</ul>
					</nav>

					<nav class="nav footer__nav">
						<span class="nav__title">
							о компании
						</span>
						<ul class="nav__list">

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
								<a href="/pages/sotrudnichestvo/" class="nav__link">
									<p class="nav__text">
										Сотрудничество
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

			</div>

			<div class="footer__bottom-block">

				<div class="footer__logo logo">
					<a href="/" class="logo__link">
						<img class="logo__main" width="116" height="43" src="/assets/img/logo-white.svg" alt="Логотип Сибирь">
					</a>
				</div>

				<p class="footer__copyright">
					© 2024, ООО СЗ «Сибирь»
				</p>

				<div class="footer__info-links">
					<a href="/pages/policy/" class="footer__policy" target="_blank">
						Политика конфиденциальности
					</a>
					<a href="https://xn--80az8a.xn--d1aqf.xn--p1ai/%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D1%8B/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3-%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BA/%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82/60004"
						class="footer__policy" target="_blank">
						Проектные декларации
					</a>
				</div>

				<button class="btn btn_dark footer__btn popup-link" href="#popup-agency">
					Форма уведомления
				</button>

				<a href="https://ww.net.ru/" class="footer__developer developer" target="_blank">
					<svg width="47" height="30" viewBox="0 0 47 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_484_3887)">
							<path
								d="M0 29.1532V24.8809H0.823137C1.43807 24.8809 1.869 24.9123 2.12563 24.9752C2.38226 25.0381 2.60499 25.1429 2.79382 25.2897C3.04561 25.4784 3.23445 25.7196 3.36033 26.0131C3.49107 26.3067 3.55402 26.6422 3.55402 27.0197C3.55402 27.3971 3.49107 27.7326 3.36033 28.0262C3.2296 28.3197 3.04077 28.5609 2.79382 28.7496C2.60499 28.8911 2.3871 28.996 2.14016 29.0588C1.89806 29.1218 1.51554 29.1532 1.00229 29.1532H0.823137H0ZM1.06524 28.1939H1.24439C1.66564 28.1939 1.97553 28.0996 2.1692 27.9108C2.36289 27.7221 2.45973 27.4233 2.45973 27.0144C2.45973 26.6055 2.36289 26.3067 2.1692 26.118C1.97553 25.9293 1.66564 25.8297 1.24439 25.8297H1.06524V28.1939Z"
								fill="white" />
							<path d="M4.39062 29.1532V24.8809H5.47524V29.1532H4.39062Z" fill="white" />
							<path
								d="M8.36361 27.5802V26.6838H10.4796C10.4796 26.7153 10.4844 26.7467 10.4844 26.7781C10.4844 26.8149 10.4844 26.8673 10.4844 26.9355C10.4844 27.6694 10.3052 28.2407 9.94697 28.6496C9.58868 29.0533 9.08508 29.2577 8.4314 29.2577C8.11184 29.2577 7.82617 29.2053 7.57922 29.1005C7.33228 28.9956 7.10956 28.8384 6.91103 28.6234C6.72219 28.419 6.57693 28.1779 6.47525 27.9C6.37357 27.6222 6.32031 27.3286 6.32031 27.0245C6.32031 26.7048 6.36873 26.4112 6.47041 26.1438C6.57209 25.8765 6.72219 25.6353 6.92071 25.4204C7.11924 25.2108 7.34681 25.0534 7.60344 24.9486C7.86006 24.8438 8.13605 24.7861 8.4314 24.7861C8.8188 24.7861 9.1577 24.87 9.45792 25.0325C9.75331 25.2002 10.005 25.4467 10.2084 25.7717L9.27391 26.254C9.16252 26.0862 9.03666 25.9656 8.89625 25.887C8.75583 25.8083 8.60085 25.7664 8.42658 25.7664C8.107 25.7664 7.85038 25.8817 7.66638 26.1176C7.48239 26.3483 7.39039 26.6681 7.39039 27.0717C7.39039 27.4806 7.48239 27.8004 7.66638 28.0311C7.85038 28.2669 8.107 28.3823 8.42658 28.3823C8.69776 28.3823 8.92528 28.3089 9.10928 28.1673C9.29329 28.0205 9.39985 27.8319 9.42888 27.5854H8.36361V27.5802Z"
								fill="white" />
							<path d="M11.3047 29.1532V24.8809H12.3893V29.1532H11.3047Z" fill="white" />
							<path d="M13.9642 29.1527V25.8868H13.0781V24.875H15.9203V25.8868H15.0342V29.1527H13.9642Z" fill="white" />
							<path
								d="M15.9023 29.1532L17.263 24.8809H18.609L19.9745 29.1532H18.9044L18.7059 28.3879H17.1807L16.9773 29.1532H15.9023ZM17.4131 27.5544H18.4832L18.0812 26.1442C18.0668 26.1023 18.0522 26.0341 18.028 25.9345C18.0086 25.8401 17.9796 25.7144 17.9457 25.5676C17.9215 25.6724 17.8973 25.772 17.8779 25.8664C17.8537 25.9607 17.8343 26.0551 17.8101 26.1389L17.4131 27.5544Z"
								fill="white" />
							<path d="M20.4922 29.1532V24.8809H21.567V28.1572H22.9035V29.1532H20.4922Z" fill="white" />
							<path
								d="M25.6092 27.7691C25.769 27.9683 25.9288 28.1151 26.0837 28.2094C26.2387 28.309 26.3936 28.3562 26.5486 28.3562C26.6938 28.3562 26.81 28.3143 26.902 28.2304C26.994 28.1465 27.0424 28.0417 27.0424 27.9106C27.0424 27.7691 27.0037 27.659 26.9214 27.5804C26.839 27.5017 26.6599 27.4231 26.3791 27.3445C25.9917 27.2291 25.7206 27.0823 25.5608 26.9041C25.401 26.7206 25.3187 26.4742 25.3187 26.1597C25.3187 25.7508 25.4446 25.4154 25.6964 25.1585C25.9481 24.9015 26.2774 24.7705 26.6793 24.7705C26.8972 24.7705 27.1054 24.8019 27.2991 24.8649C27.4927 24.9278 27.6767 25.0221 27.8511 25.1532L27.5121 25.9919C27.3911 25.8767 27.2652 25.7928 27.1344 25.7351C27.0037 25.6774 26.8778 25.6512 26.7519 25.6512C26.6212 25.6512 26.5195 25.6827 26.4372 25.7508C26.3549 25.819 26.3161 25.9029 26.3161 26.0077C26.3161 26.1125 26.3501 26.2017 26.4227 26.2645C26.4953 26.3275 26.6309 26.3904 26.8342 26.448L26.8826 26.4638C27.3233 26.5948 27.6089 26.7312 27.7493 26.8884C27.8414 26.9932 27.914 27.1191 27.9624 27.2659C28.0108 27.4126 28.035 27.5751 28.035 27.7534C28.035 28.2042 27.8995 28.5711 27.6235 28.849C27.3475 29.1268 26.9795 29.2631 26.5244 29.2631C26.2483 29.2631 26.0014 29.2107 25.7738 29.1111C25.5463 29.0115 25.3332 28.849 25.125 28.6341L25.6092 27.7691Z"
								fill="white" />
							<path d="M29.3509 29.1527V25.8868H28.4648V24.875H31.3071V25.8868H30.421V29.1527H29.3509Z" fill="white" />
							<path
								d="M31.9492 24.8802H33.0241V26.9562C33.0241 27.2602 33.029 27.4804 33.0435 27.6167C33.0581 27.7478 33.0823 27.8631 33.1161 27.9522C33.1597 28.0623 33.2275 28.1461 33.334 28.2039C33.4358 28.2615 33.5616 28.2877 33.7069 28.2877C33.8522 28.2877 33.978 28.2615 34.0797 28.2039C34.1814 28.1461 34.254 28.0623 34.2976 27.9522C34.3315 27.8631 34.3557 27.753 34.3703 27.6167C34.3847 27.4856 34.3896 27.2655 34.3896 26.9562V26.6626V24.875H35.4597V27.1344C35.4597 27.601 35.4355 27.9469 35.3822 28.1724C35.329 28.3978 35.2418 28.5865 35.1159 28.7438C34.9803 28.9168 34.7963 29.0478 34.5591 29.1317C34.3218 29.2209 34.0361 29.2627 33.702 29.2627C33.3631 29.2627 33.0775 29.2209 32.845 29.1317C32.6126 29.0426 32.4238 28.9168 32.2882 28.7438C32.1672 28.5865 32.08 28.3978 32.0267 28.1724C31.9734 27.9522 31.9492 27.6062 31.9492 27.1344V26.6888V24.8802Z"
								fill="white" />
							<path
								d="M36.418 29.1532V24.8809H37.2412C37.8561 24.8809 38.287 24.9123 38.5436 24.9752C38.8002 25.0381 39.023 25.1429 39.2118 25.2897C39.4636 25.4784 39.6525 25.7196 39.7783 26.0131C39.909 26.3067 39.972 26.6422 39.972 27.0197C39.972 27.3971 39.909 27.7326 39.7783 28.0262C39.6476 28.3197 39.4587 28.5609 39.2118 28.7496C39.023 28.8911 38.8051 28.996 38.5582 29.0588C38.316 29.1218 37.9335 29.1532 37.4203 29.1532H37.2412H36.418ZM37.4832 28.1939H37.6624C38.0837 28.1939 38.3935 28.0996 38.5872 27.9108C38.7809 27.7221 38.8777 27.4233 38.8777 27.0144C38.8777 26.6055 38.7809 26.3067 38.5872 26.118C38.3935 25.9293 38.0837 25.8297 37.6624 25.8297H37.4832V28.1939Z"
								fill="white" />
							<path d="M40.8125 29.1532V24.8809H41.8971V29.1532H40.8125Z" fill="white" />
							<path
								d="M46.9556 27.0249C46.9556 27.3341 46.9024 27.6225 46.8007 27.8898C46.6942 28.1572 46.5441 28.3983 46.3456 28.6133C46.1422 28.823 45.9146 28.9855 45.6531 29.1008C45.3966 29.2162 45.1254 29.2738 44.8494 29.2738C44.5685 29.2738 44.2974 29.2162 44.0408 29.1008C43.7842 28.9855 43.5566 28.823 43.358 28.6133C43.1547 28.4036 42.9997 28.1625 42.8981 27.8898C42.7915 27.6173 42.7383 27.3342 42.7383 27.0301C42.7383 26.7261 42.7915 26.4378 42.8981 26.1651C43.0046 25.8978 43.1595 25.6567 43.358 25.4418C43.5518 25.2321 43.7793 25.0695 44.0408 24.9543C44.2974 24.8389 44.5685 24.7812 44.8494 24.7812C45.1302 24.7812 45.4014 24.8389 45.658 24.9543C45.9195 25.0695 46.1471 25.2321 46.3456 25.4418C46.5441 25.6514 46.6942 25.8926 46.8007 26.1651C46.9024 26.4325 46.9556 26.7208 46.9556 27.0249ZM44.8494 28.2778C45.1496 28.2778 45.3966 28.1572 45.5902 27.9214C45.7839 27.6854 45.8807 27.3867 45.8807 27.0249C45.8807 26.6684 45.7839 26.3696 45.5854 26.1285C45.3868 25.8873 45.1399 25.772 44.8494 25.772C44.5492 25.772 44.3023 25.8926 44.1085 26.1285C43.9149 26.3644 43.818 26.6684 43.818 27.0249C43.818 27.3919 43.9149 27.6906 44.1085 27.9266C44.2974 28.1625 44.5443 28.2778 44.8494 28.2778Z"
								fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M2.6873 11.9531L11.277 4.29947L19.8667 11.9531V0.273438H22.5491V18.1128L11.277 8.06339L0 18.1128V0.273438H2.6873V11.9531Z"
								fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M11.2859 15.402L4.25533 21.6717H0.0234375L11.2859 11.6328L22.5483 21.6717H18.3213L11.2859 15.402Z"
								fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M27.1044 11.9531L35.6941 4.29947L44.2886 11.9531L44.2837 0.273438H46.971V18.1128L35.6941 8.06339L24.4219 18.1128V0.273438H27.1044V11.9531Z"
								fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M35.7078 15.402L28.6724 21.6717H24.4453L35.7078 11.6328L46.9702 21.6717H42.7432L35.7078 15.402Z"
								fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_484_3887">
								<rect width="47" height="29" fill="white" transform="translate(0 0.273438)" />
							</clipPath>
						</defs>
					</svg>

					<p class="developer__text">
						Сайт разработан
						DIGITAL STUDIO WW
					</p>
				</a>

				<div class="footer__desc-wrap">
					<p class="footer__desc">
						Любая информация, представленная на данном сайте, носит исключительно информационный характер, не является
						публичной офертой, определяемой положениями статьи 437 ГК РФ.
					</p>

					<a class="footer__agent-link" href="#" style="opacity: 0; pointer-events: none;">
						для агенств
						<!-- тут должна быть ссылка на презентацию для агенств -->
					</a>
				</div>
			</div>
		</div>
	</div>

</footer>

<div class="cookie">
	<div class="cookie__wrapper">
		<p>
			Продолжая использовать наш сайт, вы принимаете
			<a href="/pages/policy/cookie/" target="_blank">
				политику использования cookie-файлов.
			</a>
		</p>
	</div>
	<div class="cookie__btn">
		Принимаю

	</div>
	<p title="Не принимаю" class="cookie__close">
		<svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M14.3793 14.3102C14.8556 13.8698 15.5956 13.9022 16.0321 14.3827L25 24.2534L33.9679 14.3827C34.4044 13.9022 35.1444 13.8698 35.6207 14.3102C36.0969 14.7507 36.1291 15.4973 35.6925 15.9778L26.5869 26L35.6925 36.0222C36.1291 36.5027 36.0969 37.2493 35.6206 37.6898C35.1444 38.1302 34.4044 38.0978 33.9679 37.6173L25 27.7467L16.0321 37.6173C15.5956 38.0978 14.8556 38.1302 14.3794 37.6898C13.9031 37.2493 13.8709 36.5027 14.3075 36.0222L23.4131 26L14.3075 15.9778C13.8709 15.4973 13.9031 14.7507 14.3793 14.3102Z"
				fill="black" />
		</svg>
	</p>
</div>

<?
include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/popup.php';
?>

<script src="/assets/js/lib/jquery-3.5.1.min.js"></script>
<script src="/assets/js/lib/swiper-bundle.min.js"></script>
<script src="/assets/js/lib/fancybox.umd.js"></script>
<script src="/assets/js/lib/jquery.maskedinput.min.js"></script>
<script type="module" src="/assets/js/api.js"></script>
<script type="module" src="/assets/js/app.js"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: '.textarea_edit',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Oct 7, 2024:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>