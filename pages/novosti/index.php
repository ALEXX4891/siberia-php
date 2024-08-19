<?
$title = 'Новости';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="news-page">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main news-page__main">
    <section class="section news-page__section">
      <div class="container news-page__container">
        <h1 class="news-page__title title title_25">
          Новости Сибири
        </h1>
        <div class="news-page__btn-wrapper">
          <a class="news-page__btn news-page__btn_green" href="/pages/novosti/">
            Новости
          </a>
          <a class="news-page__btn news-page__btn_white" href="/pages/akcii/">
            Акции
          </a>
        </div>
        <ul class="news-page__cards-list">
          <li class="news-page__cards-item">
            <div class="news-page__card-img-wrapper">
              <picture>
                <source srcset="/assets/img/news-img-1.webp" type="image/webp"><img src="/assets/img/news-img-1.jpg" alt="Проект">
              </picture>
            </div>
            <p class="news-page__card-date">
              01 мая 2024
            </p>
            <a class="news-page__card-link" href="novosti-item.html">
              <h2 class="news-page__card-title">
                Динамика строительства «Сосновый». Апрель 2024.
              </h2>
            </a>
          </li>
          <li class="news-page__cards-item">
            <div class="news-page__card-img-wrapper">
              <picture>
                <source srcset="/assets/img/news-img-2.webp" type="image/webp"><img src="/assets/img/news-img-2.jpg" alt="Проект">
              </picture>
            </div>
            <p class="news-page__card-date">
              01 мая 2024
            </p>
            <a class="news-page__card-link" href="novosti-item.html">
              <h2 class="news-page__card-title">
                Сибирь разрабатывает новый проект ЖК «Успенка»
              </h2>
            </a>
          </li>
          <li class="news-page__cards-item">
            <div class="news-page__card-img-wrapper">
              <picture>
                <source srcset="/assets/img/news-img-3.webp" type="image/webp"><img src="/assets/img/news-img-3.jpg" alt="Проект">
              </picture>
            </div>
            <p class="news-page__card-date">
              01 мая 2024
            </p>
            <a class="news-page__card-link" href="novosti-item.html">
              <h2 class="news-page__card-title">
                Динамика строительства Сосновый. Апрель 2024.
              </h2>
            </a>
          </li>
          <li class="news-page__cards-item">
            <div class="news-page__card-img-wrapper">
              <picture>
                <source srcset="/assets/img/news-img-4.webp" type="image/webp"><img src="/assets/img/news-img-4.jpg" alt="Проект">
              </picture>
            </div>
            <p class="news-page__card-date">
              01 мая 2024
            </p>
            <a class="news-page__card-link" href="novosti-item.html">
              <h2 class="news-page__card-title">
                Сибирь объявляет об операционных результатах первого квартала 2024
              </h2>
            </a>
          </li>
        </ul>
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