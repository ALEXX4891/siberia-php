<?
include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';
?>

<div class="popup" id="promo">
  <div class="popup__body">

    <?

    $resultCon = mysqli_query($db, "SELECT * FROM contacts");

    $cont = mysqli_fetch_array($resultCon);

    $telNumber = preg_replace('/[^0-9\.]+/', '', $cont['phone']);

    $resultEvent = mysqli_query($db, "SELECT * FROM events WHERE status = 1");

    $event = mysqli_fetch_array($resultEvent);

    if (mysqli_num_rows($resultEvent) > 0) {
      do {
        $eventArr[] = $event;
        $now = date('Y-m-d H:i:s');
        $time = date('Y-m-d H:i:s', strtotime($event['time']));
        $dateDiff = date_diff(date_create($now), date_create($time));
        // echo $dateDiff->format("%a");
        echo '
      <div class="popup__content popup__promo promo">
      <h2 class="promo__title title title_40">
        ' . $event['title'] . '
      </h2>
      <div class="promo__top-wrap">
        <span class="promo__date">
        ' . date("d", strtotime($event['time'])) . ' '
          . monthRus(date("m", strtotime($event['time'])), 'rod', 2) . ' '
          . date("Y", strtotime($event['time'])) . '
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
          Осталось ' . num_word($dateDiff->format("%a"), ['день', 'дня', 'дней']) . ' 
        </span>
      </div>

      <div class="promo__wrapper">
        <div class="promo__img">
          <img src="/assets/img/' . $event['photo'] . '" alt="' . $event['title'] . '">
        </div>

        <p class="promo__desc">
          Срок предложения ограничен. <br><br>
          Узнайте подробнее об условиях акции у менеджеров в отделе продаж по телефону:
        </p>
        <a href="tel:+' . $telNumber . '" class="promo__phone">' . $cont['phone'] . '</a>


        <button class="promo__btn btn btn_dark popup-link" href="#popup-call" data-request="Акция: ' . $event['title'] . '">
          Связаться с нами
        </button>
      </div>

      <button class="promo__close popup-close">
        <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L28.5 21M1 21L28.5 1" stroke="black" />
        </svg>
      </button>
    </div>
      ';
      } while ($event = mysqli_fetch_array($resultEvent));
    }

    ?>

  </div>
</div>