<!-- ----- всплывающие окна: ----- -->


<div class="popup" id="filter">
  <div class="popup__body">
    <div class="popup__content filter">
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
    <div class="popup__content menu">

      <div class="header__logo logo">
        <a href="/" class="logo__link">
          <img class="logo__main" width="116" height="43" src="/assets/img/logo.svg" alt="застройщик сибирь">
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
      <button class="btn btn_green program__btn popup-link" href="popup-request" data-request="ИТ-ипотека">
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
      <button class="btn btn_green program__btn popup-link" href="popup-request" data-request="Семейная ипотека">
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

<div class="popup popup_subscribe" id="popup-subscribe" data-id="3">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="popup__form os-form" action="#">
        <h3 class="form__title">
          Будь в курсе событий!
        </h3>

        <div class="form__label-block">

          <input type="number" name="id" value="3" hidden>
          <input type="text" name="theme" value="question" hidden>
          <input type="text" name="name" value="subscribe" hidden>
          <input type="number" name="phone" value="1111111111" hidden>


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

        <button type="submit" class="btn btn_green form__btn">
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
          <input type="text" name="theme" value="question" hidden>

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
              Агентство недвижимости
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agency _req" type="text" name="agency"
              placeholder="Введите название агентства">
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
            <input class="notification__input notification__input_agent-phone phone _req" type="tel" name="agent-phone" placeholder="7">
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

<div class="popup sot-request sot-request_agent" id="sot-agent" data-id="8">
  <div class="popup__body">
    <div class="popup__content">
      <form class="request__form popup__form os-form">
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

            <input class="request__input form__input request__input_name _req" type="text" name="name" placeholder="Введите имя">
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Название агентства
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input form__input request__input_name _req" type="text" name="work-type" placeholder="Введите название">
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Телефон
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input form__input request__input_phone phone _req" type="tel" name="phone" placeholder="7"
              value="7">
          </label>
          <!-- <label class="request__label">
            <span class="request__label-text">
              E-mail
            </span>
            <input class="request__input form__input request__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label> -->
          <div class="request__file-label-wrap">
            <span class="request__file-label-title">
              Коммерческое предложения
            </span>
            <label class="request__file-label">
              <span class="request__file-label-text">
                Прикрепить файл
              </span>
              <input class="request__file-input _file" type="file" name="file" hidden>
            </label>
          </div>
          <label class="request__label request__label_textarea">
            <span class="request__label-text">
              Расскажите о вашей компании
            </span>
            <textarea class="request__input form__input request__input_textarea" name="message"></textarea>
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
      <form class="request__form popup__form os-form">
        <h3 class="request__title">
          Оставить заявку
        </h3>

        <input type="number" name="id" value="9" hidden>
        <input type="text" name="theme" value="call" hidden>
        <input type="text" name="name" value="Банк" hidden>


        <label class="request__label">
          <span class="request__label-text">
            Телефон
          </span>
          <span class="request__label-star">
            *
          </span>
          <input class="request__input form__input request__input_phone phone _req" type="tel" name="phone" placeholder="7" required
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

<div class="popup sot-request sot-request_business" id="sot-business" data-id="7">
  <div class="popup__body">
    <div class="popup__content">
      <form class="request__form popup__form os-form">
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

            <input class="request__input form__input request__input_name _req" type="text" name="name" placeholder="Введите имя">
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Телефон
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input form__input request__input_phone phone _req" type="tel" name="phone" placeholder="7"
              value="7">
          </label>
          <label class="request__label">

            <span class="request__label-text">
              Виды работ
            </span>
            <span class="request__label-star">

            </span>

            <input class="request__input form__input request__input_name" type="text" name="work-type" placeholder="">
          </label>
          <!-- <label class="request__label">
            <span class="request__label-text">
              E-mail
            </span>
            <input class="request__input form__input request__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label> -->
          <div class="request__file-label-wrap">
            <span class="request__file-label-title">
              Коммерческое предложения
            </span>
            <label class="request__file-label">
              <span class="request__file-label-text">
                Прикрепить файл
              </span>
              <input class="request__file-input _file" type="file" name="file" hidden>
            </label>
          </div>
          <label class="request__label request__label_textarea">
            <span class="request__label-text">
              Расскажите о вашей компании
            </span>
            <textarea class="request__input form__input request__input_textarea" name="message"></textarea>
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