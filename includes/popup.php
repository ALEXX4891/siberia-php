<!-- ----- всплывающие окна: ----- -->
<div class="popup" id="promo">
  <div class="popup__body">
    <div class="popup__content popup__promo promo">
      <h2 class="promo__title title title_40">
        Квартиры в расрочку от 2%
      </h2>
      <div class="promo__top-wrap">
        <span class="promo__date">
          01 мая 2024
        </span>
        <span class="promo__time">
          <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_850_17965)">
              <path d="M8.5 4.31579V8.36842L10.7105 10.2105M15.5 8C15.5 11.866 12.366 15 8.5 15C4.63401 15 1.5 11.866 1.5 8C1.5 4.13401 4.63401 1 8.5 1C12.366 1 15.5 4.13401 15.5 8Z" stroke="#748D55" stroke-width="1.5" />
            </g>
            <defs>
              <clipPath id="clip0_850_17965">
                <rect width="16" height="16" fill="white" transform="translate(0.5)" />
              </clipPath>
            </defs>
          </svg>
          Осталось 12 дней
        </span>
      </div>

      <div class="promo__wrapper">
        <div class="promo__img">
          <picture>
            <source srcset="/assets/img/popup-img.webp" type="image/webp"><img src="/assets/img/popup-img.jpg" alt="Квартиры в расрочку от 2%">
          </picture>
        </div>

        <!-- <ul class="promo__list">
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
                  <li class="promo__item">
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
        </ul> -->

        <p class="promo__desc">
          Срок предложения ограничен. <br><br>
          Узнайте подробнее об условиях акции у менеджеров в отделе продаж по телефону:
        </p>
        <a href="tel:+<? echo preg_replace('/[^0-9\.]+/', '', $row1['phone']); ?>" class="promo__phone"><?= $row1['phone']; ?></a>

        <button class="promo__btn btn btn_dark popup-link" href="#popup-call">
          Связаться с нами
        </button>
      </div>

      <button class="promo__close popup-close">
        <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L28.5 21M1 21L28.5 1" stroke="black" />
        </svg>
      </button>
    </div>
  </div>
</div>

<div class="popup" id="filter">
  <div class="popup__body">
    <div class="popup__content popup__promo filter">
      <button class="promo__close">
        <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L28.5 21M1 21L28.5 1" stroke="black" />
        </svg>
      </button>
    </div>
  </div>
</div>

<div class="popup" id="menu">
  <div class="popup__body">
    <div class="popup__content popup__promo menu">

      <div class="header__logo logo">
        <a href="/" class="logo__link">
          <img class="logo__main" width="116" height="43" src="/assets/img/logo.svg" alt="Логотип Сибирь">
        </a>
      </div>

      <div class="footer__contacts contacts">
        <a href="tel:<? echo preg_replace('/[^0-9\.]+/', '', $row1['phone']); ?>" class="contacts__item contacts__item_phone">
          <?= $row1['phone']; ?>
        </a>
        <a href="mailto:<? echo $row1['email']; ?>" class="contacts__item contacts__item_email">
          <? echo $row1['email']; ?>
        </a>
      </div>

      <button class="promo__close">
        <svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L31 16M31 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
        </svg>
      </button>
    </div>
  </div>
</div>

<div class="popup popup_program" id="actual-program-1">
  <div class="popup__body">
    <div class="popup__content">
      <h3 class="program__title">
        IT-ипотека от 5%
      </h3>

      <div class="program__content">
        <p class="program__desc text">
          Вам подходит эта программа, если вы гражданин России в возрасте от 18 до 50 лет. Работаете в аккредитованной ИТ-компании, которая пользуется налоговыми льготами. Получаете зарплату от 120 тыс. рублей.
        </p>

        <ul class="program__list">
          <li class="program__item">
            <h2 class="program__item-title">
              20%
            </h2>
            <p class="program__item-text">
              Первый взнос
            </p>
          </li>
          <li class="program__item">
            <h2 class="program__item-title">
              16 млн ₽
            </h2>
            <p class="program__item-text">
              Максимальная сумма
            </p>
          </li>
        </ul>

      </div>
      <button class="btn btn_green program__btn popup-link" href="popup-request">
        Отправить заявку
      </button>

      <span class="program__close-btn popup-close">
        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
        </svg>
      </span>
    </div>
  </div>
