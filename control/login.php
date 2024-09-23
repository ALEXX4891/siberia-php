<?
$title = 'Страница авторизации';
session_start();
include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';
$description = '';
$keywords = '';
// include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';

$_SESSION['login'] = null; 
$_SESSION['user_id'] = null; 
$_SESSION['access'] = null;

// admin
// password135
    
//Авторизация пользователя
if($_POST['loginBtn'])
{
    //Проверка полей на заполненность-------------------------------------------------------------------------------
    if(!$_POST['loginUser']) {$error = 'Логин не заполнен';}
    elseif(!$_POST['loginPsw']) {$error = 'Пароль не заполнен';}
    else
    {
        //Убиваем теги и скрипты
        $login = formatting($_POST['loginUser']);
        $password = formatting($_POST['loginPsw']); 
        $password = md5($password);
            
        //Проверяем есть ли такой логин
        $countLogin = mysqli_query($db, "SELECT * FROM user WHERE login = '$login'");
        if (mysqli_num_rows($countLogin) == 0) {
          $error = 'Логин или пароль указан неверно';
        }
        else
        {
            //Если логин существует, то проверяем пароль
            $result2 = mysqli_query($db, "SELECT * FROM user WHERE login = '$login'");
            $row2 = mysqli_fetch_array($result2);                        
            if ($row2['password'] != $password) {$error = 'Логин или пароль указан неверно';}
            else 
            {         
              // $error = 'Логин или пароль верные';      
                $_SESSION['login'] = $row2['login'];      
                $_SESSION['user_id'] = $row2['id']; 
                $_SESSION['access'] = $row2['access']; 
                echo '<meta http-equiv="refresh" content="0; URL=\'/control/pages/novosti/\'" />';
                exit();
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><? echo $title ?></title>
  <? if ($meta) echo $meta ?>
  <meta name="keywords" content="<? echo $keywords ?>" />
  <meta name="description" content="<? echo $description ?>" />
  <link rel="canonical" href="<? echo 'https://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI']; ?>" />

  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
  <link rel="icon" type="/image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
  <link rel="icon" type="/image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="/assets/css/fancybox.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

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

        <form action="#" class="auth__form" method="post">
          <h3 class="auth__title">
            Авторизация
          </h3>
          <label for="login" class="auth__label">
            <p class="auth__text">
              Логин
            </p>

            <input type="text" id="login" name="loginUser" class="auth__input">
          </label>

          <label for="password" class="auth__label auth__label_pass">
            <p class="auth__text">
              Пароль
            </p>

            <input type="password" id="password" name="loginPsw" class="auth__input auth__input_password">
            <button class="auth__eye">
              <svg class="auth__icon-eye" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 13C6.6 5 17.4 5 21 13" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 17C11.606 17 11.2159 16.9224 10.8519 16.7716C10.488 16.6209 10.1573 16.3999 9.87868 16.1213C9.6001 15.8427 9.37913 15.512 9.22836 15.1481C9.0776 14.7841 9 14.394 9 14C9 13.606 9.0776 13.2159 9.22836 12.8519C9.37913 12.488 9.6001 12.1573 9.87868 11.8787C10.1573 11.6001 10.488 11.3791 10.8519 11.2284C11.2159 11.0776 11.606 11 12 11C12.7956 11 13.5587 11.3161 14.1213 11.8787C14.6839 12.4413 15 13.2044 15 14C15 14.7956 14.6839 15.5587 14.1213 16.1213C13.5587 16.6839 12.7956 17 12 17Z" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

              <svg class="auth__icon-eye auth__icon-eye_visible" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12.9999C6.6 4.99993 17.4 4.99993 21 12.9999M21.9702 4.42578L3 22.1324" stroke="#89B36A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 17C11.606 17 11.2159 16.9224 10.8519 16.7716C10.488 16.6209 10.1573 16.3999 9.87868 16.1213C9.6001 15.8427 9.37913 15.512 9.22836 15.1481C9.0776 14.7841 9 14.394 9 14C9 13.606 9.0776 13.2159 9.22836 12.8519C9.37913 12.488 9.6001 12.1573 9.87868 11.8787C10.1573 11.6001 10.488 11.3791 10.8519 11.2284C11.2159 11.0776 11.606 11 12 11C12.7956 11 13.5587 11.3161 14.1213 11.8787C14.6839 12.4413 15 13.2044 15 14C15 14.7956 14.6839 15.5587 14.1213 16.1213C13.5587 16.6839 12.7956 17 12 17Z" stroke="#89B36A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

            </button>
          </label>

          <input type="submit" name="loginBtn" class="auth__btn btn btn_green">
            Войти
          </input>
        </form>

        <span class="control-section-login_auth-error"><? echo $error;?></span>

      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>