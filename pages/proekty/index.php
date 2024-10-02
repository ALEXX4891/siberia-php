<?
echo '<meta http-equiv="refresh" content="0; URL=\'/pages/project-item/\'" />';
exit();

$title = 'Проекты';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="project-page">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main">
    <section class="section project-page__section">
      <div class="container project-page__container">
        <div class="project-page__top-wrap">
          <h2 class="project-page__title title title_40">
            Проекты
          </h2>
          <div class="project-page__btns-wrap">
            <button class="project-page__button project-page__button_list">
              <p class="project-page__button-text">
                Списком
              </p>
            </button>
            <button class="project-page__button project-page__button_map">
              <p class="project-page__button-text">
                на карте
              </p>
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="50" height="50" rx="25" fill="white" />
                <path opacity="0.5"
                  d="M21.5779 18.9091L24.9529 24.3551H25.0551L28.4301 18.9091H30.2966L26.1801 25.4545L30.2966 32H28.4301L25.0551 26.6562H24.9529L21.5779 32H19.7114L23.9301 25.4545L19.7114 18.9091H21.5779Z"
                  fill="#363636" />
              </svg>
            </button>
          </div>
        </div>

        <ul class="project-page__list">
          <li class="project-page__item">
            <a class="project-page__link" href="/pages/project-item/">
              <div class="project-page__card-img">
                <picture>
                  <source srcset="/assets/img/building-1.webp" type="image/webp"><img src="/assets/img/building-1.jpg" alt="">
                </picture>
                <div class="project-page__card-info">
                  <p class="project-page__card-label">
                    СКОРО
                  </p>
                </div>
              </div>
              <div class="project-page__card-content">
                <h3 class="project-page__card-title title title_25">
                  Островский
                </h3>


                <div class="project-page__card-footer">
                  <div class="project-page__card-bot-wrap">
                    <p class="project-page__card-key">
                      Срок сдачи
                    </p>
                    <p class="project-page__card-value">
                      II квартал 2025
                    </p>
                  </div>
                  <div class="project-page__card-bot-wrap">
                    <p class="project-page__card-key">
                      Площадь
                    </p>
                    <p class="project-page__card-value">
                      от 28,72
                    </p>
                  </div>
                  <p class="project-page__card-link">
                    128 квартир
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li class="project-page__item">
            <a class="project-page__link" href="/pages/project-item/">

              <div class="project-page__card-img">
                <picture>
                  <source srcset="/assets/img/building-2.webp" type="image/webp"><img src="/assets/img/building-2.jpg" alt="">
                </picture>
                <div class="project-page__card-info">
                  <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12 0C12 2 8 6 4.80015 6M12 0V6.75M12 0C12 2 16 6 19.1998 6M12 27V14.625M12 6.75C10.6666 9.25 7.99983 14 1.59997 14M12 6.75V14.625M12 6.75C13.3334 9.25 16.0002 14 22.4 14M12 14.625C10.4 17.4583 5.75988 22.5 0 22.5M12 14.625C13.6001 17.4583 18.2401 22.5 24 22.5"
                      stroke="white" stroke-width="3" />
                  </svg>
                  <p class="project-page__card-label project-page__card-label_small">
                    Сосновый
                  </p>
                  <div class="project-page__card-info-btn">
                    Сдан
                  </div>
                </div>
              </div>
              <div class="project-page__card-content">
                <h3 class="project-page__card-title title title_25">
                  Сосновый
                </h3>
                <div class="project-page__card-footer">
                  <div class="project-page__card-bot-wrap">
                    <p class="project-page__card-key">
                      Срок сдачи
                    </p>
                    <p class="project-page__card-value">
                      Сдан
                    </p>
                  </div>
                  <p class="project-page__card-link">
                    128 квартир
                  </p>
                  <!-- <div class="project-page__card-bot-wrap">
                  <p class="project-page__card-key">
                    Площадь
                  </p>
                  <p class="project-page__card-value">
                    от 28,72 до 83,61
                  </p>
                </div>
                <p class="project-page__card-link">
                  128 квартир
                </p> -->
                </div>
              </div>
            </a>

          </li>

          <li class="project-page__item project-page__item_no-show">
            <a class="project-page__link" href="/pages/project-item/">
              <div class="project-page__card-img">
                <picture>
                  <source srcset="/assets/img/building-1.webp" type="image/webp"><img src="/assets/img/building-1.jpg" alt="">
                </picture>
                <div class="project-page__card-info">
                  <p class="project-page__card-label">
                    СКОРО
                  </p>
                </div>
              </div>
              <div class="project-page__card-content">
                <h3 class="project-page__card-title title title_25">
                  Островский
                </h3>


                <div class="project-page__card-footer">
                  <div class="project-page__card-bot-wrap">
                    <p class="project-page__card-key">
                      Срок сдачи
                    </p>
                    <p class="project-page__card-value">
                      II квартал 2025
                    </p>
                  </div>
                  <div class="project-page__card-bot-wrap">
                    <p class="project-page__card-key">
                      Площадь
                    </p>
                    <p class="project-page__card-value">
                      от 28,72
                    </p>
                  </div>
                  <p class="project-page__card-link">
                    128 квартир
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li class="project-page__item project-page__item_no-show">
            <a class="project-page__link" href="/pages/project-item/">

              <div class="project-page__card-img">
                <picture>
                  <source srcset="/assets/img/building-2.webp" type="image/webp"><img src="/assets/img/building-2.jpg" alt="">
                </picture>
                <div class="project-page__card-info">
                  <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12 0C12 2 8 6 4.80015 6M12 0V6.75M12 0C12 2 16 6 19.1998 6M12 27V14.625M12 6.75C10.6666 9.25 7.99983 14 1.59997 14M12 6.75V14.625M12 6.75C13.3334 9.25 16.0002 14 22.4 14M12 14.625C10.4 17.4583 5.75988 22.5 0 22.5M12 14.625C13.6001 17.4583 18.2401 22.5 24 22.5"
                      stroke="white" stroke-width="3" />
                  </svg>
                  <p class="project-page__card-label project-page__card-label_small">
                    Сосновый
                  </p>
                  <div class="project-page__card-info-btn">
                    Сдан
                  </div>
                </div>
              </div>
              <div class="project-page__card-content">
                <h3 class="project-page__card-title title title_25">
                  Сосновый
                </h3>
                <div class="project-page__card-footer">
                  <div class="project-page__card-bot-wrap">
                    <p class="project-page__card-key">
                      Срок сдачи
                    </p>
                    <p class="project-page__card-value">
                      Сдан
                    </p>
                  </div>
                  <p class="project-page__card-link">
                    128 квартир
                  </p>
                  <!-- <div class="project-page__card-bot-wrap">
                  <p class="project-page__card-key">
                    Площадь
                  </p>
                  <p class="project-page__card-value">
                    от 28,72 до 83,61
                  </p>
                </div>
                <p class="project-page__card-link">
                  128 квартир
                </p> -->
                </div>
              </div>
            </a>

          </li>

        </ul>
        <div class="project-page__map" id="map">
        </div>
      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>