</div>

<div class="popup popup_program" id="actual-program-2">
  <div class="popup__body">
    <div class="popup__content">
      <h3 class="program__title">
      Семейная от 6%
      </h3>

      <div class="program__content">
        <p class="program__desc text">
        Для семей, в которых после 1 января 2018 года родился ребёнок или есть ребёнок с инвалидностью.
      </p>

        <ul class="program__list">
          <li class="program__item">
            <h2 class="program__item-title">
              20%
            </h2>
            <p class="program__item-text">
              Первый взнос
            </p>
          </li>
          <li class="program__item">
            <h2 class="program__item-title">
              6 млн ₽
            </h2>
            <p class="program__item-text">
              Максимальная сумма
            </p>
          </li>
        </ul>

      </div>
      <button class="btn btn_green program__btn popup-link" href="popup-request">
        Отправить заявку
      </button>

      <span class="program__close-btn popup-close">
        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
        </svg>
      </span>
    </div>
  </div>
</div>

<!-- ----- окна уведомлений: ----- -->
<div class="popup popup_success-simple" id="success">
  <div class="popup__body">
    <div class="popup__content popup-success">
      <h3 class="popup-success__title">
        Спасибо
      </h3>
      <p class="popup-success__subtitle">
        Ваша заявка успешно отправлена, в ближайшее время наш менеджер свяжется с вами для уточнения деталей
      </p>

      <button class="popup-success__close popup-close">
        Хорошо
      </button>

      <span class="popup__close-btn popup-close">
        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
        </svg>
      </span>

    </div>
  </div>
</div>

<div class="popup popup_success-subscribe" id="popup-success-subscribe">
  <div class="popup__body">
    <div class="popup__content popup-success">
      <h3 class="popup-success__title">
      Спасибо, что вы с нами!
      </h3>
      <span class="popup__close-btn popup-close">
        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
        </svg>
      </span>

    </div>
  </div>
</div>

<!-- ----- формы ОС: ----- -->

