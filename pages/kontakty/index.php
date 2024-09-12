<?
$title = 'Контакты';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="contacts-page">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main">
    <section class="section contacts-page__section">
      <div class="container contacts-page__container">
        <h1 class="contacts-page__title title title_40">
          Контакты
        </h1>
      </div>


      <div class="contacts-page__content">
        <div class="contacts-page__left-block">

          <div class="contacts-page__left-wrap">
            <div class="address__wrapper address__wrapper_close">

              <div class="address__item address__item_office">
                <h2 class="address__item-title title title_25">
                  Главный офис
                </h2>
                <p class="address__time">
                  Ежедневно с 10:00-17:00
                </p>
              </div>

              <div class="address__item address__item_address">
                <p class="address__item-title">
                  Адрес:
                </p>
                <p class="address__item-text">
                  Тюмень, ул. Клары Цеткин, д. 61, к2
                </p>

                <button class="address__link">
                  Показать на карте
                </button>
              </div>

              <div class="address__item address__item_phone">
                <p class="address__item-title">
                  Телефон:
                </p>
                <a class="address__item-text" href="tel: <?= $row1['phone']; ?>">
                  <?= $row1['phone']; ?>
                </a>
              </div>

              <div class="address__item address__item_mail">
                <p class="address__item-title">
                  Почта:
                </p>
                <a class="address__item-text" href="mailto: hello_sibir@yandex.ru">
                  hello_sibir@yandex.ru
                </a>
              </div>
              <button class="address__item-btn address__item-btn_minus">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29 15.5L1 15.5" stroke="black" stroke-width="1.5" />
                </svg>
              </button>

              <button class="address__item-btn address__item-btn_plus">
                <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.7544 0.5V15.5M13.7544 30.5V15.5M13.7544 15.5H0H28" stroke="black" stroke-width="1.5" />
                </svg>
              </button>

            </div>

            <div class="address__wrapper address__wrapper_close">
              <!-- <div class="address__wrapper address__wrapper_close address__wrapper_disabled"> -->

              <div class="address__item address__item_office">
                <h2 class="address__item-title title title_25">
                  Офис продаж «Сосновый»
                </h2>
                <p class="address__time">
                  Скоро открытие
                </p>
              </div>

              <div class="address__item address__item_address">
                <p class="address__item-title">
                  Адрес:
                </p>
                <p class="address__item-text">
                  Тюмень, ул. Клары Цеткин, д. 61, к2
                </p>
              </div>

              <div class="address__item address__item_phone">
                <p class="address__item-title">
                  Телефон:
                </p>
                <a class="address__item-text" href="tel: <?= $row1['phone']; ?>">
                  <?= $row1['phone']; ?>
                </a>
              </div>

              <div class="address__item address__item_mail">
                <p class="address__item-title">
                  Почта:
                </p>
                <a class="address__item-text" href="mailto: hello_sibir@yandex.ru">
                  hello_sibir@yandex.ru
                </a>
              </div>

              <button class="address__item-btn address__item-btn_minus">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29 15.5L1 15.5" stroke="black" stroke-width="1.5" />
                </svg>
              </button>

              <button class="address__item-btn address__item-btn_plus">
                <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.7544 0.5V15.5M13.7544 30.5V15.5M13.7544 15.5H0H28" stroke="black" stroke-width="1.5" />
                </svg>
              </button>
            </div>
          </div>

          <div class="address__btn-wrap">
            <h4 class="address__btn-title title title_25">
              Остались вопросы?
            </h4>
            <p class="address__btn-desc">
              Отправьте заявку и мы свяжемся с вами для уточнения деталей
            </p>
            <button class="address__btn popup-link" href="#popup-call">
              Оставить заявку
            </button>
          </div>
        </div>

        <div class="contacts-page__right-block">
          <div class="contacts-page__map" id="map">
          </div>
        </div>

      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>

























</body>

</html>