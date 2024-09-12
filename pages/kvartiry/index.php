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

        <div class="choice__form" choice-form>

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
                <ul class="select__list">
                  <!-- <li class="select__item">Все</li> -->
                  <!-- <li class="select__item">Сосновый</li>
                  <li class="select__item">Дубовый</li>
                  <li class="select__item">Березовый</li> -->
                </ul>
              </div>
            </li>

            <li class="choice__input-block choice__input-block_buttons choice__input-block_buttons_rooms">
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
                <ul class="select__list">
                  <!-- <li class="select__item">Все</li> -->
                  <!-- <li class="select__item">1</li>
                  <li class="select__item">2</li>
                  <li class="select__item">3</li> -->

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
                <ul class="select__list">
                  <!-- <li class="select__item">Все</li> -->
                  <!-- <li class="select__item" data-id="duboviy">1</li>
                  <li class="select__item" data-id="berezoviy">2</li>
                  <li class="select__item" data-id="berezoviy">3</li> -->
                </ul>
              </div>
            </li>
            <!-- TODO Динамическ формировать содержимое фильтров -->

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
                <ul class="select__list">
                  <!-- <li class="select__item">Все</li> -->
                  <!-- <li class="select__item" data-id="sosnoviy">II квартал 2025</li>
                  <li class="select__item" data-id="sosnoviy">II квартал 2026</li>
                  <li class="select__item" data-id="sosnoviy">IV квартал 2025</li> -->

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
              <button class="choice__btn-filter" data-id="keyToday">
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
              <button class="choice__btn-filter" data-id="dressRoom">
                Гардеробная
              </button>
              <button class="choice__btn-filter" data-id="twoSide">
                Окна на 2 стороны
              </button>
              <button class="choice__btn-filter" data-id="threeSide">
                Окна на 3 стороны
              </button>
              <button class="choice__btn-filter" data-id="guestBathroom">
                Гостевой санузел
              </button>
              <button class="choice__btn-filter choice__btn-filter_disabled" data-id="terrace">
                Терраса
              </button>
              <button class="choice__btn-filter" data-id="kitchenLiving">
                Кухня-гостиная
              </button>
            </div>
          </div>

          <div class="choice__reset-wrap">

            <button class="choice__btn-additional choice__btn-additional_show">
              <p class="choice__btn-text">
                Еще параметры
              </p>
              <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7.2069 7L13 1" stroke="#363636" stroke-linejoin="round" />
              </svg>
            </button>

            <button class="choice__btn-additional choice__btn-additional_hide" style="display: none;">
              <p class="choice__btn-text">
                Скрыть дополнительные параметры
              </p>
              <svg style="transform: rotate(180deg);" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L7.2069 7L13 1" stroke="#363636" stroke-linejoin="round" />
              </svg>
            </button>

            <button class="choice__btn-reset">
              <p class="choice__btn-text">
                Сбросить фильтры
              </p>
              <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0.5L15 14.5M1 14.5L15 0.5" stroke="black" />
              </svg>
            </button>

            <p class="choice__search-text">
              Найдено 20 квартир
            </p>

            <button class="choice__btn-request choice__btn-request_mobile choice__btn-request_mobile_filter btn btn_dark">
              Фильтр
            </button>

            <button class="choice__btn-request choice__btn-request_mobile choice__btn-request_mobile_apply btn btn_dark" style="display: none;">
              Применить
            </button>

          </div>

        </div>
      </div>
    </section>

    <section class="section section__apartments apartments">
      <div class="container apartments__container">
        <ul class="apartments__list">
        </ul>
        <button class="apartments__button btn btn_dark" id="addApartrs">
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