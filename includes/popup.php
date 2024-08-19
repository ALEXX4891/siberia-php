<div class="popup" id="popup-form">
  <div class="popup__body">
    <div class="popup__content popup-form">
      <form class="form" id="choice-form">
        <h3 class="form__title">
          Запросить планировки
        </h3>

        <div class="form__label-block">
          <label class="form__label">
            <span class="form__label-text">
              ФИО
            </span>
            <span class="form__label-star">
              *
            </span>

            <input class="form__input form__input_name" type="text" name="name" placeholder="Введите имя" required>
          </label>
          <label class="form__label">
            <span class="form__label-text">
              Телефон
            </span>
            <span class="form__label-star">
              *
            </span>
            <input class="form__input form__input_phone" type="tel" name="phone" placeholder="7" required value="7">
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
            <textarea class="form__input form__input_textarea" name="text" placeholder="Сообщение"></textarea>
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

<div class="popup" id="popup-request">
  <div class="popup__body">
    <div class="popup__content popup-request">
      <form class="request" id="request-form">
        <h3 class="request__title">
          Оставить заявку
        </h3>

        <div class="request__label-block">
          <label class="request__label request__label_readonly">
            <span class="request__label-text">
              Планировка
            </span>
            <span class="request__label-star">
              *
            </span>

            <input class="request__input request__input_apartment" type="text" name="apartment"
              placeholder="Выберите квартиру" readonly required>
          </label>
          <label class="request__label">
            <span class="request__label-text">
              ФИО
            </span>
            <span class="request__label-star">
              *
            </span>

            <input class="request__input request__input_name" type="text" name="name" placeholder="Введите имя"
              required>
          </label>
          <label class="request__label">
            <span class="request__label-text">
              Телефон
            </span>
            <span class="request__label-star">
              *
            </span>
            <input class="request__input request__input_phone" type="tel" name="phone" placeholder="7" required
              value="7">
          </label>
          <label class="request__label">
            <span class="request__label-text">
              E-mail
            </span>
            <input class="request__input request__input_email" type="email" name="email" placeholder="Введите e-mail">
          </label>
          <label class="request__label request__label_textarea">
            <span class="request__label-text">
              Комментарий
            </span>
            <textarea class="request__input request__input_textarea" name="text" placeholder="Сообщение"></textarea>
          </label>
        </div>

        <button class="btn btn_dark request__btn">
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

<div class="popup" id="popup-notification">
  <div class="popup__body">
    <div class="popup__content popup-notification">
      <form class="notification" id="notification-form">
        <h3 class="notification__title">
          Форма уведомления
        </h3>

        <div class="notification__label-block">

          <label class="notification__label notification__agency">
            <span class="notification__label-text">
              Агенство недвижимости
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agency" type="text" name="agency"
              placeholder="Введите название агенства" required>
          </label>

          <label class="notification__label notification__agent-name">
            <span class="notification__label-text">
              ФИО агента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agent-name" type="text" name="agent-name"
              placeholder="Введите имя" required>
          </label>

          <label class="notification__label notification__agent-phone">
            <span class="notification__label-text">
              Телефон агента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_agent-phone" type="tel" name="agent-phone"
              placeholder="7" required value="7">
          </label>

          <label class="notification__label notification__client-name">
            <span class="notification__label-text">
              ФИО клиента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_client-name" type="text" name="client-name"
              placeholder="Введите имя" required>
          </label>

          <label class="notification__label notification__client-phone">
            <span class="notification__label-text">
              Телефон клиента
            </span>
            <span class="notification__label-star">
              *
            </span>
            <input class="notification__input notification__input_client-phone" type="tel" name="client-phone"
              placeholder="7" required value="7">
          </label>

          <label class="notification__label notification__label_textarea">
            <span class="notification__label-text">
              Сообщение
            </span>
            <textarea class="notification__input notification__input_textarea" name="text"
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

<div class="popup" id="success">
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

    </div>
  </div>
</div>

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

        <ul class="promo__list">
          <li class="promo__item">
            <h3 class="promo__item-title">
              Живите без забот.
            </h3>
            <p class="promo__item-text">
              Забудьте о платежах по ипотеке!
            </p>
          </li>

          <li class="promo__item">
            <h3 class="promo__item-title">
              Что это такое?
            </h3>
            <p class="promo__item-text">
              Мы запускаем акцию, которая позволяет нам оплачивать расходы по ипотеке до конца года в сданных домах: Дом на Мысу, Квартал на Московском и в Доме на Баумана.
            </p>
          </li>

          <li class="promo__item">
            <h3 class="promo__item-title">
              “А в Кедровом береге тоже заплатите?”
            </h3>
            <p class="promo__item-text">
              Да! Мы платим по ипотеке до ввода дома. Акция распространяется на строящиеся проекты: Квартал в Гагаринском парке и на Кедровый берег.
            </p>
          </li>
        </ul>

        <p class="promo__desc">
          Срок предложения ограничен. <br><br>
          Узнайте подробнее об условиях акции у менеджеров в отделе продаж по телефону:
        </p>
        <a href="tel:+73452611157" class="promo__phone">8 (3452) 611-157</a>

        <button class="promo__btn btn btn_dark popup-link" href="#popup-form">
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
        <a href="tel:8 (3452) 611-157" class="contacts__item contacts__item_phone">
          8 (3452) 611-157
        </a>
        <a href="mailto:sosnovy@siberiadev.ru" class="contacts__item contacts__item_email">
          sosnovy@siberiadev.ru
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