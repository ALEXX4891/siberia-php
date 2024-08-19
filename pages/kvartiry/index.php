<?
$title = 'Квартиры';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="apartments-page">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main apartments-page__main">
    <section class="section section_choice choice">
      <div class="container choice__container">
        <h1 class="choice__title title title_40">
          Квартиры
        </h1>

        <div class="choice__form" action="#" method="post" enctype="multipart/form-data">

          <ul class="choice__inputs-list choice__inputs-list_top">
            <li class="choice__input-block choice__input-block_select choice__input-block_select_project">
              <p class="choice__label">
                Проект
              </p>
              <div class="choice__select select select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    Сосновый
                  </span>
                  <p class="select__text select__text_carton"></p>
                </div>
                <span class="select__arrow">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <ul class="select__list select__list_carton">
                  <li class="select__item" data-id="sosnoviy">Сосновый</li>
                  <!-- <li class="select__item" data-id="duboviy">Дубовый</li> -->
                  <!-- <li class="select__item" data-id="berezoviy">Березовый</li> -->
                </ul>
              </div>
            </li>

            <li class="choice__input-block choice__input-block_buttons choice__input-block_buttons_rooms">
              <p class="choice__label">
                Комнат
              </p>
              <div class="choice__buttons-select select-frame">
                <button class="choice__buttons-select-item" data-id="studio">
                  Студия
                </button>
                <button class="choice__buttons-select-item" data-id="1-k">
                  1
                </button>
                <button class="choice__buttons-select-item" data-id="2-k">
                  2
                </button>
                <button class="choice__buttons-select-item" data-id="3-k">
                  3
                </button>
                <button class="choice__buttons-select-item" data-id="3+">
                  3+
                </button>
              </div>
            </li>

            <li class="choice__input-block choice__input-block_slider choice__input-block_slider_square">
              <p class="choice__label">
                Площадь, м2
              </p>
              <div class="choice__slider-select choice__slider-select_square select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    от
                  </span>
                  <input class="select__input select__input_from" type="number">
                </div>

                <span class="select__arrow">
                  |
                </span>
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    до
                  </span>
                  <input class="select__input select__input_to" type="number">
                </div>

                <div class="slider-container">
                  <div class="range-slider">
                  </div>
                </div>


                <div class="range-inputs-wrap">
                  <input class="min-range" type="range">
                  <input class="max-range" type="range">
                </div>


              </div>
            </li>

            <li class="choice__input-block choice__input-block_slider choice__input-block_slider_cost">
              <p class="choice__label">
                Стоимость, ₽
              </p>
              <div class="choice__slider-select choice__slider-select_cost select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    от
                  </span>
                  <input class="select__input select__input_from" type="number">
                </div>

                <span class="select__arrow">
                  |
                </span>
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    до
                  </span>
                  <input class="select__input select__input_to" type="number">
                </div>

                <div class="slider-container">
                  <div class="range-slider">
                  </div>
                </div>


                <div class="range-inputs-wrap">
                  <input class="min-range" type="range">
                  <input class="max-range" type="range">
                </div>


              </div>
            </li>
          </ul>

          <ul class="choice__inputs-list choice__inputs-list_bot">
            <li class="choice__input-block choice__input-block_select choice__input-block_select_house">
              <p class="choice__label">
                Дом
              </p>
              <div class="choice__select select select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    Все
                  </span>
                  <p class="select__text select__text_carton"></p>
                </div>
                <span class="select__arrow">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <ul class="select__list select__list_carton">
                  <li class="select__item" data-id="sosnoviy">Все</li>
                  <li class="select__item" data-id="duboviy">1</li>
                  <li class="select__item" data-id="berezoviy">2</li>
                </ul>
              </div>
            </li>

            <li class="choice__input-block choice__input-block_select choice__input-block_select_section">
              <p class="choice__label">
                Секция
              </p>
              <div class="choice__select select select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    Все
                  </span>
                  <p class="select__text select__text_carton"></p>
                </div>
                <span class="select__arrow">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <ul class="select__list select__list_carton">
                  <li class="select__item" data-id="sosnoviy">Все</li>
                  <li class="select__item" data-id="duboviy">5</li>
                  <li class="select__item" data-id="berezoviy">8</li>
                </ul>
              </div>
            </li>

            <li class="choice__input-block choice__input-block_select choice__input-block_select_date">
              <p class="choice__label">
                Срок сдачи
              </p>
              <div class="choice__select select select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    Все
                  </span>
                  <p class="select__text select__text_carton"></p>
                </div>
                <span class="select__arrow">
                  <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <ul class="select__list select__list_carton">
                  <li class="select__item" data-id="sosnoviy">Все</li>
                  <li class="select__item" data-id="sosnoviy">II квартал 2025</li>
                  <li class="select__item" data-id="sosnoviy">II квартал 2026</li>
                  <li class="select__item" data-id="sosnoviy">II квартал 2027</li>

                  <!-- <li class="select__item" data-id="duboviy">Дубовый</li> -->
                  <!-- <li class="select__item" data-id="berezoviy">Березовый</li> -->
                </ul>
              </div>
            </li>

            <li class="choice__input-block choice__input-block_slider choice__input-block_slider_floor">
              <p class="choice__label">
                Этаж
              </p>
              <div class="choice__slider-select choice__slider-select_floor select-frame">
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    от
                  </span>
                  <input class="select__input select__input_from" type="number">
                </div>

                <span class="select__arrow">
                  |
                </span>
                <div class="select__wrapper">
                  <span class="select__placeholder">
                    до
                  </span>
                  <input class="select__input select__input_to" type="number">
                </div>

                <div class="slider-container">
                  <div class="range-slider">
                  </div>
                </div>


                <div class="range-inputs-wrap">
                  <input class="min-range" type="range">
                  <input class="max-range" type="range">
                </div>


              </div>
            </li>
          </ul>

          <div class="choice__btns-block">
            <p class="choice__btns-block-title">
              Особенности
            </p>
            <div class="choice__btns-wrap">
              <button class="choice__btn-filter" data-id="promotion">
                Акция
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.75" y="1.25" width="17.5" height="17.5" rx="8.75" stroke="#56693E" stroke-width="1.5" />
                  <path
                    d="M7.95597 12.2209V12.1009C7.95904 11.5438 8.01136 11.1006 8.11293 10.7713C8.21757 10.442 8.36529 10.1773 8.55611 9.97727C8.74692 9.77415 8.97929 9.58795 9.2532 9.41868C9.44093 9.30173 9.60866 9.17401 9.75639 9.03551C9.9072 8.89394 10.0257 8.73698 10.1119 8.56463C10.198 8.3892 10.2411 8.19377 10.2411 7.97834C10.2411 7.7352 10.1842 7.52438 10.0703 7.34588C9.95644 7.16738 9.80256 7.02888 9.60867 6.9304C9.41785 6.83191 9.20395 6.78267 8.96697 6.78267C8.74846 6.78267 8.54072 6.83037 8.34375 6.92578C8.14986 7.01811 7.98828 7.15968 7.85902 7.3505C7.73284 7.53823 7.66205 7.77675 7.64666 8.06605H6.0032C6.01858 7.4813 6.16016 6.99195 6.42791 6.59801C6.69875 6.20407 7.05575 5.90862 7.49893 5.71165C7.94519 5.51468 8.43762 5.41619 8.97621 5.41619C9.56404 5.41619 10.0811 5.51929 10.5273 5.7255C10.9767 5.9317 11.326 6.22562 11.5753 6.60724C11.8277 6.9858 11.9538 7.43513 11.9538 7.95526C11.9538 8.30611 11.8969 8.62003 11.783 8.89702C11.6722 9.17401 11.5137 9.42022 11.3075 9.63565C11.1013 9.85109 10.8567 10.0434 10.5735 10.2127C10.3242 10.3666 10.1196 10.5266 9.95952 10.6928C9.80256 10.859 9.68561 11.0545 9.60867 11.2791C9.5348 11.5007 9.49633 11.7746 9.49325 12.1009V12.2209H7.95597ZM8.75923 15.1016C8.48224 15.1016 8.24373 15.0031 8.04368 14.8061C7.84363 14.6091 7.74361 14.3691 7.74361 14.0859C7.74361 13.8089 7.84363 13.572 8.04368 13.375C8.24373 13.178 8.48224 13.0795 8.75923 13.0795C9.03314 13.0795 9.27012 13.178 9.47017 13.375C9.6733 13.572 9.77486 13.8089 9.77486 14.0859C9.77486 14.2737 9.72715 14.4445 9.63175 14.5984C9.53942 14.7522 9.41631 14.8754 9.26243 14.9677C9.11162 15.0569 8.94389 15.1016 8.75923 15.1016Z"
                    fill="#56693E" />
                </svg>
              </button>
              <button class="choice__btn-filter" data-id="today">
                Ключи сегодня
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.75" y="1.25" width="17.5" height="17.5" rx="8.75" stroke="#56693E" stroke-width="1.5" />
                  <path
                    d="M7.95597 12.2209V12.1009C7.95904 11.5438 8.01136 11.1006 8.11293 10.7713C8.21757 10.442 8.36529 10.1773 8.55611 9.97727C8.74692 9.77415 8.97929 9.58795 9.2532 9.41868C9.44093 9.30173 9.60866 9.17401 9.75639 9.03551C9.9072 8.89394 10.0257 8.73698 10.1119 8.56463C10.198 8.3892 10.2411 8.19377 10.2411 7.97834C10.2411 7.7352 10.1842 7.52438 10.0703 7.34588C9.95644 7.16738 9.80256 7.02888 9.60867 6.9304C9.41785 6.83191 9.20395 6.78267 8.96697 6.78267C8.74846 6.78267 8.54072 6.83037 8.34375 6.92578C8.14986 7.01811 7.98828 7.15968 7.85902 7.3505C7.73284 7.53823 7.66205 7.77675 7.64666 8.06605H6.0032C6.01858 7.4813 6.16016 6.99195 6.42791 6.59801C6.69875 6.20407 7.05575 5.90862 7.49893 5.71165C7.94519 5.51468 8.43762 5.41619 8.97621 5.41619C9.56404 5.41619 10.0811 5.51929 10.5273 5.7255C10.9767 5.9317 11.326 6.22562 11.5753 6.60724C11.8277 6.9858 11.9538 7.43513 11.9538 7.95526C11.9538 8.30611 11.8969 8.62003 11.783 8.89702C11.6722 9.17401 11.5137 9.42022 11.3075 9.63565C11.1013 9.85109 10.8567 10.0434 10.5735 10.2127C10.3242 10.3666 10.1196 10.5266 9.95952 10.6928C9.80256 10.859 9.68561 11.0545 9.60867 11.2791C9.5348 11.5007 9.49633 11.7746 9.49325 12.1009V12.2209H7.95597ZM8.75923 15.1016C8.48224 15.1016 8.24373 15.0031 8.04368 14.8061C7.84363 14.6091 7.74361 14.3691 7.74361 14.0859C7.74361 13.8089 7.84363 13.572 8.04368 13.375C8.24373 13.178 8.48224 13.0795 8.75923 13.0795C9.03314 13.0795 9.27012 13.178 9.47017 13.375C9.6733 13.572 9.77486 13.8089 9.77486 14.0859C9.77486 14.2737 9.72715 14.4445 9.63175 14.5984C9.53942 14.7522 9.41631 14.8754 9.26243 14.9677C9.11162 15.0569 8.94389 15.1016 8.75923 15.1016Z"
                    fill="#56693E" />
                </svg>
              </button>
              <button class="choice__btn-filter" data-id="balcony">
                Балкон
              </button>
              <button class="choice__btn-filter" data-id="dressing_room">
                Гардеробная
              </button>
              <button class="choice__btn-filter" data-id="two_side">
                Окна на 2 стороны
              </button>
              <button class="choice__btn-filter" data-id="three_side">
                Окна на 3 стороны
              </button>
              <button class="choice__btn-filter choice__btn-filter_disabled" data-id="guest_bathroom">
                Гостевой санузел
              </button>
              <button class="choice__btn-filter choice__btn-filter_disabled" data-id="terrace">
                Терраса
              </button>
              <button class="choice__btn-filter" data-id="kitchen_living_room">
                Кухня-гостиная
              </button>
            </div>
          </div>

          <div class="choice__reset-wrap">

            <button class="choice__btn-additional">
              <a class="choice__btn-text" href="/pages/kvartiry/">
                Еще параметры
              </a>
              <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7.2069 7L13 1" stroke="#363636" stroke-linejoin="round" />
              </svg>
            </button>

            <button class="choice__btn-reset" href="#popup-form">
              <a class="choice__btn-text" href="/pages/kvartiry/">
                Сбросить фильтры
              </a>
              <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0.5L15 14.5M1 14.5L15 0.5" stroke="black" />
              </svg>
            </button>

            <p class="choice__search-text">
              Найдено 20 квартир
            </p>

            <button class="choice__btn-request choice__btn-request_mobile btn btn_dark">
              Фильтр
            </button>

          </div>

        </div>
      </div>
    </section>

    <section class="section section__apartments apartments">
      <div class="container apartments__container">
        <ul class="apartments__list">
          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Акция
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Окна на 2 стороны
                  </p>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Гостевой санузел
                </p>                 
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Акция
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Ключи сегодня
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Окна на 2 стороны
                  </p>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Гостевой санузел
                  </p>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Кухня-гостинная
                </p>                 
              </li> -->
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Акция
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Окна на 2 стороны
                </p>                 
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Гостевой санузел
                </p>                 
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Акция
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Окна на 2 стороны
                </p>                 
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Гостевой санузел
                  </p>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Акция
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Окна на 2 стороны
                  </p>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Гостевой санузел
                </p>                 
              </li> -->

              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Акция
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Окна на 2 стороны
                  </p>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Гостевой санузел
                </p>                 
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Акция
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Ключи сегодня
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Окна на 2 стороны
                  </p>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Гостевой санузел
                  </p>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Кухня-гостинная
                </p>                 
              </li> -->
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Акция
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Окна на 2 стороны
                </p>                 
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Гостевой санузел
                </p>                 
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Акция
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Окна на 2 стороны
                </p>                 
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Гостевой санузел
                  </p>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>
              </ul>
            </a>
          </li>

          <li class="apartments__item">
            <a class="apartments__item-link" href="apartments-item.html">
              <h5 class="apartments__item-title">
                Сосновый | ГП 8 | 1 / 2 этаж
              </h5>
              <div class="apartments__item-img">
                <picture>
                  <source srcset="/assets/img/apartment-1.webp" type="image/webp"><img src="/assets/img/apartment-1.png" alt="квартира">
                </picture>
              </div>

              <p class="apartments__item-desc">
                2-комнатная 61,88м2
              </p>

              <div class="apartments__item-price-wrap">
                <p class="apartments__item-new-price">
                  5 662 000 ₽
                </p>
                <p class="apartments__item-old-price">
                  9 331 000 ₽
                </p>
              </div>

              <ul class="apartments__item-footer">
                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Акция
                  </p>
                  <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                    <path
                      d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                      fill="#56693E" />
                  </svg>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Ключи сегодня
                </p>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                  <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                </svg>                  
              </li> -->

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Окна на 2 стороны
                  </p>
                </li>

                <li class="apartments__item-footer-item">
                  <p class="apartments__item-footer-item-text">
                    Кухня-гостинная
                  </p>
                </li>

                <!-- <li class="apartments__item-footer-item">
                <p class="apartments__item-footer-item-text">
                  Гостевой санузел
                </p>                 
              </li> -->

              </ul>
            </a>
          </li>
        </ul>
        <button class="apartments__button btn btn_dark">
          Показать еще 8 планировок
        </button>
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