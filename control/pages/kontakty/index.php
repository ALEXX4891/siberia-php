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

      </div>
    </section>


  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>