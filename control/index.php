<?
$title = 'Страница авторизации';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';
?>

<body class="body auth__body">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/header.php';
  ?>

  <main class="main auth">
    <section class="section auth__section">
      <div class="container auth__content">
        <div class="auth__logo logo">
          <a href="/" class="logo__link">
            <img class="logo__main" width="116" height="43" src="/assets/img/logo-white.svg" alt="Логотип Сибирь">
          </a>
        </div>

        <form action="" class="auth__form">
          <h3 class="auth__title">
            Авторизация
          </h3>
          <label for="login" class="auth__label">
            <p class="auth__text">
              Логин
            </p>

            <input type="text" id="login" class="auth__input">
          </label>

          <label for="password" class="auth__label auth__label_pass">
            <p class="auth__text">
              Пароль
            </p>

            <input type="password" id="password" class="auth__input">
            <button class="auth__eye">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 13C6.6 5 17.4 5 21 13" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 17C11.606 17 11.2159 16.9224 10.8519 16.7716C10.488 16.6209 10.1573 16.3999 9.87868 16.1213C9.6001 15.8427 9.37913 15.512 9.22836 15.1481C9.0776 14.7841 9 14.394 9 14C9 13.606 9.0776 13.2159 9.22836 12.8519C9.37913 12.488 9.6001 12.1573 9.87868 11.8787C10.1573 11.6001 10.488 11.3791 10.8519 11.2284C11.2159 11.0776 11.606 11 12 11C12.7956 11 13.5587 11.3161 14.1213 11.8787C14.6839 12.4413 15 13.2044 15 14C15 14.7956 14.6839 15.5587 14.1213 16.1213C13.5587 16.6839 12.7956 17 12 17Z" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </label>

          <button type="submit" class="auth__btn btn btn_green">
            Войти
          </button>
        </form>

      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>