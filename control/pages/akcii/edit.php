<?
$title = 'Страницы авторизации';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';
?>

<body class="body control__body control__body_event">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/header.php';
  ?>

  <main class="main control">
    <section class="section control__section edit-page">
      <div class="container control__container">
        <a href="/control/pages/novosti/index.php" class="control__back">
          <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 13.4131L1 7.41309L8 1.41309" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="control__back-text">
            Назад
          </span>
        </a>
        <h1 class="control__title">
          Создать акцию
        </h1>
        <div class="control__head control__form">
          <div class="control__form-top-wrap">
            <label for="title" class="control__label control__label_title">
              <span>
                Заголовок
              </span>
              <input id="title" class="control__input control__input_title" name="title" type="text" placeholder="Заголовок">
            </label>
  
            <label for="date" class="control__label control__label_date">
              <span>
                Дата публикации
              </span>
              <input id="date" class="control__input control__input_date" type="date" name="date">
            </label>

            <label for="time" class="control__label control__label_time">
              <span>
                Срок действия
              </span>
              <input id="time" class="control__input control__input_time" type="datetime-local" name="time">
            </label>
  
            <label for="photo" class="control__label control__label_photo">
              <span>
              Обложка (800х350 px)
              </span>
              <input id="photo" class="control__input control__input_photo" type="file" name="photo" hidden>
              <div class="control__photo-wrap">
                <img src="/assets/img/blank.jpg" class="control__photo" alt="Обложка">
              </div>
              <button class="control__btn control__btn_photo">
                Загрузить фото
              </button>
            </label>
          </div>


          <label for="text" class="control__label control__label_text">
            <span>
              Условия акции
            </span>
            <textarea id="text" class="control__input control__input_text" name="description" placeholder="Текст"></textarea>
          </label>

          <label for="check" class="control__label control__label_check">
            <input id="check" class="control__check control__input_check" type="checkbox" name="check">
            <span>
              Опубликовать
            </span>
          </label>

          <div class="control__btn-wrap">
            <button class="control__input control__input_submit btn btn_green" type="submit">Сохранить</button>
            <button class="control__btn control__btn_cancel btn btn_white">Отмена</button>
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