<div class="popup" id="popup-form" data-id="1">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form">
        <h3 class="form__title">
          Запросить планировки
        </h3>

        <div class="form__label-block">

          <input type="number" name="id" value="1" hidden>
          <input type="text" name="theme" value="flat" hidden>

          <label class="form__label">
            <span class="form__label-text">
              ФИО
            </span>
            <span class="form__label-star">
              *
            </span>

            <input class="form__input form__input_name _req" type="text" name="name" placeholder="Введите имя">
          </label>
          <label class="form__label">
            <span class="form__label-text">
              Телефон
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_phone _req phone" type="tel" name="phone" placeholder="7" value="7">
          </label>
          <label class="form__label">
            <span class="form__label-text">
              E-mail
            </span>
            <input class="form__input form__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label>
          <label class="form__label form__label_textarea">
            <span class="form__label-text">
              Комментарий
            </span>
            <textarea class="form__input form__input_textarea" name="message" placeholder="Сообщение"></textarea>
          </label>
        </div>

        <button class="btn btn_dark form__btn">
          Отправить
        </button>


        <div class="form__agreement-wrap">
          <span class="form__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="form__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="form__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup popup_call" id="popup-call" data-id="2">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form">
        <h3 class="form__title">
          Заказать звонок
        </h3>

        <p class="form__desc">
          Оставьте ваши данные и наш менеджер свяжется с вами
        </p>

        <div class="form__label-block">

          <input type="number" name="id" value="2" hidden>
          <input type="text" name="theme" value="call" hidden>

          <label class="form__label">
            <span class="form__label-text">
              Имя
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_name _req" type="text" name="name" placeholder="Как вас зовут?">
          </label>

          <label class="form__label">
            <span class="form__label-text">
              Телефон
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_phone _req phone" type="tel" name="phone" placeholder="Номер телефона">
          </label>

          <label class="form__label">
            <span class="form__label-text">
              E-mail
            </span>
            <input class="form__input form__input_email" type="email" name="email" placeholder="E-mail">
          </label>

        </div>

        <button class="btn btn_dark form__btn">
          Отправить
        </button>

        <div class="form__agreement-wrap">
          <span class="form__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="form__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="form__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup popup_call" id="popup-subscribe" data-id="3">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form" action="#">
        <h3 class="form__title">
          Будь в курсе событий!
        </h3>

        <div class="form__label-block">

        <input type="number" name="id" value="3" hidden>
        <input type="text" name="theme" value="subscribe" hidden>

          <label class="form__label">
            <span class="form__label-text">
              E-mail
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_email _req" type="email" name="email" placeholder="E-mail">
          </label>

        </div>

        <button type="submit" class="btn btn_green form__btn popup-link" href="#popup-success-subscribe">
          Подписаться на рассылку
        </button>

        <div class="form__agreement-wrap">
          <span class="form__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="form__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="form__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup popup_request" id="popup-request" data-id="2">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form">
        <h3 class="form__title">
          Оставить заявку
        </h3>

        <div class="form__label-block">

          <input type="number" name="id" value="2" hidden>
          <input type="text" name="theme" value="call" hidden>

          <label class="form__label">
            <span class="form__label-text">
              ФИО
            </span>
            <span class="form__label-star">
              *
            </span>

            <input class="form__input form__input_name _req" type="text" name="name" placeholder="Введите имя">
          </label>

          <label class="form__label">
            <span class="form__label-text">
              Телефон
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_phone _req phone" type="tel" name="phone" placeholder="7" value="7">
          </label>

          <!-- <label class="form__label">
            <span class="form__label-text">
              E-mail
            </span>
            <input class="form__input form__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label> -->

          <label class="form__label form__label_textarea">
            <span class="form__label-text">
              Комментарий
            </span>
            <textarea class="form__input form__input_textarea" name="message" placeholder="Сообщение"></textarea>
          </label>

        </div>

        <button class="btn btn_green form__btn">
          Отправить
        </button>


        <div class="form__agreement-wrap">
          <span class="form__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="form__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="form__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup popup_booking" id="popup-booking" data-id="5">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form">
        <h3 class="form__title">
          Оставить заявку
        </h3>

        <div class="form__label-block">

        <input type="number" name="id" value="5" hidden>
        <input type="text" name="theme" value="flat" hidden>
        <input type="text" name="floor" value="" hidden>
        <input type="text" name="payment" value="" hidden>
        <input type="text" name="house" value="" hidden>
        <input type="text" name="project" value="" hidden>
        <input type="text" name="house_id" value="" hidden>

        <!-- <input type="text" name="title" value="" hidden> -->


          <label class="form__label form__label_readonly">
            <span class="form__label-text">
              Планировка
            </span>
            <span class="form__label-star">
              *
            </span>

            <input class="form__input form__input_apartment _req" type="text" name="apartment"
              placeholder="Выберите квартиру" readonly>
          </label>

          <label class="form__label">
            <span class="form__label-text">
              ФИО
            </span>
            <span class="form__label-star">
              *
            </span>

            <input class="form__input form__input_name _req" type="text" name="name" placeholder="Введите имя"
              required>
          </label>

          <label class="form__label">
            <span class="form__label-text">
              Телефон
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_phone phone _req" type="tel" name="phone" placeholder="7" required
              value="7">
          </label>

          <label class="form__label">
            <span class="form__label-text">
              E-mail
            </span>
            <input class="form__input form__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label>

          <label class="form__label form__label_textarea">
            <span class="form__label-text">
              Комментарий
            </span>
            <textarea class="form__input form__input_textarea" name="message" placeholder="Сообщение"></textarea>
          </label>

        </div>

        <button class="btn btn_dark form__btn">
          Отправить
        </button>


        <div class="form__agreement-wrap">
          <span class="form__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="form__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="form__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup popup-agency" id="popup-agency" data-id="6">
  <div class="popup__body">
    <div class="popup__content">
      <form class="popup__form os-form notification">
        <h3 class="notification__title">
          Форма уведомления
        </h3>

        <div class="notification__label-block">

          <input type="number" name="id" value="6" hidden>
          <input type="text" name="theme" value="call" hidden>

          <label class="notification__label notification__agency">
            <span class="notification__label-text">
              Агенство недвижимости
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agency _req" type="text" name="agency"
              placeholder="Введите название агенства">
          </label>

          <label class="notification__label notification__agent-name">
            <span class="notification__label-text">
              ФИО агента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agent-name _req" type="text" name="agent-name"
              placeholder="Введите имя">
          </label>

          <label class="notification__label notification__agent-phone">
            <span class="notification__label-text">
              Телефон агента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agent-phone phone _req" type="tel" name="agent-phone">
          </label>

          <label class="notification__label notification__client-name">
            <span class="notification__label-text">
              ФИО клиента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_client-name _req" type="text" name="client-name"
              placeholder="Введите имя">
          </label>

          <label class="notification__label notification__client-phone">
            <span class="notification__label-text">
              Телефон клиента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_client-phone phone _req" type="tel" name="client-phone">
          </label>

          <label class="notification__label notification__label_textarea">
            <span class="notification__label-text">
              Сообщение
            </span>
            <textarea class="notification__input notification__input_textarea" name="message"
              placeholder="Сообщение"></textarea>
          </label>
        </div>

        <button class="btn btn_green notification__btn">
          Отправить
        </button>


        <div class="notification__agreement-wrap">
          <span class="notification__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="notification__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="notification__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup sot-request sot-request_business" id="sot-business" data-id="7">
  <div class="popup__body">
    <div class="popup__content">
      <form class="request__form os-form">
        <h3 class="request__title">
          Оставить заявку
        </h3>
        <p class="request__desc text">
          Менеджер свяжется с вами в ближайшее время
        </p>

        <div class="request__label-block">

        <input type="number" name="id" value="7" hidden>
        <input type="text" name="theme" value="question" hidden>


          <label class="request__label">
            <span class="request__label-text">
              ФИО
            </span>
            <span class="request__label-star">
              *
            </span>

            <input class="request__input request__input_name _req" type="text" name="name" placeholder="Введите имя"
              required>
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Телефон
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input request__input_phone phone _req" type="tel" name="phone" placeholder="7" required
              value="7">
          </label>
          <label class="request__label">

            <span class="request__label-text">
              Виды работ
            </span>
            <span class="request__label-star">

            </span>

            <input class="request__input request__input_name" type="text" name="work-type" placeholder=""
              required>
          </label>
          <!-- <label class="request__label">
            <span class="request__label-text">
              E-mail
            </span>
            <input class="request__input request__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label> -->
          <div class="request__file-label-wrap">
            <span class="request__file-label-title">
              Коммерческое предложения
            </span>
            <label class="request__file-label">
              <span class="request__file-label-text">
                Прикрепить файл
              </span>
              <input class="request__file-input" type="file" name="file" hidden>
            </label>
          </div>
          <label class="request__label request__label_textarea">
            <span class="request__label-text">
              Расскажите о вашей компании
            </span>
            <textarea class="request__input request__input_textarea" name="message"></textarea>
          </label>
        </div>

        <button class="btn btn_green request__btn">
          Отправить
        </button>


        <div class="request__agreement-wrap">
          <span class="request__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="request__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="request__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup sot-request sot-request_agent" id="sot-agent" data-id="8">
  <div class="popup__body">
    <div class="popup__content">
      <form class="request__form os-form">
        <h3 class="request__title">
          Оставить заявку
        </h3>
        <p class="request__desc text">
          Менеджер свяжется с вами в ближайшее время
        </p>

        <div class="request__label-block">

          <input type="number" name="id" value="8" hidden>
          <input type="text" name="theme" value="question" hidden>

          <label class="request__label">
            <span class="request__label-text">
              ФИО представителя
            </span>
            <span class="request__label-star">
              *
            </span>

            <input class="request__input request__input_name _req" type="text" name="name" placeholder="Введите имя"
              required>
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Название агенства
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input request__input_name _req" type="text" name="work-type" placeholder="Введите название"
              required>
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Телефон
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input request__input_phone phone _req" type="tel" name="phone" placeholder="7" required
              value="7">
          </label>
          <!-- <label class="request__label">
            <span class="request__label-text">
              E-mail
            </span>
            <input class="request__input request__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label> -->
          <div class="request__file-label-wrap">
            <span class="request__file-label-title">
              Коммерческое предложения
            </span>
            <label class="request__file-label">
              <span class="request__file-label-text">
                Прикрепить файл
              </span>
              <input class="request__file-input" type="file" name="file" hidden>
            </label>
          </div>
          <label class="request__label request__label_textarea">
            <span class="request__label-text">
              Расскажите о вашей компании
            </span>
            <textarea class="request__input request__input_textarea" name="message"></textarea>
          </label>
        </div>

        <button class="btn btn_green request__btn">
          Отправить
        </button>


        <div class="request__agreement-wrap">
          <span class="request__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="request__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="request__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

