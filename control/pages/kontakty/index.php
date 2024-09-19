<?
$title = 'Страницы авторизации';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<body class="body control__body control__body_contacts">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/header.php';
  ?>

  <main class="main control">
    <section class="section control__section edit-page">
      <div class="container control__container">

        <?
        // echo '2';
        if (isset($_POST['contacts-submit'])) {
          // echo '3';

          $phone =  $_POST['contacts-phone'];
          $email = $_POST['contacts-email'];
          $adress = $_POST['contacts-adress'];
          $map = $_POST['contacts-map'];

          // $sql = "UPDATE contacts SET phone = '$phone', email = '$email', address = '$adress', `map-code` = '$map' WHERE id = 1";
          $sql = sprintf(
            "UPDATE `contacts` SET `phone` = '%s', `email` = '%s', `address` = '%s', `map-code` = '%s' WHERE id = 1",
            mysqli_real_escape_string($db, $phone),
            mysqli_real_escape_string($db, $email),
            mysqli_real_escape_string($db, $adress),
            mysqli_real_escape_string($db, $map)
          );

          // echo $sql;
          mysqli_query($db, $sql);
          // mysqli_close($db);
          // echo $sql;
          header("Location: /control/pages/kontakty/");

        }


        if (isset($_POST['newOfficeSubmit'])) {

          $name = $_POST['newOfficeTitle']; //newOfficeTitle
          $description = $_POST['newOfficeDesc']; //newOfficeDesc
          $address = $_POST['newOfficeAddress']; // newOfficeAddress
          $phone = $_POST['newOfficePhone']; // newOfficePhone
          $email = $_POST['newOfficeEmail']; // newOfficeEmail
          $status = isset($_POST['newOfficeCheck']) ? '1' : '0'; // newOfficeCheck

          $sql = sprintf(
            "INSERT INTO `offices` (`name`, `description`, `address`, `phone`, `email`, `status`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
            mysqli_real_escape_string($db, $name),
            mysqli_real_escape_string($db, $description),
            mysqli_real_escape_string($db, $address),
            mysqli_real_escape_string($db, $phone),
            mysqli_real_escape_string($db, $email),
            mysqli_real_escape_string($db, $status)
          );
          // echo $sql;
          mysqli_query($db, $sql);
          header('Location: /control/pages/kontakty/');
        }

        if (isset($_POST['editOfficeSubmit'])) {

          $name = $_POST['editOfficeTitle']; //editOfficeTitle
          $description = $_POST['editOfficeDesc']; //editOfficeDesc
          $address = $_POST['editOfficeAddress']; // editOfficeAddress
          $phone = $_POST['editOfficePhone']; // editOfficePhone
          $email = $_POST['editOfficeEmail']; // editOfficeEmail
          $status = isset($_POST['editOfficeCheck']) ? '1' : '0'; // editOfficeCheck
          $id = $_POST['editOfficeId'];

          $sql = sprintf(
            "UPDATE `offices` SET `name` = '%s', `description` = '%s', `address` = '%s', `phone` = '%s', `email` = '%s', `status` = '%s' WHERE id = '%s'",
            // "INSERT INTO `offices` (`name`, `description`, `address`, `phone`, `email`, `status`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
            mysqli_real_escape_string($db, $name),
            mysqli_real_escape_string($db, $description),
            mysqli_real_escape_string($db, $address),
            mysqli_real_escape_string($db, $phone),
            mysqli_real_escape_string($db, $email),
            mysqli_real_escape_string($db, $status),
            mysqli_real_escape_string($db, $id)
          );
          // echo $sql;
          mysqli_query($db, $sql);
          header('Location: /control/pages/kontakty/');
        }


        ?>
        <?
        $resultContacts = mysqli_query($db, "SELECT * FROM contacts WHERE id = 1");
        $cont = mysqli_fetch_array($resultContacts);
        // echo $cont['address'];
        // echo htmlspecialchars( $cont['map-code'], ENT_QUOTES );
        // echo '1';

        ?>
        <?
        $resultOffices = mysqli_query($db, "SELECT * FROM offices");
        $office = mysqli_fetch_array($resultOffices);
        // echo $cont['address'];
        // echo htmlspecialchars( $cont['map-code'], ENT_QUOTES );
        // echo '1';
        ?>




        <form method="post" action="#" class="control__form control__form_contacts">
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
              <input id="phone" class="control__input control__input_phone" name="contacts-phone" type="text" value="<?= $cont['phone'] ?>" placeholder="Телефон">
            </label>

            <label for="email" class="control__label control__label_email">
              <span>
                E-mail
              </span>
              <input id="email" class="control__input control__input_email" value="<?= $cont['email'] ?>" type="email" name="contacts-email">
            </label>

            <label for="adress" class="control__label control__label_adress">
              <span>
                Адрес
              </span>
              <textarea id="adress" class="control__input control__input_adress" name="contacts-adress"><?= $cont['address'] ?></textarea>
            </label>

            <label for="map-code" class="control__label control__label_map">
              <span>
                Код карты
              </span>
              <textarea id="map-code" class="control__input control__input_map" name="contacts-map"><?= htmlspecialchars($cont['map-code'], ENT_QUOTES) ?></textarea>
            </label>


            <input class="control__input control__input_submit btn btn_green" value="Сохранить" name="contacts-submit" type="submit">


          </div>
        </form>

        <div class="control__offices">
          <h2 class="control__office-title">
            Офисы продаж
          </h2>

          <?

          if (mysqli_num_rows($resultOffices) > 0) {
            do {

              $status = $office['status'] === '1' ? 'Активный офис' : 'Неактивный офис';
              $class = $office['status'] === '1' ? '_active' : '';
              $chek = $office['status'] === '1' ? 'checked' : '';

              echo "
          <div class='control__office office' data-id={$office['id']}>

            <div class='office__top-wrap'>
              <p class='office__active-mark {$class}'>
                {$status}
              </p>

              <div class='office__btn-block card__btn-block' data-id={$office['id']}>
                <button class='card__btn card__btn_publish {$class}'>
                  <svg class='card__btn-icon card__btn-icon_publish' width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M3 13.3906C6.6 5.39062 17.4 5.39062 21 13.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M12 17.3906C11.606 17.3906 11.2159 17.313 10.8519 17.1623C10.488 17.0115 10.1573 16.7905 9.87868 16.5119C9.6001 16.2334 9.37913 15.9027 9.22836 15.5387C9.0776 15.1747 9 14.7846 9 14.3906C9 13.9967 9.0776 13.6066 9.22836 13.2426C9.37913 12.8786 9.6001 12.5479 9.87868 12.2693C10.1573 11.9907 10.488 11.7698 10.8519 11.619C11.2159 11.4682 11.606 11.3906 12 11.3906C12.7956 11.3906 13.5587 11.7067 14.1213 12.2693C14.6839 12.8319 15 13.595 15 14.3906C15 15.1863 14.6839 15.9493 14.1213 16.5119C13.5587 17.0746 12.7956 17.3906 12 17.3906Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                  </svg>

                  <svg  class='card__btn-icon card__btn-icon_disabled' width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M3 13.3906C6.6 5.39056 17.4 5.39056 21 13.3906M21.9702 4.81641L3 22.523' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                    <path d='M12 17.3906C11.606 17.3906 11.2159 17.313 10.8519 17.1623C10.488 17.0115 10.1573 16.7905 9.87868 16.5119C9.6001 16.2334 9.37913 15.9027 9.22836 15.5387C9.0776 15.1747 9 14.7846 9 14.3906C9 13.9967 9.0776 13.6066 9.22836 13.2426C9.37913 12.8786 9.6001 12.5479 9.87868 12.2693C10.1573 11.9907 10.488 11.7698 10.8519 11.619C11.2159 11.4682 11.606 11.3906 12 11.3906C12.7956 11.3906 13.5587 11.7067 14.1213 12.2693C14.6839 12.8319 15 13.595 15 14.3906C15 15.1863 14.6839 15.9493 14.1213 16.5119C13.5587 17.0746 12.7956 17.3906 12 17.3906Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
                  </svg>
                </button>

                <button class='card__btn card__btn_edit' data-id={$office['id']}>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M7 7.39062H6C5.46957 7.39063 4.96086 7.60134 4.58579 7.97641C4.21071 8.35148 4 8.86019 4 9.39062V18.3906C4 18.9211 4.21071 19.4298 4.58579 19.8048C4.96086 20.1799 5.46957 20.3906 6 20.3906H15C15.5304 20.3906 16.0391 20.1799 16.4142 19.8048C16.7893 19.4298 17 18.9211 17 18.3906V17.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M16 5.39073L19 8.39073M20.385 6.97573C20.7788 6.58189 21.0001 6.04772 21.0001 5.49073C21.0001 4.93375 20.7788 4.39958 20.385 4.00573C19.9912 3.61189 19.457 3.39063 18.9 3.39062C18.343 3.39062 17.8088 3.61189 17.415 4.00573L9 12.3907V15.3907H12L20.385 6.97573Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                  </svg>

                </button>

                <button class='card__btn card__btn_delete' data-id={$office['id']}>
                  <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M5.89355 6.69043L6.8107 20.5319H16.8475L18.1066 6.69043H5.89355Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                    <path d='M11.7934 10.7615V16.0538M3.85791 6.69043H20.142' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    <path d='M8.74316 6.69066L10.0821 4.24805H13.9447L15.2568 6.69066H8.74316Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                  </svg>

                </button>
              </div>
            </div>

            <h3 class='office__title'>
              {$office['name']}
            </h3>
            <p class='office__desc'>
            {$office['description']}
            </p>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Адрес:
              </span>
              <span class='card__head-val office__address'>
              {$office['address']}
              </span>
            </div>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Телефон:
              </span>
              <span class='card__head-val office__phone'>
              {$office['phone']}
              </span>
            </div>

            <div class='office__bot-wrap card__head'>
              <span class='card__head-title'>
                Почта:
              </span>
              <span class='card__head-val office__email'>
              {$office['email']}
              </span>
            </div>

          </div>

          <form class='office__edit-office edit-office new-office' style='display: none;' method='post' action='#' data-id={$office['id']}>
          <h2 class='edit-office__title new-office__title'>
            Редактировать офис
          </h2>

          <input value='{$office['id']}' name='editOfficeId' type='number' hidden>

  
          <label class='control__label control__label_title'>
            <span>
              Название
            </span>
            <input class='control__input control__input_title' value='{$office['name']}' name='editOfficeTitle' type='text' placeholder='Название'>
          </label>
  
          <label class='control__label control__label_desc'>
            <span>
              Описание
            </span>
            <input class='control__input control__input_desc' value='{$office['description']}' name='editOfficeDesc' type='text' placeholder='Описание'>
          </label>
  
          <label class='control__label control__label_address'>
            <span>
              Адрес
            </span>
            <input class='control__input control__input_address' value='{$office['address']}' name='editOfficeAddress' type='text' placeholder='Адрес'>
          </label>
  
          <div class='edit-office__wrap new-office__wrap'>
            <label class='control__label control__label_phone'>
              <span>
                Телефон
              </span>
              <input class='control__input control__input_phone phone' value='{$office['phone']}' name='editOfficePhone' type='tel' placeholder='Телефон'>
            </label>
  
            <label class='control__label control__label_E-mail'>
              <span>
                E-mail
              </span>
              <input class='control__input control__input_E-mail' value='{$office['email']}' name='editOfficeEmail' type='email' placeholder='E-mail'>
            </label>
          </div>
  
          <label class='control__label control__label_check'>
            <input class='control__check control__input_check' {$chek} type='checkbox' value='1' name='editOfficeCheck'>
            <span>
              Активный офис
            </span>
          </label>
  
          <div class='control__btn-wrap'>
            <input class='control__input control__input_submit btn btn_green' data-id={$office['id']} value='Сохранить' name='editOfficeSubmit' type='submit'>
            <button class='control__btn control__btn_cancel btn btn_white'>Отмена</button>
          </div>
  
        </form>
          ";
            } while ($office = mysqli_fetch_array($resultOffices));
          }
          ?>

          <button class="office__btn btn btn_green" id="new-office-btn">
            Создать офис
          </button>


          <form class="office__new-office new-office" style="display: none;" id="new-office" method="post" action="">
            <h2 class="new-office__title">
              Новый офис
            </h2>

            <label for="title" class="control__label control__label_title">
              <span>
                Название
              </span>
              <input id="title" class="control__input control__input_title" name="newOfficeTitle" type="text" placeholder="Название">
            </label>

            <label for="desc" class="control__label control__label_desc">
              <span>
                Описание
              </span>
              <input id="desc" class="control__input control__input_desc" name="newOfficeDesc" type="text" placeholder="Описание">
            </label>

            <label for="address" class="control__label control__label_address">
              <span>
                Адрес
              </span>
              <input id="address" class="control__input control__input_address" name="newOfficeAddress" type="text" placeholder="Адрес">
            </label>

            <div class="new-office__wrap">
              <label for="phone" class="control__label control__label_phone">
                <span>
                  Телефон
                </span>
                <input id="phone" class="control__input control__input_phone phone" name="newOfficePhone" type="tel" placeholder="Телефон">
              </label>

              <label for="E-mail" class="control__label control__label_E-mail">
                <span>
                  E-mail
                </span>
                <input id="E-mail" class="control__input control__input_E-mail" name="newOfficeEmail" type="email" placeholder="E-mail">
              </label>
            </div>

            <label for="check" class="control__label control__label_check">
              <input id="check" class="control__check control__input_check" type="checkbox" value="1" name="newOfficeCheck">
              <span>
                Активный офис
              </span>
            </label>

            <div class="control__btn-wrap">
              <input class="control__input control__input_submit btn btn_green" value="Сохранить" name="newOfficeSubmit" type="submit">
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