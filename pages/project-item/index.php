<?
$title = 'Проект';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="project-item-page">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main project-item-page__main">
    <section class="section section_about about">
      <div class="container about__container">

        <div class="about__top-block">
          <h2 class="about__title title title_40">
            Сосновый квартал
          </h2>

          <a class="about__link btn btn_dark" href="/pages/kvartiry/">
            Смотреть квартиры
          </a>

        </div>

        <section id="iframe"></section>

        <!-- <div class="about__img-wrap">
          <picture>
            <source srcset="/assets/img/gen-plan-img.webp" type="image/webp"><img class="about__img" src="/assets/img/gen-plan-img.jpg" alt="геплан">
          </picture>
          <svg class="gp gp_1" width="237" height="380" viewBox="0 0 237 380" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M18 106.5L26.5 11L155 0.5L163.5 87.5L165 102H174.5L177.5 139H169L171 167.5L218 162.5L230 243L236.5 337L176 345V356L21.5 379.5L0.5 283L14.5 137L23 136L18 106.5Z"
              fill="#56693E" fill-opacity="0.01" />
          </svg>
          <svg class="gp gp_2" width="315" height="333" viewBox="0 0 315 333" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M0.5 88.5L5 11L114.5 0.5L186 81.5L184.5 93L196 106.5L208 105L314.5 225L288.5 315L166.5 332.5L161 325L108 332.5L64.5 254.5L73 184L64 172H54L34.5 142.5H25.5L26 129.5L0.5 88.5Z"
              fill="#56693E" fill-opacity="0.01" />
          </svg>
          <svg class="gp gp_3" width="254" height="184" viewBox="0 0 254 184" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6 125L0.5 69L189.5 0.5L254 28.5L252 101L217 116.5V121L134 160.5L128 157L70.5 184L15.5 150.5L13 124.5L6 125Z"
              fill="#56693E" fill-opacity="0.01" />
          </svg>

          <svg class="gp gp-no" width="553" height="276" viewBox="0 0 553 276" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5"
              d="M0.5 155L2 90L125.5 49.5L183.5 68.5L181 88.5L191.5 85.5L197 29.5L287.5 0.5L343.5 14L335 63L363.5 51L428.5 68.5L416 125L445.5 134L470.5 119.5L552.5 142.5L533.5 208L521.5 216.5L520.5 225L477.5 256.5L472.5 254.5L443.5 275.5L242.5 203.5L223 212.5V218.5L163 250L158 247.5L117 268.5L48 237L50.5 175.5L0.5 155Z"
              fill="white" />
          </svg>
          <div class="about__img-first">
            1 очередь
          </div>
          <div class="about__img-second">
            2 очередь
          </div>

        </div> -->

      </div>
    </section>

    <section class="section section_slim slim">

      <section class="section section_slider slider" id="about-project">
        <div class="container slider__container ">
          <div class="slider__wrap wrap">
            <p class="slider__subtitle">
              О проекте
            </p>

            <div class="slider__header">
              <h1 class="slider__title">
                Хвойная мечта в самом сердце леса
              </h1>

              <p class="slider__text text">
                «Сосновый» – уютный район из 8 малоэтажных домов в окружении соснового леса. Квартал для тех,
                кто ценит баланс
                городской и загородной жизни. <br><br>
                Места общего пользования, прогулочные зоны, Family-space и коммерческие помещения созданные,
                чтобы делать вашу
                жизнь приятнее каждый день.
              </p>

              <a class="slider__button btn btn_white" href="#map">
                На карте
              </a>
            </div>

            <div class="slider__right slider_swiper">
              <ul class="slider__list swiper-wrapper">
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-1.webp" type="image/webp"><img src="/assets/img/slide-1.jpg" alt="фасад дома">
                  </picture>
                </li>
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-2.webp" type="image/webp"><img src="/assets/img/slide-2.jpg" alt="фасад дома">
                  </picture>
                </li>
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-3.webp" type="image/webp"><img src="/assets/img/slide-3.jpg" alt="фасад дома">
                  </picture>
                </li>
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-4.webp" type="image/webp"><img src="/assets/img/slide-4.jpg" alt="фасад дома">
                  </picture>
                </li>
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-5.webp" type="image/webp"><img src="/assets/img/slide-5.jpg" alt="фасад дома">
                  </picture>
                </li>
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-6.webp" type="image/webp"><img src="/assets/img/slide-6.jpg" alt="фасад дома">
                  </picture>
                </li>
                <li class="slider__item swiper-slide">
                  <picture>
                    <source srcset="/assets/img/slide-7.webp" type="image/webp"><img src="/assets/img/slide-7.jpg" alt="фасад дома">
                  </picture>
                </li>
              </ul>

              <div class="swiper-button swiper-button-prev swiper-button-prev_slider">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    fill="white" />
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    stroke="white" />
                  <path d="M32 20L23 27.5L32 35" stroke="#748D55" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <div class="swiper-button swiper-button-next swiper-button-next_slider">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    fill="white" />
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    stroke="white" />
                  <path d="M23 20L32 27.5L23 35" stroke="#748D55" stroke-width="2" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>

          <aside class="slider__aside aside">
          </aside>
        </div>
      </section>

      <section class="section section_choice choice">
        <div class="container choice__container">
          <div class="choice__wrap wrap">
            <h2 class="choice__title title title_40">
              Выбрать квартиру мечты
            </h2>

            <div class="choice__form" choice-form>

              <div class="choice__input-block choice__input-block_select_project">
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
                    <!-- <li class="select__item" data-id="Сосновый">Сосновый</li> -->
                    <!-- <li class="select__item" data-id="duboviy">Дубовый</li> -->
                    <!-- <li class="select__item" data-id="berezoviy">Березовый</li> -->
                  </ul>
                </div>
              </div>

              <div class="choice__input-block choice__input-block_buttons_rooms">
                <p class="choice__label">
                  Комнат
                </p>
                <div class="choice__buttons-select select-frame">
                  <button class="choice__buttons-select-item" data-id="11">
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

              <div class="choice__input-block choice__input-block_slider_square">
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
                <button class="choice__btn-filter" data-id="optionPromotion">
                  Акция
                  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.75" y="1.25" width="17.5" height="17.5" rx="8.75" stroke="#56693E" stroke-width="1.5" />
                    <path
                      d="M7.95597 12.2209V12.1009C7.95904 11.5438 8.01136 11.1006 8.11293 10.7713C8.21757 10.442 8.36529 10.1773 8.55611 9.97727C8.74692 9.77415 8.97929 9.58795 9.2532 9.41868C9.44093 9.30173 9.60866 9.17401 9.75639 9.03551C9.9072 8.89394 10.0257 8.73698 10.1119 8.56463C10.198 8.3892 10.2411 8.19377 10.2411 7.97834C10.2411 7.7352 10.1842 7.52438 10.0703 7.34588C9.95644 7.16738 9.80256 7.02888 9.60867 6.9304C9.41785 6.83191 9.20395 6.78267 8.96697 6.78267C8.74846 6.78267 8.54072 6.83037 8.34375 6.92578C8.14986 7.01811 7.98828 7.15968 7.85902 7.3505C7.73284 7.53823 7.66205 7.77675 7.64666 8.06605H6.0032C6.01858 7.4813 6.16016 6.99195 6.42791 6.59801C6.69875 6.20407 7.05575 5.90862 7.49893 5.71165C7.94519 5.51468 8.43762 5.41619 8.97621 5.41619C9.56404 5.41619 10.0811 5.51929 10.5273 5.7255C10.9767 5.9317 11.326 6.22562 11.5753 6.60724C11.8277 6.9858 11.9538 7.43513 11.9538 7.95526C11.9538 8.30611 11.8969 8.62003 11.783 8.89702C11.6722 9.17401 11.5137 9.42022 11.3075 9.63565C11.1013 9.85109 10.8567 10.0434 10.5735 10.2127C10.3242 10.3666 10.1196 10.5266 9.95952 10.6928C9.80256 10.859 9.68561 11.0545 9.60867 11.2791C9.5348 11.5007 9.49633 11.7746 9.49325 12.1009V12.2209H7.95597ZM8.75923 15.1016C8.48224 15.1016 8.24373 15.0031 8.04368 14.8061C7.84363 14.6091 7.74361 14.3691 7.74361 14.0859C7.74361 13.8089 7.84363 13.572 8.04368 13.375C8.24373 13.178 8.48224 13.0795 8.75923 13.0795C9.03314 13.0795 9.27012 13.178 9.47017 13.375C9.6733 13.572 9.77486 13.8089 9.77486 14.0859C9.77486 14.2737 9.72715 14.4445 9.63175 14.5984C9.53942 14.7522 9.41631 14.8754 9.26243 14.9677C9.11162 15.0569 8.94389 15.1016 8.75923 15.1016Z"
                      fill="#56693E" />
                  </svg>
                </button>
                <button class="choice__btn-filter" data-id="optionKeyToday">
                  Ключи сегодня
                  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.75" y="1.25" width="17.5" height="17.5" rx="8.75" stroke="#56693E" stroke-width="1.5" />
                    <path
                      d="M7.95597 12.2209V12.1009C7.95904 11.5438 8.01136 11.1006 8.11293 10.7713C8.21757 10.442 8.36529 10.1773 8.55611 9.97727C8.74692 9.77415 8.97929 9.58795 9.2532 9.41868C9.44093 9.30173 9.60866 9.17401 9.75639 9.03551C9.9072 8.89394 10.0257 8.73698 10.1119 8.56463C10.198 8.3892 10.2411 8.19377 10.2411 7.97834C10.2411 7.7352 10.1842 7.52438 10.0703 7.34588C9.95644 7.16738 9.80256 7.02888 9.60867 6.9304C9.41785 6.83191 9.20395 6.78267 8.96697 6.78267C8.74846 6.78267 8.54072 6.83037 8.34375 6.92578C8.14986 7.01811 7.98828 7.15968 7.85902 7.3505C7.73284 7.53823 7.66205 7.77675 7.64666 8.06605H6.0032C6.01858 7.4813 6.16016 6.99195 6.42791 6.59801C6.69875 6.20407 7.05575 5.90862 7.49893 5.71165C7.94519 5.51468 8.43762 5.41619 8.97621 5.41619C9.56404 5.41619 10.0811 5.51929 10.5273 5.7255C10.9767 5.9317 11.326 6.22562 11.5753 6.60724C11.8277 6.9858 11.9538 7.43513 11.9538 7.95526C11.9538 8.30611 11.8969 8.62003 11.783 8.89702C11.6722 9.17401 11.5137 9.42022 11.3075 9.63565C11.1013 9.85109 10.8567 10.0434 10.5735 10.2127C10.3242 10.3666 10.1196 10.5266 9.95952 10.6928C9.80256 10.859 9.68561 11.0545 9.60867 11.2791C9.5348 11.5007 9.49633 11.7746 9.49325 12.1009V12.2209H7.95597ZM8.75923 15.1016C8.48224 15.1016 8.24373 15.0031 8.04368 14.8061C7.84363 14.6091 7.74361 14.3691 7.74361 14.0859C7.74361 13.8089 7.84363 13.572 8.04368 13.375C8.24373 13.178 8.48224 13.0795 8.75923 13.0795C9.03314 13.0795 9.27012 13.178 9.47017 13.375C9.6733 13.572 9.77486 13.8089 9.77486 14.0859C9.77486 14.2737 9.72715 14.4445 9.63175 14.5984C9.53942 14.7522 9.41631 14.8754 9.26243 14.9677C9.11162 15.0569 8.94389 15.1016 8.75923 15.1016Z"
                      fill="#56693E" />
                  </svg>
                </button>
                <button class="choice__btn-filter" data-id="optionBalcony">
                  Балкон
                </button>
                <button class="choice__btn-filter" data-id="optionDressRoom">
                  Гардеробная
                </button>
                <button class="choice__btn-filter" data-id="optionTwoSide">
                  Окна на 2 стороны
                </button>
                <button class="choice__btn-filter" data-id="optionThreeSide">
                  Окна на 3 стороны
                </button>
                <button class="choice__btn-filter" data-id="optionGuestBathroom">
                  Гостевой санузел
                </button>
                <button class="choice__btn-filter" data-id="optionKitchenLiving">
                  Кухня-гостиная
                </button>
              </div>

              <div class="choice__btn-wrap">
                <p class="choice__search-text">
                  Найдено 5 квартир
                </p>
                <a class="choice__btn-request choice__btn-request_link btn btn_dark" href="/pages/kvartiry/">
                  Смотреть квартиры
                </a>

                <!-- TODO фильтры не считываются из строки -->

                <button class="choice__btn-request choice__btn-request_mobile choice__btn-request_mobile_filter btn btn_dark">
                  Фильтр
                </button>
              </div>
            </div>
          </div>

          <aside class="choice__aside aside">
          </aside>
        </div>
      </section>

      <section class="section section_regions regions" id="advantages">
        <div class="container regions__container">
          <div class="regions__wrap wrap regions_swiper_small">
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
                  Мы сохранили среду, созданную природой: живописный сосновый лес, который даже зимой будут радовать
                  жителей
                  ярким зеленым обликом
                </p>
              </li>

              <li class="regions__item swiper-slide regions__item_5">
                <h3 class="regions__item-title">
                  Закрытые и безопасные дворы без машин
                </h3>

                <p class="regions__item-text">
                  Ваши дети смогут спокойно и безопасно находиться на прогулке, а вы заниматься домашними делами,
                  наблюдая
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

            <div class="swiper-navigation">
              <div class="swiper-button swiper-button-prev swiper-button-prev_reg">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.8">
                    <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                      stroke="#CBCBCB" />
                    <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2"
                      stroke-linejoin="round" />
                  </g>
                </svg>
              </div>

              <div class="swiper-button swiper-button-next swiper-button-next_reg">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.8">
                    <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                      stroke="#CBCBCB" />
                    <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2"
                      stroke-linejoin="round" />
                  </g>
                </svg>
              </div>

            </div>
          </div>

          <aside class="regions__aside aside">
          </aside>

        </div>

      </section>

      <section class="section section_geo geo" id="location">
        <div class="container geo__container">
          <div class="geo__wrap wrap">

            <h2 class="geo__title title title_40">
              Местоположение
            </h2>

            <p class="geo__desc text">
              Жилой квартал «Сосновый» располагается в благоприятной природной зоне в окружении сосновой рощи,
              где круглый год можно наслаждаться свежим воздухом, пением птиц, тишиной и покоем.
            </p>

            <ul class="geo__advantages-list">

              <li class="geo__advantages-item">
                <h4 class="geo__advantages-title">
                  18 минут
                </h4>
                <span class="geo__advantages-icon">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M19.955 11.5H4.045C4.03247 11.5575 4.02246 11.6156 4.015 11.674C4 11.8 4 11.926 4 12.18V17.5H8H16H20V12.174C20 11.924 20 11.798 19.984 11.674C19.977 11.616 19.968 11.558 19.955 11.5Z"
                      fill="#9ABC6F"></path>
                    <path
                      d="M3 11.5H4.045M4.045 11.5H19.955M4.045 11.5C4.057 11.448 4.07 11.398 4.085 11.347C4.13855 11.1875 4.20201 11.0316 4.275 10.88L5.822 7.4C6.127 6.713 6.28 6.368 6.522 6.116C6.736 5.893 6.998 5.723 7.288 5.618C7.617 5.5 7.993 5.5 8.746 5.5H15.254C16.006 5.5 16.384 5.5 16.712 5.618C17.002 5.723 17.264 5.893 17.477 6.116C17.719 6.368 17.872 6.712 18.177 7.399L19.73 10.892C19.829 11.115 19.88 11.229 19.915 11.347C19.93 11.397 19.943 11.448 19.955 11.5M4.045 11.5C4.03247 11.5575 4.02246 11.6156 4.015 11.674C4 11.8 4 11.926 4 12.18V17.5M19.955 11.5H21M19.955 11.5C19.968 11.558 19.977 11.616 19.984 11.674C20 11.798 20 11.924 20 12.174V17.5M4 17.5H8M4 17.5V18.5C4 19.0304 4.21071 19.5391 4.58579 19.9142C4.96086 20.2893 5.46957 20.5 6 20.5C6.53043 20.5 7.03914 20.2893 7.41421 19.9142C7.78929 19.5391 8 19.0304 8 18.5V17.5M20 17.5H16M20 17.5V18.5C20 19.0304 19.7893 19.5391 19.4142 19.9142C19.0391 20.2893 18.5304 20.5 18 20.5C17.4696 20.5 16.9609 20.2893 16.5858 19.9142C16.2107 19.5391 16 19.0304 16 18.5V17.5M16 17.5H8"
                      stroke="#9ABC6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
                <p class="geo__advantages-desc">
                  до окружной дороги
                </p>
              </li>

              <li class="geo__advantages-item">
                <h4 class="geo__advantages-title">
                  3 минуты
                </h4>
                <span class="geo__advantages-icon">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.0939 3.98063C13.0939 4.50593 12.8853 5.00971 12.5138 5.38115C12.1424 5.75259 11.6386 5.96126 11.1133 5.96126C10.588 5.96126 10.0842 5.75259 9.7128 5.38115C9.34136 5.00971 9.13268 4.50593 9.13268 3.98063C9.13268 3.45534 9.34136 2.95155 9.7128 2.58011C10.0842 2.20867 10.588 2 11.1133 2C11.6386 2 12.1424 2.20867 12.5138 2.58011C12.8853 2.95155 13.0939 3.45534 13.0939 3.98063ZM9.05346 6.95422C9.14625 6.84972 9.26012 6.76605 9.38756 6.7087C9.515 6.65135 9.65314 6.62162 9.79289 6.62147H11.7009C12.6807 6.62147 13.4439 7.4705 13.3422 8.44366L12.7744 13.8349C12.7554 14.0126 12.7164 14.1876 12.6582 14.3565L12.2383 15.5528L12.5196 15.8723C12.5796 15.9425 12.6302 16.0201 12.6701 16.1034L15.3109 21.7152C15.3703 21.8334 15.4053 21.9622 15.4141 22.0941C15.4228 22.226 15.4051 22.3584 15.3619 22.4833C15.3186 22.6082 15.2509 22.7233 15.1625 22.8216C15.0741 22.9199 14.9669 22.9996 14.8473 23.0558C14.7276 23.1121 14.5979 23.1438 14.4658 23.1491C14.3337 23.1545 14.2019 23.1333 14.0781 23.0868C13.9543 23.0404 13.8411 22.9697 13.7451 22.8788C13.6491 22.7879 13.5723 22.6787 13.5191 22.5576L10.9364 17.0726L8.71807 14.5361C8.54734 14.3421 8.45921 14.089 8.47247 13.831L8.65469 10.3807L8.08031 11.0264L7.46763 14.7051C7.42456 14.9642 7.2803 15.1957 7.0666 15.3484C6.8529 15.5012 6.58726 15.5629 6.32811 15.5198C6.06896 15.4767 5.83754 15.3325 5.68476 15.1188C5.53197 14.9051 5.47034 14.6394 5.51341 14.3803L6.17362 10.419C6.20457 10.2348 6.28697 10.0632 6.4113 9.92385L9.05214 6.9529L9.05346 6.95422Z"
                      fill="#9ABC6F"></path>
                    <path
                      d="M8.80236 17.5084V15.6361L10.3921 17.4516L10.7368 18.1435C10.701 18.2532 10.6474 18.3562 10.5783 18.4486L7.27728 22.7399C7.11724 22.9483 6.88098 23.0846 6.62047 23.1187C6.35997 23.1529 6.09656 23.0822 5.88819 22.9221C5.67983 22.7621 5.54357 22.5258 5.5094 22.2653C5.47522 22.0048 5.54593 21.7414 5.70597 21.5331L8.80236 17.5084ZM14.3745 11.9428L13.7223 11.2906L13.9929 8.85702L14.0009 8.76855L15.485 10.2527H17.3864C17.6491 10.2527 17.901 10.357 18.0867 10.5428C18.2724 10.7285 18.3767 10.9804 18.3767 11.243C18.3767 11.5057 18.2724 11.7576 18.0867 11.9433C17.901 12.129 17.6491 12.2333 17.3864 12.2333H15.0744C14.9441 12.2334 14.8152 12.2078 14.6949 12.1579C14.5745 12.1081 14.4652 12.035 14.3732 11.9428H14.3745Z"
                      fill="#9ABC6F"></path>
                  </svg>
                </span>
                <p class="geo__advantages-desc">
                  до сосновой рощи
                </p>
              </li>

              <li class="geo__advantages-item">
                <h4 class="geo__advantages-title">
                  1 минута
                </h4>
                <span class="geo__advantages-icon">
                  <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.0939 3.98063C13.0939 4.50593 12.8853 5.00971 12.5138 5.38115C12.1424 5.75259 11.6386 5.96126 11.1133 5.96126C10.588 5.96126 10.0842 5.75259 9.7128 5.38115C9.34136 5.00971 9.13268 4.50593 9.13268 3.98063C9.13268 3.45534 9.34136 2.95155 9.7128 2.58011C10.0842 2.20867 10.588 2 11.1133 2C11.6386 2 12.1424 2.20867 12.5138 2.58011C12.8853 2.95155 13.0939 3.45534 13.0939 3.98063ZM9.05346 6.95422C9.14625 6.84972 9.26012 6.76605 9.38756 6.7087C9.515 6.65135 9.65314 6.62162 9.79289 6.62147H11.7009C12.6807 6.62147 13.4439 7.4705 13.3422 8.44366L12.7744 13.8349C12.7554 14.0126 12.7164 14.1876 12.6582 14.3565L12.2383 15.5528L12.5196 15.8723C12.5796 15.9425 12.6302 16.0201 12.6701 16.1034L15.3109 21.7152C15.3703 21.8334 15.4053 21.9622 15.4141 22.0941C15.4228 22.226 15.4051 22.3584 15.3619 22.4833C15.3186 22.6082 15.2509 22.7233 15.1625 22.8216C15.0741 22.9199 14.9669 22.9996 14.8473 23.0558C14.7276 23.1121 14.5979 23.1438 14.4658 23.1491C14.3337 23.1545 14.2019 23.1333 14.0781 23.0868C13.9543 23.0404 13.8411 22.9697 13.7451 22.8788C13.6491 22.7879 13.5723 22.6787 13.5191 22.5576L10.9364 17.0726L8.71807 14.5361C8.54734 14.3421 8.45921 14.089 8.47247 13.831L8.65469 10.3807L8.08031 11.0264L7.46763 14.7051C7.42456 14.9642 7.2803 15.1957 7.0666 15.3484C6.8529 15.5012 6.58726 15.5629 6.32811 15.5198C6.06896 15.4767 5.83754 15.3325 5.68476 15.1188C5.53197 14.9051 5.47034 14.6394 5.51341 14.3803L6.17362 10.419C6.20457 10.2348 6.28697 10.0632 6.4113 9.92385L9.05214 6.9529L9.05346 6.95422Z"
                      fill="#9ABC6F"></path>
                    <path
                      d="M8.80236 17.5084V15.6361L10.3921 17.4516L10.7368 18.1435C10.701 18.2532 10.6474 18.3562 10.5783 18.4486L7.27728 22.7399C7.11724 22.9483 6.88098 23.0846 6.62047 23.1187C6.35997 23.1529 6.09656 23.0822 5.88819 22.9221C5.67983 22.7621 5.54357 22.5258 5.5094 22.2653C5.47522 22.0048 5.54593 21.7414 5.70597 21.5331L8.80236 17.5084ZM14.3745 11.9428L13.7223 11.2906L13.9929 8.85702L14.0009 8.76855L15.485 10.2527H17.3864C17.6491 10.2527 17.901 10.357 18.0867 10.5428C18.2724 10.7285 18.3767 10.9804 18.3767 11.243C18.3767 11.5057 18.2724 11.7576 18.0867 11.9433C17.901 12.129 17.6491 12.2333 17.3864 12.2333H15.0744C14.9441 12.2334 14.8152 12.2078 14.6949 12.1579C14.5745 12.1081 14.4652 12.035 14.3732 11.9428H14.3745Z"
                      fill="#9ABC6F"></path>
                  </svg>
                </span>
                <p class="geo__advantages-desc">
                  до автобусной остановки
                </p>
              </li>

            </ul>

            <div class="geo__map map">
              <div id="map" class="map__container">
              </div>
              <div class="map__mark-list-wrap">

                <h2 class="map__title">
                  Расположение и инфраструктура
                </h2>

                <ul class="map__mark-list">

                  <li class="map__mark-item map__mark-item-all">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <g clip-path="url(#clip0_641_3022)">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.1037 10.6422C19.2357 10.4156 19.4249 10.2276 19.6523 10.0969C19.8797 9.96623 20.1374 9.89746 20.3997 9.89746C20.662 9.89746 20.9197 9.96623 21.1471 10.0969C21.3745 10.2276 21.5636 10.4156 21.6957 10.6422L25.0497 16.3998L31.5633 17.811C31.8195 17.8667 32.0567 17.9886 32.2511 18.1645C32.4455 18.3404 32.5905 18.5642 32.6714 18.8135C32.7524 19.0629 32.7666 19.3292 32.7126 19.5857C32.6586 19.8423 32.5383 20.0802 32.3637 20.2758L27.9237 25.245L28.5957 31.875C28.6222 32.1361 28.5798 32.3995 28.4726 32.6391C28.3655 32.8786 28.1973 33.0858 27.985 33.2401C27.7728 33.3943 27.5237 33.4902 27.2628 33.5181C27.0019 33.546 26.7382 33.5049 26.4981 33.399L20.3997 30.711L14.3013 33.399C14.0612 33.5049 13.7975 33.546 13.5366 33.5181C13.2757 33.4902 13.0266 33.3943 12.8143 33.2401C12.602 33.0858 12.4339 32.8786 12.3268 32.6391C12.2196 32.3995 12.1772 32.1361 12.2037 31.875L12.8757 25.245L8.43569 20.277C8.26076 20.0815 8.1402 19.8434 8.08603 19.5867C8.03186 19.33 8.04598 19.0635 8.12698 18.8139C8.20799 18.5644 8.35304 18.3404 8.54766 18.1644C8.74228 17.9884 8.97965 17.8666 9.23609 17.811L15.7497 16.3998L19.1037 10.6422ZM20.3997 13.185L17.6241 17.9514C17.5191 18.1313 17.3779 18.2874 17.2093 18.4097C17.0407 18.532 16.8485 18.6179 16.6449 18.6618L11.2545 19.8294L14.9289 23.9418C15.2097 24.2562 15.3453 24.6738 15.3033 25.0926L14.7477 30.5802L19.7949 28.3554C19.9855 28.2715 20.1914 28.2281 20.3997 28.2281C20.6079 28.2281 20.8139 28.2715 21.0045 28.3554L26.0517 30.5802L25.4961 25.0926C25.475 24.8854 25.4973 24.6761 25.5615 24.4779C25.6258 24.2798 25.7306 24.0972 25.8693 23.9418L29.5449 19.8294L24.1545 18.6618C23.9509 18.6179 23.7587 18.532 23.5901 18.4097C23.4215 18.2874 23.2802 18.1313 23.1753 17.9514L20.3997 13.185Z"
                            fill="#56693E" />
                        </g>
                        <defs>
                          <clipPath id="clip0_641_3022">
                            <rect width="28.8" height="28.8" fill="white" transform="translate(6 7.2002)" />
                          </clipPath>
                        </defs>
                      </svg>

                    </div>
                    <p class="map__mark-text">
                      Все категории
                    </p>
                    <p class="map__mark-number">

                    </p>
                  </li>

                  <li class="map__mark-item map__mark-item_point">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <g clip-path="url(#clip0_641_3031)">
                          <path
                            d="M32.3694 18.2442C31.9005 18.1483 31.4744 17.8679 31.2649 17.4376C30.5308 15.9296 29.4968 14.5973 28.2285 13.5311C27.2035 12.6695 26.0474 12 24.8121 11.5478C24.0331 11.2627 23.6249 10.3387 24.0522 9.62763L24.3456 9.1392C24.6259 8.67262 24.4864 8.06786 24.0301 7.77116C23.5503 7.45916 22.9073 7.60742 22.6126 8.09805L21.2931 10.2943C21.0772 10.6537 20.6891 10.8693 20.2708 10.8969C18.2605 11.0296 16.3147 11.7095 14.6307 12.8741C12.9713 14.0217 11.6306 15.5954 10.7349 17.4371C10.5255 17.8676 10.0993 18.1483 9.63023 18.2443C8.74572 18.4254 7.92735 18.8803 7.28753 19.5587C6.4623 20.4337 6 21.6105 6 22.8364C6 24.0622 6.4623 25.2391 7.28753 26.1141C7.92736 26.7925 8.74575 27.2474 9.63027 27.4284C10.0993 27.5244 10.5256 27.8051 10.735 28.2356C11.6349 30.0858 12.9838 31.6654 14.6535 32.8143C16.5359 34.1096 18.743 34.8002 21 34.8002C23.257 34.8002 25.4641 34.1096 27.3465 32.8143C29.0162 31.6654 30.3651 30.0858 31.265 28.2356C31.4744 27.8051 31.9007 27.5244 32.3697 27.4284C33.2543 27.2474 34.0726 26.7925 34.7125 26.1141C35.5377 25.2391 36 24.0622 36 22.8364C36 21.6105 35.5377 20.4337 34.7125 19.5587C34.0726 18.8802 33.254 18.4252 32.3694 18.2442ZM33.2839 24.6576C32.8265 25.1443 32.2031 25.4237 31.5489 25.4353L31.0421 25.4453C30.5635 25.4548 30.1363 25.7479 29.9551 26.191L29.7465 26.7011C29.0169 28.4864 27.7987 30.0089 26.2434 31.0792C24.6882 32.1494 22.8647 32.72 21 32.72C19.1353 32.72 17.3119 32.1494 15.7566 31.0792C14.2014 30.0089 12.9831 28.4864 12.2536 26.7011L12.0449 26.1909C11.8638 25.7478 11.4365 25.4548 10.9579 25.4453L10.4511 25.4353C9.79666 25.4226 9.17314 25.1432 8.71464 24.6571C8.25613 24.1711 7.99926 23.5174 7.99926 22.8364C7.99926 22.1554 8.25613 21.5016 8.71464 21.0156C9.17314 20.5296 9.79666 20.2502 10.4511 20.2374L10.9579 20.2274C11.4365 20.2179 11.8638 19.9249 12.0449 19.4818L12.2536 18.9716C12.9832 17.1864 14.2014 15.6639 15.7566 14.5937C17.3119 13.5234 19.1354 12.9528 21 12.9528C22.8647 12.9528 24.6882 13.5234 26.2434 14.5937C27.7986 15.6639 29.0169 17.1864 29.7465 18.9716L29.9551 19.4818C30.1363 19.9249 30.5635 20.2179 31.0421 20.2274L31.5489 20.2374C32.037 20.247 32.5117 20.4052 32.9144 20.6924C33.3171 20.9796 33.6301 21.3833 33.8146 21.8535C33.9992 22.3237 34.0473 22.8399 33.953 23.3383C33.8586 23.8366 33.626 24.2953 33.2839 24.6576Z"
                            fill="#56693E" stroke="#56693E" stroke-width="0.1" />
                          <path
                            d="M15.5996 21.6004C15.5996 20.9376 16.1369 20.4004 16.7996 20.4004H16.8542C17.5169 20.4004 18.0542 20.9376 18.0542 21.6004V21.7267C18.0542 22.3894 17.5169 22.9267 16.8542 22.9267H16.7996C16.1369 22.9267 15.5996 22.3894 15.5996 21.7267V21.6004ZM23.9451 21.6004C23.9451 20.9376 24.4823 20.4004 25.1451 20.4004H25.1996C25.8624 20.4004 26.3996 20.9376 26.3996 21.6004V21.7267C26.3996 22.3894 25.8624 22.9267 25.1996 22.9267H25.1451C24.4823 22.9267 23.9451 22.3894 23.9451 21.7267V21.6004ZM20.9996 30.0004C21.6443 30.0004 22.2826 29.8697 22.8782 29.6158C23.4738 29.3619 24.015 28.9897 24.4709 28.5205C24.9267 28.0513 25.2883 27.4943 25.535 26.8813C25.6324 26.6393 25.7111 26.3905 25.7708 26.1371C25.9226 25.492 25.3714 24.9478 24.7087 24.9478H17.2905C16.6278 24.9478 16.0767 25.492 16.2285 26.1371C16.2881 26.3905 16.3668 26.6393 16.4642 26.8813C16.7109 27.4943 17.0725 28.0513 17.5284 28.5205C18.449 29.4681 19.6976 30.0004 20.9996 30.0004Z"
                            fill="#56693E" />
                        </g>
                        <defs>
                          <clipPath id="clip0_641_3031">
                            <rect width="30" height="27.6" fill="white" transform="translate(6 7.2002)" />
                          </clipPath>
                        </defs>
                      </svg>

                    </div>
                    <p class="map__mark-text">
                      Детский сад
                    </p>
                    <p class="map__mark-number">
                      5
                    </p>
                  </li>

                  <li class="map__mark-item map__mark-item_point">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <path
                          d="M20.9722 32.089C20.6152 32.2828 20.1843 32.2828 19.8272 32.089L12.6272 28.1804C12.2405 27.9705 11.9997 27.5658 11.9997 27.1258V21.3493C11.9997 20.9117 11.7615 20.5088 11.378 20.2979L9.11939 19.0556C8.28881 18.5988 8.29089 17.4046 9.12307 16.9507L19.8251 11.1132C20.1833 10.9179 20.6162 10.9179 20.9743 11.1132L32.9743 17.6587C33.3598 17.869 33.5997 18.273 33.5997 18.7122V26.3998C33.5997 27.0625 33.0624 27.5998 32.3997 27.5998C31.737 27.5998 31.1997 27.0625 31.1997 26.3998V21.3493C31.1997 20.4366 30.2211 19.858 29.4214 20.2979C29.0379 20.5088 28.7997 20.9117 28.7997 21.3493V27.1258C28.7997 27.5658 28.5589 27.9705 28.1722 28.1804L20.9722 32.089ZM19.8294 22.1318C20.1853 22.324 20.6141 22.324 20.97 22.1318L26.665 19.0556C27.5046 18.6021 27.5046 17.3975 26.665 16.944L20.97 13.8678C20.6141 13.6756 20.1853 13.6756 19.8294 13.8678L14.1344 16.944C13.2948 17.3975 13.2948 18.6021 14.1344 19.0556L19.8294 22.1318ZM19.8295 29.3619C20.1854 29.5541 20.614 29.5541 20.9699 29.3619L25.7699 26.7699C26.1579 26.5604 26.3997 26.155 26.3997 25.714V23.9293C26.3997 23.0166 25.4211 22.438 24.6214 22.8779L20.978 24.8817C20.6179 25.0798 20.1815 25.0798 19.8214 24.8817L16.178 22.8779C15.3783 22.438 14.3997 23.0166 14.3997 23.9293V25.714C14.3997 26.155 14.6415 26.5604 15.0295 26.7699L19.8295 29.3619Z"
                          fill="#56693E" />
                      </svg>

                    </div>
                    <p class="map__mark-text">
                      Образование
                    </p>
                    <p class="map__mark-number">
                      2
                    </p>
                  </li>

                  <li class="map__mark-item map__mark-item_point">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <path
                          d="M26.6875 10.8438H15.3125C14.3428 10.8438 13.4128 11.229 12.7271 11.9146C12.0415 12.6003 11.6562 13.5303 11.6562 14.5V29.125C11.6562 29.6637 11.8703 30.1804 12.2512 30.5613C12.6321 30.9422 13.1488 31.1562 13.6875 31.1562H16.5312C17.07 31.1562 17.5866 30.9422 17.9676 30.5613C18.3485 30.1804 18.5625 29.6637 18.5625 29.125V27.5H23.4375V29.125C23.4375 29.6637 23.6515 30.1804 24.0324 30.5613C24.4134 30.9422 24.93 31.1562 25.4688 31.1562H28.3125C28.8512 31.1562 29.3679 30.9422 29.7488 30.5613C30.1297 30.1804 30.3438 29.6637 30.3438 29.125V14.5C30.3438 13.5303 29.9585 12.6003 29.2729 11.9146C28.5872 11.229 27.6572 10.8438 26.6875 10.8438ZM14.0938 25.0625V19.375H27.9062V25.0625H14.0938ZM15.3125 13.2812H26.6875C27.0107 13.2812 27.3207 13.4097 27.5493 13.6382C27.7778 13.8668 27.9062 14.1768 27.9062 14.5V16.9375H14.0938V14.5C14.0938 14.1768 14.2222 13.8668 14.4507 13.6382C14.6793 13.4097 14.9893 13.2812 15.3125 13.2812ZM16.125 28.7188H14.0938V27.5H16.125V28.7188ZM25.875 28.7188V27.5H27.9062V28.7188H25.875ZM18.9688 22.2188C18.9688 22.5401 18.8734 22.8543 18.6949 23.1216C18.5163 23.3888 18.2625 23.5971 17.9656 23.7201C17.6687 23.843 17.3419 23.8752 17.0267 23.8125C16.7115 23.7498 16.422 23.5951 16.1947 23.3678C15.9674 23.1405 15.8127 22.851 15.75 22.5358C15.6873 22.2206 15.7195 21.8938 15.8424 21.5969C15.9654 21.3 16.1737 21.0462 16.4409 20.8676C16.7082 20.6891 17.0224 20.5938 17.3438 20.5938C17.7747 20.5938 18.1881 20.765 18.4928 21.0697C18.7975 21.3744 18.9688 21.7878 18.9688 22.2188ZM26.2812 22.2188C26.2812 22.5401 26.1859 22.8543 26.0074 23.1216C25.8288 23.3888 25.575 23.5971 25.2781 23.7201C24.9812 23.843 24.6544 23.8752 24.3392 23.8125C24.024 23.7498 23.7345 23.5951 23.5072 23.3678C23.2799 23.1405 23.1252 22.851 23.0625 22.5358C22.9998 22.2206 23.032 21.8938 23.1549 21.5969C23.2779 21.3 23.4862 21.0462 23.7534 20.8676C24.0207 20.6891 24.3349 20.5938 24.6562 20.5938C25.0872 20.5938 25.5006 20.765 25.8053 21.0697C26.11 21.3744 26.2812 21.7878 26.2812 22.2188ZM34 16.125V18.5625C34 18.8857 33.8716 19.1957 33.643 19.4243C33.4145 19.6528 33.1045 19.7812 32.7812 19.7812C32.458 19.7812 32.148 19.6528 31.9195 19.4243C31.6909 19.1957 31.5625 18.8857 31.5625 18.5625V16.125C31.5625 15.8018 31.6909 15.4918 31.9195 15.2632C32.148 15.0347 32.458 14.9062 32.7812 14.9062C33.1045 14.9062 33.4145 15.0347 33.643 15.2632C33.8716 15.4918 34 15.8018 34 16.125ZM10.4375 16.125V18.5625C10.4375 18.8857 10.3091 19.1957 10.0805 19.4243C9.85198 19.6528 9.54198 19.7812 9.21875 19.7812C8.89552 19.7812 8.58552 19.6528 8.35696 19.4243C8.1284 19.1957 8 18.8857 8 18.5625V16.125C8 15.8018 8.1284 15.4918 8.35696 15.2632C8.58552 15.0347 8.89552 14.9062 9.21875 14.9062C9.54198 14.9062 9.85198 15.0347 10.0805 15.2632C10.3091 15.4918 10.4375 15.8018 10.4375 16.125Z"
                          fill="#56693E" />
                      </svg>

                    </div>
                    <p class="map__mark-text">
                      Транспорт
                    </p>
                    <p class="map__mark-number">
                      3
                    </p>
                  </li>

                  <li class="map__mark-item map__mark-item_point">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <path
                          d="M16.3996 31.4008C17.3937 31.4008 18.1996 30.5949 18.1996 29.6008C18.1996 28.6067 17.3937 27.8008 16.3996 27.8008C15.4055 27.8008 14.5996 28.6067 14.5996 29.6008C14.5996 30.5949 15.4055 31.4008 16.3996 31.4008Z"
                          fill="#56693E" />
                        <path
                          d="M27.1999 31.4008C28.194 31.4008 28.9999 30.5949 28.9999 29.6008C28.9999 28.6067 28.194 27.8008 27.1999 27.8008C26.2058 27.8008 25.3999 28.6067 25.3999 29.6008C25.3999 30.5949 26.2058 31.4008 27.1999 31.4008Z"
                          fill="#56693E" />
                        <path d="M11 13.4004H13.4L14.12 17.0004M14.12 17.0004L15.8 25.4004H27.8L30.2 17.0004H14.12Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>

                    </div>
                    <p class="map__mark-text">
                      Магазины
                    </p>
                    <p class="map__mark-number">
                      10
                    </p>
                  </li>

                  <li class="map__mark-item map__mark-item_point">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <path
                          d="M28.5789 18H13.4211C12.6362 18 12 18.6199 12 19.3846V28.6154C12 29.3801 12.6362 30 13.4211 30H28.5789C29.3638 30 30 29.3801 30 28.6154V19.3846C30 18.6199 29.3638 18 28.5789 18Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linejoin="round" />
                        <path
                          d="M18.8998 14H23.0998V12H18.8998V14ZM23.5198 14.5V18H25.1998V14.5H23.5198ZM18.4798 18V14.5H16.7998V18H18.4798ZM23.0998 14C23.2112 14 23.318 14.0527 23.3968 14.1464C23.4756 14.2402 23.5198 14.3674 23.5198 14.5H25.1998C25.1998 13.837 24.9786 13.2011 24.5847 12.7322C24.1909 12.2634 23.6568 12 23.0998 12V14ZM18.8998 12C18.3428 12 17.8087 12.2634 17.4149 12.7322C17.0211 13.2011 16.7998 13.837 16.7998 14.5H18.4798C18.4798 14.3674 18.5241 14.2402 18.6028 14.1464C18.6816 14.0527 18.7884 14 18.8998 14V12Z"
                          fill="#56693E" />
                        <path d="M18 23.9996H24M21 21.5996V26.3996" stroke="#56693E" stroke-width="2.4"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>

                    </div>
                    <p class="map__mark-text">
                      Здоровье
                    </p>
                    <p class="map__mark-number">
                      4
                    </p>
                  </li>

                  <li class="map__mark-item map__mark-item_point">
                    <div class="map__mark-icon">
                      <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                        <path
                          d="M20.3997 28.8004C24.3762 28.8004 27.5997 25.5768 27.5997 21.6004C27.5997 17.6239 24.3762 14.4004 20.3997 14.4004C16.4233 14.4004 13.1997 17.6239 13.1997 21.6004C13.1997 25.5768 16.4233 28.8004 20.3997 28.8004Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M20.4 14.4006C21.7255 14.4006 22.8 13.3261 22.8 12.0006C22.8 10.6751 21.7255 9.60059 20.4 9.60059C19.0745 9.60059 18 10.6751 18 12.0006C18 13.3261 19.0745 14.4006 20.4 14.4006Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M28.7999 19.2004C30.1254 19.2004 31.1999 18.1259 31.1999 16.8004C31.1999 15.4749 30.1254 14.4004 28.7999 14.4004C27.4744 14.4004 26.3999 15.4749 26.3999 16.8004C26.3999 18.1259 27.4744 19.2004 28.7999 19.2004Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M11.9996 19.2004C13.3251 19.2004 14.3996 18.1259 14.3996 16.8004C14.3996 15.4749 13.3251 14.4004 11.9996 14.4004C10.6741 14.4004 9.59961 15.4749 9.59961 16.8004C9.59961 18.1259 10.6741 19.2004 11.9996 19.2004Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M11.9996 28.801C13.3251 28.801 14.3996 27.7265 14.3996 26.401C14.3996 25.0755 13.3251 24.001 11.9996 24.001C10.6741 24.001 9.59961 25.0755 9.59961 26.401C9.59961 27.7265 10.6741 28.801 11.9996 28.801Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                          d="M28.7999 28.801C30.1254 28.801 31.1999 27.7265 31.1999 26.401C31.1999 25.0755 30.1254 24.001 28.7999 24.001C27.4744 24.001 26.3999 25.0755 26.3999 26.401C26.3999 27.7265 27.4744 28.801 28.7999 28.801Z"
                          stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.5996 33.6006L20.3996 21.6006L25.1996 33.6006" stroke="#56693E" stroke-width="2.4"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <p class="map__mark-text">
                      Развлечения
                    </p>
                    <p class="map__mark-number">
                      3
                    </p>
                  </li>

                </ul>

                <div class="btn-wrap">
                  <button class="map__menu-btn-apply btn btn_green">
                    Применить
                  </button>

                  <button class="map__menu-btn-reset btn btn_white reset-btn">
                    Сбросить
                  </button>
                </div>

              </div>

              <button class="map__menu-btn-filters btn btn_white">
                Фильтры
              </button>

            </div>

          </div>

          <aside class="geo__aside aside">
          </aside>

        </div>
      </section>

      <section class="section section_commercial commercial" id="commercial">
        <div class="container commercial__container">
          <div class="commercial__wrap wrap commercial_swiper">
            <div class="commercial__top-wrap">
              <h2 class="commercial__title title title_40">
                Коммерческие помещения
              </h2>

              <a class="commercial__button commercial__button_top btn btn_dark" href="commercial.html">
                Смотреть все
              </a>
            </div>

            <ul class="commercial__list commercial__list_slider swiper-wrapper">
              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>




                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>

              <li class="commercial__item swiper-slide">
                <a class="commercial__item-link" href="commercial-item.html">
                  <h5 class="commercial__item-title">
                    Сосновый | ГП 8 |
                  </h5>
                  <p class="commercial__item-desc">
                    Помещение №1, 151,67м<sup>2</sup>
                  </p>
                  <div class="commercial__item-price-wrap">
                    <p class="commercial__item-new-price">
                      5 662 000 ₽
                    </p>
                    <p class="commercial__item-old-price">
                      9 331 000 ₽
                    </p>
                  </div>
                  <p class="commercial__credit-pay">
                    от 45 426₽/месяц
                  </p>
                  <div class="commercial__item-img">
                    <picture>
                      <source srcset="/assets/img/com-img-1.webp" type="image/webp"><img src="/assets/img/com-img-1.png" alt="квартира">
                    </picture>
                  </div>





                </a>

              </li>
            </ul>

            <a class="commercial__button commercial__button_bot btn btn_dark" href="commercial.html">
              Смотреть все
            </a>
          </div>

          <aside class="commercial__aside aside">
          </aside>

          <div class="swiper-navigation">
            <div class="swiper-button swiper-button-prev swiper-button-prev_com">
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                    stroke="#CBCBCB" />
                  <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
                </g>
              </svg>
            </div>

            <div class="swiper-button swiper-button-next swiper-button-next_com">
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

      <section class="section section_buy buy" id="buy">
        <div class="container buy__container">
          <div class="buy__wrap wrap">

            <h2 class="buy__title title title_40">
              Способы покупки
            </h2>

            <ul class="buy__list">

              <li class="buy__item">
                <h4 class="buy__item-title title title_25">
                  Ипотека
                </h4>
                <p class="buy__item-text text">
                  Ипотека — это финансовый инструмент, который существенно облегчает процесс приобретения жилья.
                  Существует много причин, почему брать ипотеку может быть выгодным решением, а с нами это ещё и просто.
                </p>
              </li>

              <li class="buy__item">
                <h4 class="buy__item-title title title_25">
                  Полный расчет
                </h4>
                <p class="buy__item-text text">
                  Полная оплата стоимости объекта поможет воплотить мечту о собственном жилье без необходимости взятия
                  ипотеки или больших ссуд.
                </p>
              </li>

            </ul>
          </div>

          <aside class="buy__aside aside">
          </aside>
        </div>
      </section>

      <section class="section section_bot bot" id="office">
        <div class="container bot__container">
          <div class="bot__wrap wrap">
            <div class="bot__address address">
              <h3 class="address__title title title_40">
                Офис продаж
              </h3>
              <p class="address__desc">
                Ежедневно с 10:00-17:00
              </p>

              <div class="address__wrapper">
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

              </div>

              <button class="btn btn_green address__btn popup-link" href="#popup-request">
                Получить консультацию
              </button>
            </div>

            <div class="bot__map" id="map2">
            </div>
          </div>

          <aside class="bot__aside aside">
          </aside>
        </div>
      </section>

      <div class="aside-menu">
        <ul class="slider__toggle-list">
          <li class="slider__toggle-item">
            <a class="slider__toggle-link" href="#about-project" data-id="1">
              О проекте
            </a>
          </li>
          <li class="slider__toggle-item">
            <a class="slider__toggle-link" href="#advantages" data-id="1">
              Преимущества
            </a>
          </li>
          <li class="slider__toggle-item">
            <a class="slider__toggle-link" href="#location" data-id="1">
              Местоположение и инфраструктура
            </a>
          </li>
          <li class="slider__toggle-item">
            <a class="slider__toggle-link" href="#commercial" data-id="1">
              Коммерческие помещения
            </a>
          </li>
          <li class="slider__toggle-item">
            <a class="slider__toggle-link" href="#buy" data-id="1">
              Способы покупки
            </a>
          </li>
          <li class="slider__toggle-item">
            <a class="slider__toggle-link" href="#office" data-id="1">
              Офис продаж
            </a>
          </li>
        </ul>
      </div>

    </section>

  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

  <script src="https://sibir.m2lab.ru/loader.js?containerId=iframe"></script>

  <script>

    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set("project", "Сосновый");
    window.history.pushState({}, "", "?" + urlParams.toString()); 


    // const option = document.querySelector(`.select__item[data-id='Сосновый']`);
    // console.log(option);
    // selectProject('Сосновый');

    // function selectProject(project) {

    //   console.log("тест");

    //   const option = document.querySelector(`.select__item[data-id='${project}']`);
    //   console.log(option);

    //   const clickEvent = new MouseEvent("click", {
    //     // "view": window,
    //     bubbles: false,
    //     cancelable: false,
    //     composed: false
    //   });

    //   // option.dispatchEvent(clickEvent);

    //   const select = document.querySelector('.choice__input-block_select_project').querySelector('.choice__select');
    //   // if (option) {
    //   // const clickEvent = new Event("click");
    //   // console.log(select);
    //   console.log(option.dispatchEvent(clickEvent));
    //   // btn.dispatchEvent(clickEvent);
    //   // if (select.dispatchEvent(clickEvent)) {
    //   // console.log("test**********************");
    // }
  </script>

</body>

</html>