<div class="popup sot-bank" id="sot-bank" data-id="9">
  <div class="popup__body">
    <div class="popup__content">
      <form class="request__form os-form">
        <h3 class="request__title">
          Оставить заявку
        </h3>

        <input type="number" name="id" value="9" hidden>
        <input type="text" name="theme" value="question" hidden>

        <label class="request__label">
          <span class="request__label-text">
            Телефон
          </span>
          <span class="request__label-star">
            *
          </span>
          <input class="request__input request__input_phone phone _req" type="tel" name="phone" placeholder="7" required
            value="7">
        </label>

        <button class="btn btn_green request__btn">
          Отправить
        </button>


        <div class="request__agreement-wrap">
          <span class="request__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="request__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="request__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>


<div class="popup popup_call" id="popup-booking-call" data-id="10">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form">
        <h3 class="form__title">
          Заказать звонок
        </h3>

        <p class="form__desc">
          Оставьте ваши данные и наш менеджер свяжется с вами
        </p>

        <div class="form__label-block">

          <input type="number" name="id" value="10" hidden>
          <input type="text" name="theme" value="call" hidden>
          <input type="text" name="floor" value="" hidden>
          <input type="text" name="payment" value="" hidden>
          <input type="text" name="house" value="" hidden>
          <input type="text" name="project" value="" hidden>
          <input type="text" name="apartment" value="" hidden>
        <input type="text" name="house_id" value="" hidden>



          <label class="form__label">
            <span class="form__label-text">
              Имя
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_name _req" type="text" name="name" placeholder="Как вас зовут?">
          </label>

          <label class="form__label">
            <span class="form__label-text">
              Телефон
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_phone _req phone" type="tel" name="phone" placeholder="Номер телефона">
          </label>

          <label class="form__label">
            <span class="form__label-text">
              E-mail
            </span>
            <input class="form__input form__input_email" type="email" name="email" placeholder="E-mail">
          </label>

        </div>

        <button class="btn btn_dark form__btn">
          Отправить
        </button>

        <div class="form__agreement-wrap">
          <span class="form__agreement-text">
            Нажимая кнопку «Отправить», вы соглашаетесь с
          </span>
          <a class="form__agreement-link" href="/pages/policy/agreement/" target="_blank">
            условиями обработки персональных данных
          </a>
        </div>

        <span class="form__close-btn popup-close">
          <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L21 16M21 1L1 16" stroke="#8C8C8C" stroke-width="1.5" />
          </svg>
        </span>

      </form>
    </div>
  </div>
</div>

