<?
$title = 'Страницы авторизации';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';
?>

<body class="body control__body control__body_contacts">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/header.php';
  ?>

  <main class="main control">
    <section class="section control__section edit-page">
      <div class="container control__container">
        <form class="control__form control__form_contacts">
          <h1 class="control__title">
            Основные контакты
          </h1>
          <p class="control__desc">
            Указанные ниже контаткы будут отображаться в шапке и подвале сайта
          </p>

          <div class="control__form-top-wrap">
            <label for="phone" class="control__label control__label_phone">
              <span>
                Телефон
              </span>
              <input id="phone" class="control__input control__input_phone" name="phone" type="text" placeholder="Телефон">
            </label>

            <label for="email" class="control__label control__label_email">
              <span>
                E-mail
              </span>
              <input id="email" class="control__input control__input_email" type="email" name="email">
            </label>

            <label for="adress" class="control__label control__label_adress">
              <span>
                Адрес
              </span>
              <textarea id="adress" class="control__input control__input_adress" name="adress" placeholder="Адрес"></textarea>
            </label>

            <label for="map" class="control__label control__label_map">
              <span>
                Код карты
              </span>
              <textarea id="map" class="control__input control__input_map" name="map" placeholder="Код карты"></textarea>
            </label>


            <button class="control__input control__input_submit btn btn_green" type="submit">Сохранить</button>


          </div>
        </form>

        <div class="control__offices">
          <h2 class="control__office-title">
            Офисы продаж
          </h2>

          <div class="control__office office">

            <div class="office__top-wrap">
              <p class="office__active-mark">
                Активный офис
              </p>

              <div class='office__btn-block card__btn-block'>
                <button class='card__btn card__btn_publish'>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M3 13.3906C6.6 5.39062 17.4 5.39062 21 13.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M12 17.3906C11.606 17.3906 11.2159 17.313 10.8519 17.1623C10.488 17.0115 10.1573 16.7905 9.87868 16.5119C9.6001 16.2334 9.37913 15.9027 9.22836 15.5387C9.0776 15.1747 9 14.7846 9 14.3906C9 13.9967 9.0776 13.6066 9.22836 13.2426C9.37913 12.8786 9.6001 12.5479 9.87868 12.2693C10.1573 11.9907 10.488 11.7698 10.8519 11.619C11.2159 11.4682 11.606 11.3906 12 11.3906C12.7956 11.3906 13.5587 11.7067 14.1213 12.2693C14.6839 12.8319 15 13.595 15 14.3906C15 15.1863 14.6839 15.9493 14.1213 16.5119C13.5587 17.0746 12.7956 17.3906 12 17.3906Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                  </svg>

                </button>

                <button class='card__btn card__btn_edit'>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M7 7.39062H6C5.46957 7.39063 4.96086 7.60134 4.58579 7.97641C4.21071 8.35148 4 8.86019 4 9.39062V18.3906C4 18.9211 4.21071 19.4298 4.58579 19.8048C4.96086 20.1799 5.46957 20.3906 6 20.3906H15C15.5304 20.3906 16.0391 20.1799 16.4142 19.8048C16.7893 19.4298 17 18.9211 17 18.3906V17.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M16 5.39073L19 8.39073M20.385 6.97573C20.7788 6.58189 21.0001 6.04772 21.0001 5.49073C21.0001 4.93375 20.7788 4.39958 20.385 4.00573C19.9912 3.61189 19.457 3.39063 18.9 3.39062C18.343 3.39062 17.8088 3.61189 17.415 4.00573L9 12.3907V15.3907H12L20.385 6.97573Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                  </svg>

                </button>

                <button class='card__btn card__btn_delete'>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M5.89355 6.69043L6.8107 20.5319H16.8475L18.1066 6.69043H5.89355Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                    <path d='M11.7934 10.7615V16.0538M3.85791 6.69043H20.142' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M8.74316 6.69066L10.0821 4.24805H13.9447L15.2568 6.69066H8.74316Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                  </svg>

                </button>
              </div>
            </div>

            <h3 class="office__title">
              Главный офис
            </h3>
            <p class="office__desc">
              Ежедневно с 10:00-17:00
            </p>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Адрес:
              </span>
              <span class='card__head-val'>
                Тюмень, ул. Клары Цеткин, д. 61, к2
              </span>
            </div>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Телефон:
              </span>
              <span class='card__head-val'>
                8 (3452) 611-157
              </span>
            </div>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Почта:
              </span>
              <span class='card__head-val'>
                hello_sibir@yandex.ru
              </span>
            </div>



          </div>

          <div class="control__office office" style="display: none;">

            <div class="office__top-wrap">
              <p class="office__active-mark">
                Активный офис
              </p>

              <div class='office__btn-block card__btn-block'>
                <button class='card__btn card__btn_publish'>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M3 13.3906C6.6 5.39062 17.4 5.39062 21 13.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M12 17.3906C11.606 17.3906 11.2159 17.313 10.8519 17.1623C10.488 17.0115 10.1573 16.7905 9.87868 16.5119C9.6001 16.2334 9.37913 15.9027 9.22836 15.5387C9.0776 15.1747 9 14.7846 9 14.3906C9 13.9967 9.0776 13.6066 9.22836 13.2426C9.37913 12.8786 9.6001 12.5479 9.87868 12.2693C10.1573 11.9907 10.488 11.7698 10.8519 11.619C11.2159 11.4682 11.606 11.3906 12 11.3906C12.7956 11.3906 13.5587 11.7067 14.1213 12.2693C14.6839 12.8319 15 13.595 15 14.3906C15 15.1863 14.6839 15.9493 14.1213 16.5119C13.5587 17.0746 12.7956 17.3906 12 17.3906Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                  </svg>

                </button>

                <button class='card__btn card__btn_edit'>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M7 7.39062H6C5.46957 7.39063 4.96086 7.60134 4.58579 7.97641C4.21071 8.35148 4 8.86019 4 9.39062V18.3906C4 18.9211 4.21071 19.4298 4.58579 19.8048C4.96086 20.1799 5.46957 20.3906 6 20.3906H15C15.5304 20.3906 16.0391 20.1799 16.4142 19.8048C16.7893 19.4298 17 18.9211 17 18.3906V17.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M16 5.39073L19 8.39073M20.385 6.97573C20.7788 6.58189 21.0001 6.04772 21.0001 5.49073C21.0001 4.93375 20.7788 4.39958 20.385 4.00573C19.9912 3.61189 19.457 3.39063 18.9 3.39062C18.343 3.39062 17.8088 3.61189 17.415 4.00573L9 12.3907V15.3907H12L20.385 6.97573Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                  </svg>

                </button>

                <button class='card__btn card__btn_delete'>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M5.89355 6.69043L6.8107 20.5319H16.8475L18.1066 6.69043H5.89355Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                    <path d='M11.7934 10.7615V16.0538M3.85791 6.69043H20.142' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M8.74316 6.69066L10.0821 4.24805H13.9447L15.2568 6.69066H8.74316Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                  </svg>

                </button>
              </div>
            </div>

            <h3 class="office__title">
              Главный офис
            </h3>
            <p>
              Ежедневно с 10:00-17:00
            </p>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Адрес:
              </span>
              <span class='card__head-val'>
                Тюмень, ул. Клары Цеткин, д. 61, к2
              </span>
            </div>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Телефон:
              </span>
              <span class='card__head-val'>
                8 (3452) 611-157
              </span>
            </div>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Телефон:
              </span>
              <span class='card__head-val'>
                hello_sibir@yandex.ru
              </span>
            </div>



          </div>

          <button class="office__btn btn btn_green" style="display: none;">
            Создать офис
          </button>


          <form class="office__new-office new-office" action="">
            <h2 class="new-office__title">
              Новый офис
            </h2>

            <label for="title" class="control__label control__label_title">
              <span>
                Название
              </span>
              <input id="title" class="control__input control__input_title" name="title" type="text" placeholder="Название">
            </label>

            <label for="desc" class="control__label control__label_desc">
              <span>
                Описание
              </span>
              <input id="desc" class="control__input control__input_desc" name="desc" type="text" placeholder="Описание">
            </label>

            <label for="address" class="control__label control__label_address">
              <span>
                Адрес
              </span>
              <input id="address" class="control__input control__input_address" name="address" type="text" placeholder="Адрес">
            </label>

            <div class="new-office__wrap">
              <label for="phone" class="control__label control__label_phone">
                <span>
                  Телефон
                </span>
                <input id="phone" class="control__input control__input_phone" name="phone" type="text" placeholder="Телефон">
              </label>

              <label for="E-mail" class="control__label control__label_E-mail">
                <span>
                  E-mail
                </span>
                <input id="E-mail" class="control__input control__input_E-mail" name="E-mail" type="text" placeholder="E-mail">
              </label>
            </div>

            <label for="check" class="control__label control__label_check">
              <input id="check" class="control__check control__input_check" type="checkbox" name="check">
              <span>
                Активный офис
              </span>
            </label>

            <div class="control__btn-wrap">
              <button class="control__input control__input_submit btn btn_green" type="submit">Сохранить</button>
              <button class="control__btn control__btn_cancel btn btn_white">Отмена</button>
            </div>

          </form>
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