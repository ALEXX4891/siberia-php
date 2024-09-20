<?
$title = 'Страницы авторизации';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/head.php';
?>

<body class="body control__body">

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/control/includes/header.php';
  ?>

  <main class="main control">
    <section class="section control__section">
      <div class="container control__container">
        <div class="control__head choice__form">

          <div class="choice__select select select-frame">
            <div class="select__wrapper">
              <span class="select__placeholder">
                Тип
              </span>
              <p class="select__text"></p>
            </div>
            <span class="select__arrow">
              <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </span>
            <ul class="select__list">
              <li class="select__item" data-id="1">Опубликованы</li>
              <li class="select__item" data-id="2">Черновики</li>
              <li class="select__item" data-id="3">Все</li>
            </ul>
          </div>

          <a class="control__btn btn btn_green" href="/control/pages/akcii/edit.php">
            Создать акцию
          </a>
        </div>
      </div>
    </section>

    <section class="section control__section content">

      <div class="container control__container control__content">

        <ul class="control__content-list">

          <?
          $resultEvents = mysqli_query($db, "SELECT * FROM events ORDER BY date ASC");
          $event = mysqli_fetch_array($resultEvents);

          if (mysqli_num_rows($resultEvents) > 0) {
            do {

              // echo $event['date'];
              // $date = $date ?? 'Опубликовать';
              if (strtotime($event['date']) == 0) {
                $date = 'ОПУБЛИКОВАТЬ';
                $periodStr = '';
                $periodNumber = '';
              } else {
                $date = date("d.m.Y", strtotime($event['date']));
                $time = date("d.m.Y", strtotime($event['time']));
                $periodStr = "{$date} - {$time}";
                $periodNumber = num_word(date_diff(date_create($date), date_create($time))->format("%a"), ['день', 'дня', 'дней']);
                // num_word($dateDiff->format("%a"), ['день', 'дня', 'дней']);
              }




              echo "
                <li class='control__content-item control__card card card_event control__events' data-id={$event['id']}>

                  <h2 class='card__title'>
                    {$event['title']}
                  </h2>

                  <div class='card__head'>
                    <span class='card__head-title'>
                      Дата публикации:
                    </span>
                    <span class='card__head-date'>
                      {$date}
                    </span>
                  </div>    


                  <div class='card__head'>
                    <span class='card__head-title'>
                      Период действия:
                    </span>
                    <span class='card__head-time'>
                      {$periodStr}
                    </span>
                  </div>    


                  <div class='card__head'>
                    <span class='card__head-title'>
                      Срок действия:
                    </span>
                    <span class='card__head-period'>
                      {$periodNumber}
                    </span>
                  </div>    
    
                  <div class='news__btn-block card__btn-block' data-id={$event['id']}>
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

                  <button class='card__btn card__btn_edit' data-id={$event['id']}>
                    <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                      <path d='M7 7.39062H6C5.46957 7.39063 4.96086 7.60134 4.58579 7.97641C4.21071 8.35148 4 8.86019 4 9.39062V18.3906C4 18.9211 4.21071 19.4298 4.58579 19.8048C4.96086 20.1799 5.46957 20.3906 6 20.3906H15C15.5304 20.3906 16.0391 20.1799 16.4142 19.8048C16.7893 19.4298 17 18.9211 17 18.3906V17.3906' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                      <path d='M16 5.39073L19 8.39073M20.385 6.97573C20.7788 6.58189 21.0001 6.04772 21.0001 5.49073C21.0001 4.93375 20.7788 4.39958 20.385 4.00573C19.9912 3.61189 19.457 3.39063 18.9 3.39062C18.343 3.39062 17.8088 3.61189 17.415 4.00573L9 12.3907V15.3907H12L20.385 6.97573Z' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                    </svg>

                  </button>

                  <button class='card__btn card__btn_delete' data-id={$event['id']}>
                    <svg width='24' height='25' viewBox='0 0 24 25' fill='none' xmlns='http://www.w3.org/2000/svg'>
                      <path d='M5.89355 6.69043L6.8107 20.5319H16.8475L18.1066 6.69043H5.89355Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                      <path d='M11.7934 10.7615V16.0538M3.85791 6.69043H20.142' stroke='#999999' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' />
                      <path d='M8.74316 6.69066L10.0821 4.24805H13.9447L15.2568 6.69066H8.74316Z' stroke='#999999' stroke-width='1.5' stroke-linejoin='round' />
                    </svg>

                  </button>
                </div>
                </li>
                ";
            } while ($event = mysqli_fetch_array($resultEvents));
          }
          ?>
        </ul>

      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>