<?
$title = 'Главная';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="glavnaya" data-page="index">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main glavnaya__main glavnaya__main_top">
    <section class="section section_banner banner">
      <div class="container banner__container">

        <!-- <div class="banner__content-wrap"> -->
        <h2 class="banner__title">
          Старт продаж 1 очереди
          в малоэтажном ЖК
        </h2>

        <ul class="banner__list">
          <li class="banner__item">
            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7.71652 1.51142C7.71652 1.18037 7.71652 0.842466 7.71214 0.5L7.05579 0.509132L6.39944 0.518265C6.39944 0.518265 6.39944 0.522831 6.39944 0.525114C6.43882 3.86301 6.07345 5.69178 5.17644 6.63927C4.2466 7.62329 2.57509 7.81507 0 7.81507V8.5V9.18493C6.27692 9.18493 6.27911 11.4247 6.28348 15.4886C6.28348 15.8196 6.28348 16.1575 6.28786 16.5L7.60056 16.4817C7.60056 16.4817 7.60056 16.4772 7.60056 16.4749C7.56118 13.137 7.92655 11.3082 8.82356 10.3607C9.7534 9.37671 11.4249 9.18493 14 9.18493V7.81507C7.72308 7.81507 7.72089 5.57534 7.71652 1.51142Z"
                fill="white" />
            </svg>
            <p class="banner__item-text">
              вид на лес
            </p>
          </li>
          <li class="banner__item">
            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7.71652 1.51142C7.71652 1.18037 7.71652 0.842466 7.71214 0.5L7.05579 0.509132L6.39944 0.518265C6.39944 0.518265 6.39944 0.522831 6.39944 0.525114C6.43882 3.86301 6.07345 5.69178 5.17644 6.63927C4.2466 7.62329 2.57509 7.81507 0 7.81507V8.5V9.18493C6.27692 9.18493 6.27911 11.4247 6.28348 15.4886C6.28348 15.8196 6.28348 16.1575 6.28786 16.5L7.60056 16.4817C7.60056 16.4817 7.60056 16.4772 7.60056 16.4749C7.56118 13.137 7.92655 11.3082 8.82356 10.3607C9.7534 9.37671 11.4249 9.18493 14 9.18493V7.81507C7.72308 7.81507 7.72089 5.57534 7.71652 1.51142Z"
                fill="white" />
            </svg>
            <p class="banner__item-text">
              тишина природы
            </p>
          </li>
          <li class="banner__item">
            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7.71652 1.51142C7.71652 1.18037 7.71652 0.842466 7.71214 0.5L7.05579 0.509132L6.39944 0.518265C6.39944 0.518265 6.39944 0.522831 6.39944 0.525114C6.43882 3.86301 6.07345 5.69178 5.17644 6.63927C4.2466 7.62329 2.57509 7.81507 0 7.81507V8.5V9.18493C6.27692 9.18493 6.27911 11.4247 6.28348 15.4886C6.28348 15.8196 6.28348 16.1575 6.28786 16.5L7.60056 16.4817C7.60056 16.4817 7.60056 16.4772 7.60056 16.4749C7.56118 13.137 7.92655 11.3082 8.82356 10.3607C9.7534 9.37671 11.4249 9.18493 14 9.18493V7.81507C7.72308 7.81507 7.72089 5.57534 7.71652 1.51142Z"
                fill="white" />
            </svg>
            <p class="banner__item-text">
              чистовой ремонт
            </p>
          </li>
        </ul>

        <p class="banner__text">
          Срок сдачи 1 очереди – II квартал 2025 года
        </p>

        <a class="banner__btn btn btn_dark btn_reset" href="/pages/kvartiry/" scrollspy="plans">
          Смотреть планировки
        </a>
        <!-- </div> -->

      </div>
    </section>

    <section class="section section_building building">

      <div class="container building__container building_swiper">

        <h2 class="building__title title title_40">
          Мы строим
        </h2>

        <ul class="building__cards-list swiper-wrapper">
          <li class="building__cards-item swiper-slide">
            <div class="building__card-img">
              <picture>
                <source srcset="/assets/img/building-1.webp" type="image/webp"><img src="/assets/img/building-1.jpg" alt="">
              </picture>
              <div class="building__card-info">
                <p class="building__card-label">
                  СКОРО
                </p>
              </div>
            </div>
            <div class="building__card-content">
              <h3 class="building__card-title title title_25">
                Островский
              </h3>
              <p class="building__card-text text">
                Новый взгляд на городскую жизнь. Свободные планировки, более 45 м2 прогулочных зон, детских площаок и
                разноуровневая застройка домов для любителей размерености и спокойствия
              </p>
              <p class="building__card-price">
                от 4,3 млн руб.
              </p>
              <div class="building__card-footer">
                <div class="building__card-bot-wrap">
                  <p class="building__card-key">
                    Срок сдачи
                  </p>
                  <p class="building__card-value">
                    II квартал 2025
                  </p>
                </div>
                <div class="building__card-bot-wrap">
                  <p class="building__card-key">
                    Площадь
                  </p>
                  <p class="building__card-value">
                    от 28,72 до 83,61
                  </p>
                </div>
                <a class="building__card-link" href="/pages/kvartiry/">
                  128 квартир
                </a>
              </div>
            </div>
          </li>
          <li class="building__cards-item swiper-slide">
            <div class="building__card-img">
              <picture>
                <source srcset="/assets/img/building-2.webp" type="image/webp"><img src="/assets/img/building-2.jpg" alt="">
              </picture>
              <div class="building__card-info">
                <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12 0C12 2 8 6 4.80015 6M12 0V6.75M12 0C12 2 16 6 19.1998 6M12 27V14.625M12 6.75C10.6666 9.25 7.99983 14 1.59997 14M12 6.75V14.625M12 6.75C13.3334 9.25 16.0002 14 22.4 14M12 14.625C10.4 17.4583 5.75988 22.5 0 22.5M12 14.625C13.6001 17.4583 18.2401 22.5 24 22.5"
                    stroke="white" stroke-width="3" />
                </svg>
                <p class="building__card-label building__card-label_small">
                  Сосновый
                </p>
                <div class="building__card-info-btn">
                  Сдан
                </div>
              </div>
            </div>
            <div class="building__card-content">
              <h3 class="building__card-title title title_25">
                Сосновый квартал
              </h3>
              <p class="building__card-text text">
                «Сосновый» – уютный район из 8 малоэтажных домов в окружении соснового леса. Квартал для тех, кто ценит
                баланс городской и загородной жизни. <br><br>
                Места общего пользования, прогулочные зоны, Family-space и коммерческие помещения созданные,
                чтобы делать вашу жизнь приятнее каждый день.
              </p>
              <p class="building__card-price">
                <!-- от 4,3 млн руб. -->
              </p>
              <div class="building__card-footer">
                <div class="building__card-bot-wrap">
                  <p class="building__card-key">
                    Срок сдачи
                  </p>
                  <p class="building__card-value">
                    II квартал 2025
                  </p>
                </div>
                <!-- <div class="building__card-bot-wrap">
                  <p class="building__card-key">
                    Площадь
                  </p>
                  <p class="building__card-value">
                    от 28,72 до 83,61
                  </p>
                </div>
                <p class="building__card-link">
                  128 квартир
                </p> -->
              </div>
            </div>
          </li>
        </ul>

        <div class="swiper-navigation">
          <div class="swiper-button swiper-button-prev-building">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

          <div class="swiper-button swiper-button-next-building">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>
        </div>

      </div>

    </section>

    <section class="section section_choice choice">
      <div class="container choice__container">
        <h2 class="choice__title title title_40">
          Выбрать квартиру мечты

        </h2>

        <div class="choice__form" data-form>

          <div class="choice__input-block choice__input-block_select choice__input-block_project">
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
                  <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </span>
              <ul class="select__list select__list_carton">
                <li class="select__item" data-id="sosnoviy">Сосновый</li>
                <!-- <li class="select__item" data-id="duboviy">Дубовый</li> -->
                <!-- <li class="select__item" data-id="berezoviy">Березовый</li> -->
              </ul>
            </div>
          </div>

          <div class="choice__input-block choice__input-block_buttons choice__input-block_buttons_rooms">
            <p class="choice__label">
              Комнат
            </p>
            <div class="choice__buttons-select select-frame">
              <button class="choice__buttons-select-item" data-id="s">
                Студия
              </button>
              <button class="choice__buttons-select-item" data-id="1">
                1
              </button>
              <button class="choice__buttons-select-item" data-id="2">
                2
              </button>
              <button class="choice__buttons-select-item" data-id="3">
                3
              </button>
              <button class="choice__buttons-select-item" data-id="4">
                3+
              </button>
            </div>
          </div>

          <div class="choice__input-block choice__input-block_slider choice__input-block_slider_square">
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

              <span class="select__separator">
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
          </div>

          <div class="choice__btns-block">
            <button class="choice__btn-filter" data-id="promotion" style="display: none;">
              Акция
              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.75" y="1.25" width="17.5" height="17.5" rx="8.75" stroke="#56693E" stroke-width="1.5" />
                <path
                  d="M7.95597 12.2209V12.1009C7.95904 11.5438 8.01136 11.1006 8.11293 10.7713C8.21757 10.442 8.36529 10.1773 8.55611 9.97727C8.74692 9.77415 8.97929 9.58795 9.2532 9.41868C9.44093 9.30173 9.60866 9.17401 9.75639 9.03551C9.9072 8.89394 10.0257 8.73698 10.1119 8.56463C10.198 8.3892 10.2411 8.19377 10.2411 7.97834C10.2411 7.7352 10.1842 7.52438 10.0703 7.34588C9.95644 7.16738 9.80256 7.02888 9.60867 6.9304C9.41785 6.83191 9.20395 6.78267 8.96697 6.78267C8.74846 6.78267 8.54072 6.83037 8.34375 6.92578C8.14986 7.01811 7.98828 7.15968 7.85902 7.3505C7.73284 7.53823 7.66205 7.77675 7.64666 8.06605H6.0032C6.01858 7.4813 6.16016 6.99195 6.42791 6.59801C6.69875 6.20407 7.05575 5.90862 7.49893 5.71165C7.94519 5.51468 8.43762 5.41619 8.97621 5.41619C9.56404 5.41619 10.0811 5.51929 10.5273 5.7255C10.9767 5.9317 11.326 6.22562 11.5753 6.60724C11.8277 6.9858 11.9538 7.43513 11.9538 7.95526C11.9538 8.30611 11.8969 8.62003 11.783 8.89702C11.6722 9.17401 11.5137 9.42022 11.3075 9.63565C11.1013 9.85109 10.8567 10.0434 10.5735 10.2127C10.3242 10.3666 10.1196 10.5266 9.95952 10.6928C9.80256 10.859 9.68561 11.0545 9.60867 11.2791C9.5348 11.5007 9.49633 11.7746 9.49325 12.1009V12.2209H7.95597ZM8.75923 15.1016C8.48224 15.1016 8.24373 15.0031 8.04368 14.8061C7.84363 14.6091 7.74361 14.3691 7.74361 14.0859C7.74361 13.8089 7.84363 13.572 8.04368 13.375C8.24373 13.178 8.48224 13.0795 8.75923 13.0795C9.03314 13.0795 9.27012 13.178 9.47017 13.375C9.6733 13.572 9.77486 13.8089 9.77486 14.0859C9.77486 14.2737 9.72715 14.4445 9.63175 14.5984C9.53942 14.7522 9.41631 14.8754 9.26243 14.9677C9.11162 15.0569 8.94389 15.1016 8.75923 15.1016Z"
                  fill="#56693E" />
              </svg>
            </button>
            <button class="choice__btn-filter" data-id="today" style="display: none;">
              Ключи сегодня
              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.75" y="1.25" width="17.5" height="17.5" rx="8.75" stroke="#56693E" stroke-width="1.5" />
                <path
                  d="M7.95597 12.2209V12.1009C7.95904 11.5438 8.01136 11.1006 8.11293 10.7713C8.21757 10.442 8.36529 10.1773 8.55611 9.97727C8.74692 9.77415 8.97929 9.58795 9.2532 9.41868C9.44093 9.30173 9.60866 9.17401 9.75639 9.03551C9.9072 8.89394 10.0257 8.73698 10.1119 8.56463C10.198 8.3892 10.2411 8.19377 10.2411 7.97834C10.2411 7.7352 10.1842 7.52438 10.0703 7.34588C9.95644 7.16738 9.80256 7.02888 9.60867 6.9304C9.41785 6.83191 9.20395 6.78267 8.96697 6.78267C8.74846 6.78267 8.54072 6.83037 8.34375 6.92578C8.14986 7.01811 7.98828 7.15968 7.85902 7.3505C7.73284 7.53823 7.66205 7.77675 7.64666 8.06605H6.0032C6.01858 7.4813 6.16016 6.99195 6.42791 6.59801C6.69875 6.20407 7.05575 5.90862 7.49893 5.71165C7.94519 5.51468 8.43762 5.41619 8.97621 5.41619C9.56404 5.41619 10.0811 5.51929 10.5273 5.7255C10.9767 5.9317 11.326 6.22562 11.5753 6.60724C11.8277 6.9858 11.9538 7.43513 11.9538 7.95526C11.9538 8.30611 11.8969 8.62003 11.783 8.89702C11.6722 9.17401 11.5137 9.42022 11.3075 9.63565C11.1013 9.85109 10.8567 10.0434 10.5735 10.2127C10.3242 10.3666 10.1196 10.5266 9.95952 10.6928C9.80256 10.859 9.68561 11.0545 9.60867 11.2791C9.5348 11.5007 9.49633 11.7746 9.49325 12.1009V12.2209H7.95597ZM8.75923 15.1016C8.48224 15.1016 8.24373 15.0031 8.04368 14.8061C7.84363 14.6091 7.74361 14.3691 7.74361 14.0859C7.74361 13.8089 7.84363 13.572 8.04368 13.375C8.24373 13.178 8.48224 13.0795 8.75923 13.0795C9.03314 13.0795 9.27012 13.178 9.47017 13.375C9.6733 13.572 9.77486 13.8089 9.77486 14.0859C9.77486 14.2737 9.72715 14.4445 9.63175 14.5984C9.53942 14.7522 9.41631 14.8754 9.26243 14.9677C9.11162 15.0569 8.94389 15.1016 8.75923 15.1016Z"
                  fill="#56693E" />
              </svg>
            </button>
            <button class="choice__btn-filter" data-id="balcony" style="display: none;">
              Балкон
            </button>
            <button class="choice__btn-filter" data-id="dressing_room" style="display: none;">
              Гардеробная
            </button>
            <button class="choice__btn-filter" data-id="two_side" style="display: none;">
              Окна на 2 стороны
            </button>
            <!-- <button class="choice__btn-filter" data-id="three_side">
              Окна на 3 стороны
            </button> -->
            <button class="choice__btn-filter" data-id="guest_bathroom" style="display: none;">
              Гостевой санузел
            </button>
            <button class="choice__btn-filter" data-id="kitchen_living_room" style="display: none;">
              Кухня-гостиная
            </button>
          </div>

          <div class="choice__btn-wrap">
            <p class="choice__search-text">
              найдено 5 квартир
            </p>
            <a class="choice__btn-request btn btn_dark" href="/pages/kvartiry/" onclick='getUrl()'>
              Смотреть квартиры
            </a>

            <button class="choice__btn-request choice__btn-request_mobile choice__btn-request_mobile_filter btn btn_dark">
              Фильтр
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="section section_regions regions">
      <div class="container regions__container regions_swiper">
        <h2 class="regions__title title title_40">
          В районах Сибири
        </h2>

        <ul class="regions__list swiper-wrapper">
          <li class="regions__item swiper-slide regions__item_1">
            <h3 class="regions__item-title">
              Гармония с природой
            </h3>

            <p class="regions__item-text">
              Уединенный район, будет отличным решением для любителей открытых естественных видов, вдали от тесной
              городской застройки и суеты.
            </p>
          </li>

          <li class="regions__item swiper-slide regions__item_2">
            <h3 class="regions__item-title">
              Тихий район
            </h3>

            <p class="regions__item-text">
              Удалённое от больших автомагистралей расположение и закрытый от машин и посторонних людей двор
            </p>
          </li>

          <li class="regions__item swiper-slide regions__item_3">
            <h3 class="regions__item-title">
              Все нужное рядом
            </h3>

            <p class="regions__item-text">
              Доступ к различным услугам и товарам прямо в доме исключает необходимость выезда в другие районы для
              получения бытовых услуг и товаров первой необходимости
            </p>
          </li>

          <li class="regions__item swiper-slide regions__item_4">
            <h3 class="regions__item-title">
              Уникальная экосистема
            </h3>

            <p class="regions__item-text">
              Мы сохранили среду, созданную природой: живописный сосновый лес, который даже зимой будут радовать жителей
              ярким зеленым обликом
            </p>
          </li>

          <li class="regions__item swiper-slide regions__item_5">
            <h3 class="regions__item-title">
              Закрытые и безопасные дворы без машин
            </h3>

            <p class="regions__item-text">
              Ваши дети смогут спокойно и безопасно находиться на прогулке, а вы заниматься домашними делами, наблюдая
              за ними прямо из окна
            </p>
          </li>

          <li class="regions__item swiper-slide regions__item_2">
            <h3 class="regions__item-title">
              Все нужное рядом
            </h3>

            <p class="regions__item-text">
              Доступ к различным услугам и товарам прямо в доме исключает необходимость выезда в другие районы для
              получения бытовых услуг и товаров первой необходимости
            </p>
          </li>
        </ul>

        <div class="regions-banner">
          <h3 class="regions-banner__title">
            У нас есть место для вашего бизнеса!
          </h3>
          <p class="regions-banner__text">
            Купите или арендуйте коммерческое помещение
          </p>
          <a class="regions-banner__button" href="/pages/kommercia/">
            Выбрать помещение
          </a>
        </div>

        <div class="swiper-navigation">
          <div class="swiper-button swiper-button-prev swiper-button-prev_reg">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

          <div class="swiper-button swiper-button-next swiper-button-next_reg">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

        </div>
      </div>


    </section>

    <section class="section section_apartments apartments">
      <div class="container apartments__container apartments_swiper">
        <div class="apartments__top-wrap">
          <h2 class="apartments__title title title_40">
            Квартиры
          </h2>

          <a class="apartments__button apartments__button_desc btn btn_dark" href="/pages/kvartiry/">
            Посмотреть все квартиры
          </a>
        </div>

        <ul class="apartments__list swiper-wrapper">

          <?
          // $result = mysqli_query($db, "SELECT * FROM apartments WHERE id = " . $_GET['id']);
          $result = mysqli_query($db, "SELECT * FROM apartments WHERE commerce = 0 LIMIT 8");

          $row = mysqli_fetch_array($result);

          // if ($row == '') {
          //   echo 'Ничего не нашлось';
          // }

          // echo '<pre>';
          // print_r($row);
          // echo '</pre>';

          // Сосновый | ГП 8 | 1 / 2 этаж

          if (mysqli_num_rows($result) > 0) {
            do {
              echo '
      <li class="apartments__item swiper-slide">
      <a class="apartments__item-link" href="/pages/apartments-item/?id=' . $row['id'] . '">
        <h5 class="apartments__item-title">
          ' . $row['complex'] . ' | ГП ' . $row['house'] . ' | ' . $row['stage'] . ' этаж' . '                    
        </h5>
        <div class="apartments__item-img">
            <img src="/assets/img/' . $row['image'] . '" alt="планировка квартиры">
        </div>

        <p class="apartments__item-desc">
          ' . $row['number_of_rooms'] . '-комнатная ' . $row['area'] . 'м2
        </p>

        <div class="apartments__item-price-wrap">
          <p class="apartments__item-new-price">
            ' . number_format($row['price'], 0, '', ' ') . ' ₽
          </p>
          <p class="apartments__item-old-price">
          ' . number_format($row['price'] * 1.2, 0, '', ' ') . ' ₽
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
      ';
            } while ($row = mysqli_fetch_array($result));
          }
          ?>

        </ul>

        <a class="apartments__button apartments__button_mob btn btn_green" href="/pages/kvartiry/">
          Посмотреть все квартиры
        </a>

        <div class="swiper-navigation">
          <div class="swiper-button swiper-button-prev swiper-button-prev_apart">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

          <div class="swiper-button swiper-button-next swiper-button-next_apart">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

        </div>
      </div>


    </section>

    <section class="section section_promo promo">
      <div class="container promo__container">
        <h2 class="promo__title title title_40">
          Акции
        </h2>

        <div class="promo__slider-wrap promo_swiper">
          <ul class="promo__list swiper-wrapper">
            <?
            // include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';
            // $result = mysqli_query($db, "SELECT * FROM apartments WHERE id = " . $_GET['id']);
            $result = mysqli_query($db, "SELECT * FROM events");

            $row = mysqli_fetch_array($result);

            // if ($row == '') {
            //   echo 'Ничего не нашлось';
            // }

            // echo '<pre>';
            // print_r($row);
            // echo '</pre>';

            // Сосновый | ГП 8 | 1 / 2 этаж

            if (mysqli_num_rows($result) > 0) {
              do {
                $now = date('Y-m-d H:i:s');
                $time = date('Y-m-d H:i:s', strtotime($row['time']));
                $dateDiff = date_diff(date_create($now), date_create($time));
                // echo $dateDiff->format("%a");
                echo '
                  <li class="promo__item swiper-slide">
                    <div class="promo__item-img">
                      <img src="/assets/img/' . $row['image'] . '" alt="promo_1">
                    </div>

                    <p class="promo__item-date">
                      До ' . date("d", strtotime($row['time'])) . ' '
                  . monthRus(date("m", strtotime($row['time'])), 'rod', 2) . ' '
                  . date("Y", strtotime($row['time'])) . '
                    </p>
                    <p class="promo__item-period">
                      Осталось ' . num_word($dateDiff->format("%a"), ['день', 'дня', 'дней']) . ' 

                      
                      <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M8 15.5C6.61553 15.5 5.26216 15.0895 4.11101 14.3203C2.95987 13.5511 2.06266 12.4579 1.53285 11.1788C1.00303 9.8997 0.86441 8.49224 1.13451 7.13437C1.4046 5.7765 2.07129 4.52922 3.05026 3.55026C4.02922 2.57129 5.2765 1.9046 6.63437 1.63451C7.99224 1.36441 9.3997 1.50303 10.6788 2.03285C11.9579 2.56266 13.0511 3.45987 13.8203 4.61101C14.5895 5.76216 15 7.11553 15 8.5C15 10.3565 14.2625 12.137 12.9497 13.4497C11.637 14.7625 9.85652 15.5 8 15.5ZM8 2.5C6.81332 2.5 5.65328 2.8519 4.66658 3.51119C3.67989 4.17047 2.91085 5.10755 2.45673 6.2039C2.0026 7.30026 1.88378 8.50666 2.11529 9.67054C2.3468 10.8344 2.91825 11.9035 3.75736 12.7426C4.59648 13.5818 5.66558 14.1532 6.82946 14.3847C7.99335 14.6162 9.19975 14.4974 10.2961 14.0433C11.3925 13.5892 12.3295 12.8201 12.9888 11.8334C13.6481 10.8467 14 9.68669 14 8.5C14 6.9087 13.3679 5.38258 12.2426 4.25736C11.1174 3.13214 9.5913 2.5 8 2.5Z"
                          fill="black" />
                        <path d="M10.295 11.5L7.5 8.705V4H8.5V8.29L11 10.795L10.295 11.5Z" fill="black" />
                      </svg>
                    </p>
                    <button class="promo__item-title promo-link" data-id="' . $row['id'] . '">
                      ' . $row['title'] . '
                    </button>
                  </li>
                ';
              } while ($row = mysqli_fetch_array($result));
            }
            ?>
          </ul>

        </div>

        <a class="promo__link" href="/pages/akcii/">
          <p class="promo__link-text">
            Подпишитесь на рассылку акций, новостей и многого другого
          </p>
          <div class="promo__link-arrow">
            <svg width="61" height="62" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_416_6988)">
                <rect x="3" y="3.5" width="55" height="55" rx="27.5" fill="white" />
                <rect x="3.5" y="4" width="54" height="54" rx="27" stroke="#646464" />
                <path d="M26 23.5L35 31L26 38.5" stroke="#646464" stroke-width="2" stroke-linejoin="round" />
              </g>
              <defs>
                <filter id="filter0_d_416_6988" x="0" y="0.5" width="61" height="61" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset />
                  <feGaussianBlur stdDeviation="1.5" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix type="matrix"
                    values="0 0 0 0 0.393385 0 0 0 0 0.393385 0 0 0 0 0.393385 0 0 0 0.1 0" />
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_416_6988" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_416_6988" result="shape" />
                </filter>
              </defs>
            </svg>
          </div>
        </a>

        <div class="swiper-navigation">
          <div class="swiper-button swiper-button-prev swiper-button-prev_promo">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

          <div class="swiper-button swiper-button-next swiper-button-next_promo">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

        </div>
      </div>
    </section>

    <section class="section section_news news">
      <div class="container news__container news_swiper">
        <h2 class="news__title title title_40">
          Что нового
        </h2>

        <ul class="news__list swiper-wrapper">

          <?
          // $result = mysqli_query($db, "SELECT * FROM apartments WHERE id = " . $_GET['id']);
          $result = mysqli_query($db, "SELECT * FROM news ORDER BY DATE DESC LIMIT 8");

          $row = mysqli_fetch_array($result);

          // if ($row == '') {
          //   echo 'Ничего не нашлось';
          // }

          // echo '<pre>';
          // print_r($row);
          // echo '</pre>';

          // Сосновый | ГП 8 | 1 / 2 этаж

          if (mysqli_num_rows($result) > 0) {
            do {
              echo '
                <li class="news-slider__cards-item swiper-slide">
                  <div class="news-slider__card-img-wrapper">
                      <img src="/assets/img/' . $row['photo'] . '" alt="' . $row['title'] . '">
                  </div>
                  <p class="news-slider__card-date">
                    ' . date("d.m.Y", strtotime($row['date'])) . '
                  </p>
                  <a class="news-slider__card-link" href="/pages/novosti-item/?id=' . $row['id'] . '">
                    ' . $row['title'] . '
                  </a>
                </li>
                ';
            } while ($row = mysqli_fetch_array($result));
          }
          ?>
        </ul>

        <a class="news-slider__button btn btn_white" href="/pages/novosti/">
          Все новости
        </a>
        <div class="swiper-navigation">
          <div class="swiper-button swiper-button-prev swiper-button-prev_news">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

          <div class="swiper-button swiper-button-next swiper-button-next_news">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
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