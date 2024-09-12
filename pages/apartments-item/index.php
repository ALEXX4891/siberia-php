<?
$title = 'Квартира';
$description = '';
$keywords = '';
include $_SERVER["DOCUMENT_ROOT"] . '/includes/head.php';
?>

<body class="apartments-item-page">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMZW3TMH" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/header.php';
  ?>

  <main class="main apartments-item-page__main">
    <section class="section apartments-item-page__section about">
      <div class="container about__container">
        <div class="about__left">
          <a class="about__btn-back" href="/pages/kvartiry/">
            <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.5 13.5L1.5 7.5L8.5 1.5" stroke="#646464" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            <p class="about__btn-text">
              Вернуться к списку
            </p>
          </a>

          <div class="about__compass">
            <img src="/assets/img/compass.svg" alt="компас">
          </div>

          <div class="about__img">
            <svg width="798" height="353" viewBox="0 0 798 353" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_b_293_1247)">
                <path d="M142 327V211H164.642L407 211V352.086L228.5 352.5V327L142 327Z" fill="#CACACA" />
                <path d="M231.5 349.493V327V324H228.5L145 324V214H164.642L404 214V349.093L231.5 349.493Z"
                  stroke="#B6B6B6" stroke-width="6" />
              </g>
              <g filter="url(#filter1_b_293_1247)">
                <path d="M340 2V175L142 175L142 2L340 2Z" fill="#CACACA" />
                <path d="M337 5V172L145 172L145 5L337 5Z" stroke="#B6B6B6" stroke-width="6" />
              </g>
              <g filter="url(#filter2_b_293_1247)">
                <path d="M469 2V175L334 175V2L469 2Z" fill="#CACACA" />
                <path d="M466 5V172L337 172V5L466 5Z" stroke="#B6B6B6" stroke-width="6" />
              </g>
              <g filter="url(#filter3_b_293_1247)">
                <path d="M599 2V175L464 175V2L599 2Z" fill="#CACACA" />
                <path d="M596 5V172L467 172V5L596 5Z" stroke="#B6B6B6" stroke-width="6" />
              </g>
              <g filter="url(#filter4_b_293_1247)">
                <path d="M729 175V2L593 2V175L729 175Z" fill="#CACACA" />
                <path d="M596 5L726 5V172L596 172V5Z" stroke="#B6B6B6" stroke-width="6" />
              </g>
              <g filter="url(#filter5_b_293_1247)">
                <path d="M147.5 326L0 325.5L0.5 0.5L148 1L147.5 169L168 168.5L168 215L147.5 215.5V326Z"
                  fill="#E7F0DB" />
                <path
                  d="M147.573 171.999L165 171.574L165 212.072L147.427 212.501L144.5 212.572V215.5V322.99L3.00461 322.51L3.49538 3.51016L144.991 3.98981L144.5 168.991L144.491 172.074L147.573 171.999Z"
                  stroke="#CEDFB8" stroke-width="6" />
              </g>
              <g filter="url(#filter6_b_293_1247)">
                <path d="M797.5 326.5H655.5V169L723.5 169V2H797.5V326.5Z" fill="#E7F0DB" />
                <path d="M726.5 169V5H794.5V323.5H658.5V172L723.5 172H726.5V169Z" stroke="#CEDFB8" stroke-width="6" />
              </g>
              <path d="M539.88 323.4H658.652L658.652 213L466 213V349.5H539.874L539.88 323.4Z" fill="#9ABC6F"
                fill-opacity="0.3" stroke="#9ABC6F" stroke-width="6" />
              <rect x="701" y="213" width="51" height="36" rx="18" fill="#CEDFB8" />
              <path
                d="M717.034 237V235.477L721.074 231.517C721.46 231.127 721.782 230.78 722.04 230.477C722.297 230.174 722.491 229.881 722.619 229.597C722.748 229.312 722.812 229.009 722.812 228.688C722.812 228.32 722.729 228.006 722.562 227.744C722.396 227.479 722.167 227.275 721.875 227.131C721.583 226.987 721.252 226.915 720.881 226.915C720.498 226.915 720.163 226.994 719.875 227.153C719.587 227.309 719.364 227.53 719.205 227.818C719.049 228.106 718.972 228.449 718.972 228.847H716.966C716.966 228.108 717.134 227.466 717.472 226.92C717.809 226.375 718.273 225.953 718.864 225.653C719.458 225.354 720.14 225.205 720.909 225.205C721.689 225.205 722.375 225.35 722.966 225.642C723.557 225.934 724.015 226.333 724.341 226.841C724.67 227.348 724.835 227.928 724.835 228.58C724.835 229.015 724.752 229.443 724.585 229.864C724.419 230.284 724.125 230.75 723.705 231.261C723.288 231.773 722.703 232.392 721.949 233.119L719.943 235.159V235.239H725.011V237H717.034ZM734.057 237L730.227 231.915H729.193V237H727.085V225.364H729.193V230.148H729.722L733.858 225.364H736.455L731.858 230.67L736.653 237H734.057Z"
                fill="#616161" />
              <rect x="51" y="164" width="51" height="36" rx="18" fill="#CEDFB8" />
              <path
                d="M70.7102 188.159C69.892 188.159 69.1648 188.019 68.5284 187.739C67.8958 187.458 67.3958 187.068 67.0284 186.568C66.661 186.068 66.4659 185.491 66.4432 184.835H68.5795C68.5985 185.15 68.7027 185.424 68.892 185.659C69.0814 185.89 69.3333 186.07 69.6477 186.199C69.9621 186.328 70.3144 186.392 70.7045 186.392C71.1212 186.392 71.4905 186.32 71.8125 186.176C72.1345 186.028 72.3864 185.824 72.5682 185.562C72.75 185.301 72.839 185 72.8352 184.659C72.839 184.307 72.7481 183.996 72.5625 183.727C72.3769 183.458 72.108 183.248 71.7557 183.097C71.4072 182.945 70.9867 182.869 70.4943 182.869H69.4659V181.244H70.4943C70.8996 181.244 71.2538 181.174 71.5568 181.034C71.8636 180.894 72.1042 180.697 72.2784 180.443C72.4527 180.186 72.5379 179.888 72.5341 179.551C72.5379 179.222 72.464 178.936 72.3125 178.693C72.1648 178.447 71.9545 178.256 71.6818 178.119C71.4129 177.983 71.0966 177.915 70.733 177.915C70.3769 177.915 70.0473 177.979 69.7443 178.108C69.4413 178.237 69.197 178.42 69.0114 178.659C68.8258 178.894 68.7273 179.174 68.7159 179.5H66.6875C66.7027 178.848 66.8902 178.277 67.25 177.784C67.6136 177.288 68.0985 176.902 68.7045 176.625C69.3106 176.345 69.9905 176.205 70.7443 176.205C71.5208 176.205 72.1951 176.35 72.767 176.642C73.3428 176.93 73.7879 177.318 74.1023 177.807C74.4167 178.295 74.5739 178.835 74.5739 179.426C74.5777 180.081 74.3845 180.631 73.9943 181.074C73.608 181.517 73.1004 181.807 72.4716 181.943V182.034C73.2898 182.148 73.9167 182.451 74.3523 182.943C74.7917 183.432 75.0095 184.04 75.0057 184.767C75.0057 185.419 74.8201 186.002 74.4489 186.517C74.0814 187.028 73.5739 187.43 72.9261 187.722C72.2822 188.013 71.5436 188.159 70.7102 188.159ZM84.0412 188L80.2116 182.915H79.1776V188H77.0696V176.364H79.1776V181.148H79.706L83.8423 176.364H86.4389L81.8423 181.67L86.6378 188H84.0412Z"
                fill="#616161" />
              <defs>
                <filter id="filter0_b_293_1247" x="140" y="209" width="269" height="145.5" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
                <filter id="filter1_b_293_1247" x="140" y="0" width="202" height="177" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
                <filter id="filter2_b_293_1247" x="332" y="0" width="139" height="177" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
                <filter id="filter3_b_293_1247" x="462" y="0" width="139" height="177" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
                <filter id="filter4_b_293_1247" x="591" y="0" width="140" height="177" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
                <filter id="filter5_b_293_1247" x="-2" y="-1.5" width="172" height="329.5" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
                <filter id="filter6_b_293_1247" x="653.5" y="0" width="146" height="328.5" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="1" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_293_1247" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_293_1247" result="shape" />
                </filter>
              </defs>
            </svg>
            <!-- <picture><source srcset="/assets/img/floor.webp" type="image/webp"><img src="/assets/img/floor.png" alt=""></picture>                     -->
          </div>

          <div class="about__btn-wrap">
            <button class="about__btn about__btn_plan">
              Планировка
            </button>
            <button class="about__btn about__btn_active about__btn_floor">
              На этаже
            </button>
            <button class="about__btn about__btn_section">
              Секция
            </button>
          </div>
        </div>

        <div class="about__right choice__form">
          <button class="about__btn-complex">
            <div class="about__btn-complex-img">
              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" width="30" height="30" rx="15" fill="#9ABC6F" fill-opacity="0.2" />
                <path
                  d="M16 6C16 7.33333 13.3333 10 11.2001 10M16 6V10.5M16 6C16 7.33333 18.6667 10 20.7999 10M16 24V15.75M16 10.5C15.1111 12.1667 13.3332 15.3333 9.06664 15.3333M16 10.5V15.75M16 10.5C16.8889 12.1667 18.6668 15.3333 22.9334 15.3333M16 15.75C14.9333 17.6389 11.8399 21 8 21M16 15.75C17.0667 17.6389 20.1601 21 24 21"
                  stroke="#56693E" stroke-width="2" />
              </svg>
            </div>
            <p class="about__btn-complex-text">
              Сосновый квартал
            </p>
            <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.5 13L8.5 7L1.5 1" stroke="#646464" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
          <p class="about__right-title title title_25">
            2-комнатная &nbsp;61,88 м2
          </p>
          <div class="about__right-price-wrap">
            <p class="about__right-new-price">
              5 662 000₽
            </p>
            <p class="about__right-old-price">
              9 331 000 ₽
            </p>
          </div>
          <div class="about__right-info">
            <div class="about__right-info-left">
              <p class="about__right-info-title">
                Срок сдачи
              </p>
              <p class="about__right-info-title">
                Дом
              </p>
              <p class="about__right-info-text about__right-info-text-time">
                II квартал 2026
              </p>
              <p class="about__right-info-text about__right-info-text-section">
                ГП 3
              </p>
            </div>

            <div class="choice__select select select-frame">
              <div class="select__wrapper">
                <span class="select__placeholder">
                  Любой
                </span>
                <p class="select__text"></p>
              </div>
              <span class="select__arrow">
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.3335 1L7.54039 7L13.3335 1" stroke="#363636" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </span>
              <ul class="select__list">
                <li class="select__item">Любой</li>
                <li class="select__item" data-id="1">Этаж 1 из 4</li>
                <li class="select__item" data-id="2">Этаж 2 из 4</li>
                <li class="select__item" data-id="3">Этаж 3 из 4</li>
                <li class="select__item" data-id="4">Этаж 4 из 4</li>

                <!-- <li class="select__item" data-id="duboviy">Дубовый</li> -->
                <!-- <li class="select__item" data-id="berezoviy">Березовый</li> -->
              </ul>
            </div>
          </div>
          <div class="about__right-btn-block">
            <p class="about__right-btn-block-title">
              Особенности
            </p>
            <div class="about__right-btn-block-wrap">
              <button class="about__right-btn-block-filter" data-id="promotion">
                Акция
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="1" y="0.5" width="18" height="18" rx="9" stroke="#8CAB64" />
                  <path
                    d="M8.9375 11.7809V11.6932C8.94366 11.1207 9.00059 10.6652 9.10831 10.3267C9.21911 9.98816 9.37607 9.71425 9.57919 9.50497C9.78232 9.29569 10.027 9.10488 10.3132 8.93253C10.4979 8.81558 10.6641 8.68478 10.8118 8.54013C10.9595 8.39548 11.0765 8.22928 11.1626 8.04155C11.2488 7.85381 11.2919 7.64607 11.2919 7.41832C11.2919 7.14441 11.2273 6.90743 11.098 6.70739C10.9688 6.50734 10.7964 6.35346 10.581 6.24574C10.3686 6.13494 10.1316 6.07954 9.87003 6.07954C9.63305 6.07954 9.40684 6.12879 9.19141 6.22727C8.97597 6.32576 8.79747 6.47964 8.6559 6.68892C8.51432 6.89512 8.43277 7.16134 8.41122 7.48757H7.00781C7.02936 6.93359 7.16939 6.46579 7.42791 6.08416C7.68643 5.69946 8.02805 5.40862 8.45277 5.21165C8.88056 5.01468 9.35298 4.91619 9.87003 4.91619C10.4363 4.91619 10.9318 5.02237 11.3565 5.23473C11.7813 5.44401 12.1106 5.73793 12.3445 6.11648C12.5814 6.49195 12.6999 6.93052 12.6999 7.43217C12.6999 7.77687 12.6461 8.08771 12.5384 8.3647C12.4306 8.63861 12.2768 8.88329 12.0767 9.09872C11.8797 9.31416 11.6428 9.50497 11.3658 9.67116C11.1042 9.83428 10.8918 10.0036 10.7287 10.179C10.5687 10.3544 10.4517 10.5621 10.3778 10.8022C10.304 11.0423 10.264 11.3393 10.2578 11.6932V11.7809H8.9375ZM9.63459 14.5877C9.38222 14.5877 9.16525 14.4985 8.98366 14.32C8.80208 14.1384 8.71129 13.9199 8.71129 13.6644C8.71129 13.4121 8.80208 13.1966 8.98366 13.0181C9.16525 12.8365 9.38222 12.7457 9.63459 12.7457C9.88388 12.7457 10.0993 12.8365 10.2809 13.0181C10.4656 13.1966 10.5579 13.4121 10.5579 13.6644C10.5579 13.8337 10.5148 13.9891 10.4286 14.1307C10.3455 14.2692 10.2347 14.38 10.0962 14.4631C9.95774 14.5462 9.80386 14.5877 9.63459 14.5877Z"
                    fill="#8CAB64" />
                </svg>

              </button>
              <button class="about__right-btn-block-filter" data-id="keyToday">
                Ключи сегодня
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="1" y="0.5" width="18" height="18" rx="9" stroke="#8CAB64" />
                  <path d="M8.9375 11.7809V11.6932C8.94366 11.1207 9.00059 10.6652 9.10831 10.3267C9.21911 9.98816 9.37607 9.71425 9.57919 9.50497C9.78232 9.29569 10.027 9.10488 10.3132 8.93253C10.4979 8.81558 10.6641 8.68478 10.8118 8.54013C10.9595 8.39548 11.0765 8.22928 11.1626 8.04155C11.2488 7.85381 11.2919 7.64607 11.2919 7.41832C11.2919 7.14441 11.2273 6.90743 11.098 6.70739C10.9688 6.50734 10.7964 6.35346 10.581 6.24574C10.3686 6.13494 10.1316 6.07954 9.87003 6.07954C9.63305 6.07954 9.40684 6.12879 9.19141 6.22727C8.97597 6.32576 8.79747 6.47964 8.6559 6.68892C8.51432 6.89512 8.43277 7.16134 8.41122 7.48757H7.00781C7.02936 6.93359 7.16939 6.46579 7.42791 6.08416C7.68643 5.69946 8.02805 5.40862 8.45277 5.21165C8.88056 5.01468 9.35298 4.91619 9.87003 4.91619C10.4363 4.91619 10.9318 5.02237 11.3565 5.23473C11.7813 5.44401 12.1106 5.73793 12.3445 6.11648C12.5814 6.49195 12.6999 6.93052 12.6999 7.43217C12.6999 7.77687 12.6461 8.08771 12.5384 8.3647C12.4306 8.63861 12.2768 8.88329 12.0767 9.09872C11.8797 9.31416 11.6428 9.50497 11.3658 9.67116C11.1042 9.83428 10.8918 10.0036 10.7287 10.179C10.5687 10.3544 10.4517 10.5621 10.3778 10.8022C10.304 11.0423 10.264 11.3393 10.2578 11.6932V11.7809H8.9375ZM9.63459 14.5877C9.38222 14.5877 9.16525 14.4985 8.98366 14.32C8.80208 14.1384 8.71129 13.9199 8.71129 13.6644C8.71129 13.4121 8.80208 13.1966 8.98366 13.0181C9.16525 12.8365 9.38222 12.7457 9.63459 12.7457C9.88388 12.7457 10.0993 12.8365 10.2809 13.0181C10.4656 13.1966 10.5579 13.4121 10.5579 13.6644C10.5579 13.8337 10.5148 13.9891 10.4286 14.1307C10.3455 14.2692 10.2347 14.38 10.0962 14.4631C9.95774 14.5462 9.80386 14.5877 9.63459 14.5877Z" fill="#8CAB64" />
                </svg>
              </button>
              <button class="about__right-btn-block-filter" data-id="balcony">
                Балкон
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="1" y="0.5" width="18" height="18" rx="9" stroke="#8CAB64" />
                  <path
                    d="M8.9375 11.7809V11.6932C8.94366 11.1207 9.00059 10.6652 9.10831 10.3267C9.21911 9.98816 9.37607 9.71425 9.57919 9.50497C9.78232 9.29569 10.027 9.10488 10.3132 8.93253C10.4979 8.81558 10.6641 8.68478 10.8118 8.54013C10.9595 8.39548 11.0765 8.22928 11.1626 8.04155C11.2488 7.85381 11.2919 7.64607 11.2919 7.41832C11.2919 7.14441 11.2273 6.90743 11.098 6.70739C10.9688 6.50734 10.7964 6.35346 10.581 6.24574C10.3686 6.13494 10.1316 6.07954 9.87003 6.07954C9.63305 6.07954 9.40684 6.12879 9.19141 6.22727C8.97597 6.32576 8.79747 6.47964 8.6559 6.68892C8.51432 6.89512 8.43277 7.16134 8.41122 7.48757H7.00781C7.02936 6.93359 7.16939 6.46579 7.42791 6.08416C7.68643 5.69946 8.02805 5.40862 8.45277 5.21165C8.88056 5.01468 9.35298 4.91619 9.87003 4.91619C10.4363 4.91619 10.9318 5.02237 11.3565 5.23473C11.7813 5.44401 12.1106 5.73793 12.3445 6.11648C12.5814 6.49195 12.6999 6.93052 12.6999 7.43217C12.6999 7.77687 12.6461 8.08771 12.5384 8.3647C12.4306 8.63861 12.2768 8.88329 12.0767 9.09872C11.8797 9.31416 11.6428 9.50497 11.3658 9.67116C11.1042 9.83428 10.8918 10.0036 10.7287 10.179C10.5687 10.3544 10.4517 10.5621 10.3778 10.8022C10.304 11.0423 10.264 11.3393 10.2578 11.6932V11.7809H8.9375ZM9.63459 14.5877C9.38222 14.5877 9.16525 14.4985 8.98366 14.32C8.80208 14.1384 8.71129 13.9199 8.71129 13.6644C8.71129 13.4121 8.80208 13.1966 8.98366 13.0181C9.16525 12.8365 9.38222 12.7457 9.63459 12.7457C9.88388 12.7457 10.0993 12.8365 10.2809 13.0181C10.4656 13.1966 10.5579 13.4121 10.5579 13.6644C10.5579 13.8337 10.5148 13.9891 10.4286 14.1307C10.3455 14.2692 10.2347 14.38 10.0962 14.4631C9.95774 14.5462 9.80386 14.5877 9.63459 14.5877Z"
                    fill="#8CAB64" />
                </svg>
              </button>
              <button class="about__right-btn-block-filter" data-id="dressRoom">
                Гардеробная
              </button>
              <button class="about__right-btn-block-filter" data-id="twoSide">
                Окна на 2 стороны
              </button>
              <button class="about__right-btn-block-filter" data-id="threeSide">
                Окна на 3 стороны
              </button>
              <button class="about__right-btn-block-filter about__right-btn-block-filter_disabled" data-id="guestBathroom">
                Гостевой санузел
              </button>
              <button class="about__right-btn-block-filter about__right-btn-block-filter_disabled" data-id="terrace">
                Терраса
              </button>
              <button class="about__right-btn-block-filter" data-id="kitchenLiving">
                Кухня-гостиная
              </button>
            </div>
          </div>
          <fieldset class="about__right-payment-wrap">
            <legend class="about__right-payment-title">
              Способ оплаты
            </legend>
            <ul class="about__right-radio-wrap checkbox-list">
              <li class="checkbox">
                <label class="checkbox__label">
                  <input class="checkbox__input" type="radio" name="payment" checked>
                  <span class="checkbox__mark"></span>
                  <span class="checkbox__tite">
                    В ипотеку
                  </span>
                  <p class="checkbox__desc">
                    от 26 446 ₽/мес
                  </p>
                </label>
              </li>
              <li class="checkbox">
                <label class="checkbox__label">
                  <input class="checkbox__input" type="radio" name="payment">
                  <span class="checkbox__mark"></span>
                  <span class="checkbox__tite">
                    Наличными
                  </span>
                  <p class="checkbox__desc">
                    Скидка 573 000₽
                  </p>
                </label>
              </li>

            </ul>
          </fieldset>

          <div class="about__right-bot-btn-wrap">

            <button class="about__right-bot-btn btn btn_dark popup-link booking-btn" href="#popup-booking">
              Забронировать
            </button>

            <button class="about__right-bot-btn btn btn_light-green popup-link" href="#popup-call">
              Заказать звонок
            </button>
          </div>

          <p class="about__right-desc">
            №236. ВНЗ27467
          </p>
        </div>

      </div>
    </section>

    <section class="section apartments-item-page__section slider">
      <div class="container slider__container slider__container_1">
        <div class="rep-wrap" data-id="1">
          <div class="slider__left">
            <h5 class="slider__head-title">
              Отделка
            </h5>

            <h2 class="slider__title title title_30">
              Предчистовая отделка или White Box
            </h2>
            <p class="slider__text">
              Стены и потолки в квартире выровнены шпаклёвкой, отсюда и название White Box. Мы позаботились о том,
              чтобы подготовить квартиру к последнему — косметическому ремонту, после которого остаётся только покрыть
              стены и расставить мебель. Установка унитаза, смесителей, межкомнатные двери, розетки
              и выключателей.<br><br>
              Есть несомненные плюсы, связанные с предчистовой отделкой квартир или квартир «белого ящика», например,
              экономия денег и усилий, поскольку самая сложная и грязная работа уже сделана.
            </p>
          </div>

          <div class="slider__right reparation_swiper">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">

                <img src="/assets/img/rep_1.jpg" alt="promo_1">

              </li>
              <li class="swiper-slide">

                <img src="/assets/img/rep_1.jpg" alt="promo_1">

              </li>

            </ul>

            <div class="swiper-button swiper-button-prev swiper-button-prev_rep">
              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    stroke="white" />
                  <path d="M32 20L23 27.5L32 35" stroke="white" stroke-width="2" stroke-linejoin="round" />
                </g>
              </svg>
            </div>

            <div class="swiper-button swiper-button-next swiper-button-next_rep">
              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    stroke="white" />
                  <path d="M23 20L32 27.5L23 35" stroke="white" stroke-width="2" stroke-linejoin="round" />
                </g>
              </svg>
            </div>
          </div>

        </div>

        <div class="rep-wrap" data-id="2" style="display: none">

          <div class="slider__left">
            <h5 class="slider__head-title">
              Отделка
            </h5>

            <h2 class="slider__title title title_30">
              Дизайнерская отделка
            </h2>
            <p class="slider__text">
              Чистовая отделка квартиры - это готовое решение,которое включает в себя оклейку стен обоями, ламинат на полу, окраску потолков, монтаж розеток и выключателей, установку межкомнатных дверейи а так же сантехники.<br><br>
              При оформлении квартиры с отделкой, вы можете предоставить нам дизайн планировки и мы проведем электрику в соответсвие с дизайн-концепцией
            </p>
          </div>

          <div class="slider__right reparation_swiper">
            <ul class="swiper-wrapper">
              <li class="swiper-slide">
                <img src="/assets/img/rep_2.jpg" alt="promo_1">
              </li>
              <li class="swiper-slide">
                <img src="/assets/img/rep_2.jpg" alt="promo_1">
              </li>
            </ul>

            <div class="swiper-button swiper-button-prev swiper-button-prev_rep">
              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    stroke="white" />
                  <path d="M32 20L23 27.5L32 35" stroke="white" stroke-width="2" stroke-linejoin="round" />
                </g>
              </svg>
            </div>

            <div class="swiper-button swiper-button-next swiper-button-next_rep">
              <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                  <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54 0)"
                    stroke="white" />
                  <path d="M23 20L32 27.5L23 35" stroke="white" stroke-width="2" stroke-linejoin="round" />
                </g>
              </svg>
            </div>
          </div>

        </div>

        <div class="slider__btn-list">
          <button class="slider__btn slider__btn_active" data-id="1">
            Улучшеная черновая
          </button>
          <button class="slider__btn" data-id="2">
            Квартара с отделкой
          </button>
        </div>

    </section>

    <section class="section section_geo geo">
      <div class="container geo__container">
        <h2 class="geo__title title title_40">
          Все рядом
        </h2>

        <div class="geo__map map">
          <div id="map" class="map__container">
          </div>
          <div class="map__mark-list-wrap">

            <h2 class="map__title">
              Расположение и инфраструктура
            </h2>

            <ul class="map__mark-list">

              <li class="map__mark-item map__mark-item_all">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                    <g clip-path="url(#clip0_641_3022)">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.1037 10.6422C19.2357 10.4156 19.4249 10.2276 19.6523 10.0969C19.8797 9.96623 20.1374 9.89746 20.3997 9.89746C20.662 9.89746 20.9197 9.96623 21.1471 10.0969C21.3745 10.2276 21.5636 10.4156 21.6957 10.6422L25.0497 16.3998L31.5633 17.811C31.8195 17.8667 32.0567 17.9886 32.2511 18.1645C32.4455 18.3404 32.5905 18.5642 32.6714 18.8135C32.7524 19.0629 32.7666 19.3292 32.7126 19.5857C32.6586 19.8423 32.5383 20.0802 32.3637 20.2758L27.9237 25.245L28.5957 31.875C28.6222 32.1361 28.5798 32.3995 28.4726 32.6391C28.3655 32.8786 28.1973 33.0858 27.985 33.2401C27.7728 33.3943 27.5237 33.4902 27.2628 33.5181C27.0019 33.546 26.7382 33.5049 26.4981 33.399L20.3997 30.711L14.3013 33.399C14.0612 33.5049 13.7975 33.546 13.5366 33.5181C13.2757 33.4902 13.0266 33.3943 12.8143 33.2401C12.602 33.0858 12.4339 32.8786 12.3268 32.6391C12.2196 32.3995 12.1772 32.1361 12.2037 31.875L12.8757 25.245L8.43569 20.277C8.26076 20.0815 8.1402 19.8434 8.08603 19.5867C8.03186 19.33 8.04598 19.0635 8.12698 18.8139C8.20799 18.5644 8.35304 18.3404 8.54766 18.1644C8.74228 17.9884 8.97965 17.8666 9.23609 17.811L15.7497 16.3998L19.1037 10.6422ZM20.3997 13.185L17.6241 17.9514C17.5191 18.1313 17.3779 18.2874 17.2093 18.4097C17.0407 18.532 16.8485 18.6179 16.6449 18.6618L11.2545 19.8294L14.9289 23.9418C15.2097 24.2562 15.3453 24.6738 15.3033 25.0926L14.7477 30.5802L19.7949 28.3554C19.9855 28.2715 20.1914 28.2281 20.3997 28.2281C20.6079 28.2281 20.8139 28.2715 21.0045 28.3554L26.0517 30.5802L25.4961 25.0926C25.475 24.8854 25.4973 24.6761 25.5615 24.4779C25.6258 24.2798 25.7306 24.0972 25.8693 23.9418L29.5449 19.8294L24.1545 18.6618C23.9509 18.6179 23.7587 18.532 23.5901 18.4097C23.4215 18.2874 23.2802 18.1313 23.1753 17.9514L20.3997 13.185Z"
                        fill="#56693E" />
                    </g>
                    <defs>
                      <clipPath id="clip0_641_3022">
                        <rect width="28.8" height="28.8" fill="white" transform="translate(6 7.2002)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <p class="map__mark-text">
                  Все категории
                </p>
                <p class="map__mark-number">

                </p>
              </li>

              <li class="map__mark-item">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                    <g clip-path="url(#clip0_641_3031)">
                      <path
                        d="M32.3694 18.2442C31.9005 18.1483 31.4744 17.8679 31.2649 17.4376C30.5308 15.9296 29.4968 14.5973 28.2285 13.5311C27.2035 12.6695 26.0474 12 24.8121 11.5478C24.0331 11.2627 23.6249 10.3387 24.0522 9.62763L24.3456 9.1392C24.6259 8.67262 24.4864 8.06786 24.0301 7.77116C23.5503 7.45916 22.9073 7.60742 22.6126 8.09805L21.2931 10.2943C21.0772 10.6537 20.6891 10.8693 20.2708 10.8969C18.2605 11.0296 16.3147 11.7095 14.6307 12.8741C12.9713 14.0217 11.6306 15.5954 10.7349 17.4371C10.5255 17.8676 10.0993 18.1483 9.63023 18.2443C8.74572 18.4254 7.92735 18.8803 7.28753 19.5587C6.4623 20.4337 6 21.6105 6 22.8364C6 24.0622 6.4623 25.2391 7.28753 26.1141C7.92736 26.7925 8.74575 27.2474 9.63027 27.4284C10.0993 27.5244 10.5256 27.8051 10.735 28.2356C11.6349 30.0858 12.9838 31.6654 14.6535 32.8143C16.5359 34.1096 18.743 34.8002 21 34.8002C23.257 34.8002 25.4641 34.1096 27.3465 32.8143C29.0162 31.6654 30.3651 30.0858 31.265 28.2356C31.4744 27.8051 31.9007 27.5244 32.3697 27.4284C33.2543 27.2474 34.0726 26.7925 34.7125 26.1141C35.5377 25.2391 36 24.0622 36 22.8364C36 21.6105 35.5377 20.4337 34.7125 19.5587C34.0726 18.8802 33.254 18.4252 32.3694 18.2442ZM33.2839 24.6576C32.8265 25.1443 32.2031 25.4237 31.5489 25.4353L31.0421 25.4453C30.5635 25.4548 30.1363 25.7479 29.9551 26.191L29.7465 26.7011C29.0169 28.4864 27.7987 30.0089 26.2434 31.0792C24.6882 32.1494 22.8647 32.72 21 32.72C19.1353 32.72 17.3119 32.1494 15.7566 31.0792C14.2014 30.0089 12.9831 28.4864 12.2536 26.7011L12.0449 26.1909C11.8638 25.7478 11.4365 25.4548 10.9579 25.4453L10.4511 25.4353C9.79666 25.4226 9.17314 25.1432 8.71464 24.6571C8.25613 24.1711 7.99926 23.5174 7.99926 22.8364C7.99926 22.1554 8.25613 21.5016 8.71464 21.0156C9.17314 20.5296 9.79666 20.2502 10.4511 20.2374L10.9579 20.2274C11.4365 20.2179 11.8638 19.9249 12.0449 19.4818L12.2536 18.9716C12.9832 17.1864 14.2014 15.6639 15.7566 14.5937C17.3119 13.5234 19.1354 12.9528 21 12.9528C22.8647 12.9528 24.6882 13.5234 26.2434 14.5937C27.7986 15.6639 29.0169 17.1864 29.7465 18.9716L29.9551 19.4818C30.1363 19.9249 30.5635 20.2179 31.0421 20.2274L31.5489 20.2374C32.037 20.247 32.5117 20.4052 32.9144 20.6924C33.3171 20.9796 33.6301 21.3833 33.8146 21.8535C33.9992 22.3237 34.0473 22.8399 33.953 23.3383C33.8586 23.8366 33.626 24.2953 33.2839 24.6576Z"
                        fill="#56693E" stroke="#56693E" stroke-width="0.1" />
                      <path
                        d="M15.5996 21.6004C15.5996 20.9376 16.1369 20.4004 16.7996 20.4004H16.8542C17.5169 20.4004 18.0542 20.9376 18.0542 21.6004V21.7267C18.0542 22.3894 17.5169 22.9267 16.8542 22.9267H16.7996C16.1369 22.9267 15.5996 22.3894 15.5996 21.7267V21.6004ZM23.9451 21.6004C23.9451 20.9376 24.4823 20.4004 25.1451 20.4004H25.1996C25.8624 20.4004 26.3996 20.9376 26.3996 21.6004V21.7267C26.3996 22.3894 25.8624 22.9267 25.1996 22.9267H25.1451C24.4823 22.9267 23.9451 22.3894 23.9451 21.7267V21.6004ZM20.9996 30.0004C21.6443 30.0004 22.2826 29.8697 22.8782 29.6158C23.4738 29.3619 24.015 28.9897 24.4709 28.5205C24.9267 28.0513 25.2883 27.4943 25.535 26.8813C25.6324 26.6393 25.7111 26.3905 25.7708 26.1371C25.9226 25.492 25.3714 24.9478 24.7087 24.9478H17.2905C16.6278 24.9478 16.0767 25.492 16.2285 26.1371C16.2881 26.3905 16.3668 26.6393 16.4642 26.8813C16.7109 27.4943 17.0725 28.0513 17.5284 28.5205C18.449 29.4681 19.6976 30.0004 20.9996 30.0004Z"
                        fill="#56693E" />
                    </g>
                    <defs>
                      <clipPath id="clip0_641_3031">
                        <rect width="30" height="27.6" fill="white" transform="translate(6 7.2002)" />
                      </clipPath>
                    </defs>
                  </svg>

                </div>
                <p class="map__mark-text">
                  Детский сад
                </p>
                <p class="map__mark-number">
                  5
                </p>
              </li>

              <li class="map__mark-item">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#748D55" />
                    <path
                      d="M20.9722 32.089C20.6152 32.2828 20.1843 32.2828 19.8272 32.089L12.6272 28.1804C12.2405 27.9705 11.9997 27.5658 11.9997 27.1258V21.3493C11.9997 20.9117 11.7615 20.5088 11.378 20.2979L9.11939 19.0556C8.28881 18.5988 8.29089 17.4046 9.12307 16.9507L19.8251 11.1132C20.1833 10.9179 20.6162 10.9179 20.9743 11.1132L32.9743 17.6587C33.3598 17.869 33.5997 18.273 33.5997 18.7122V26.3998C33.5997 27.0625 33.0624 27.5998 32.3997 27.5998C31.737 27.5998 31.1997 27.0625 31.1997 26.3998V21.3493C31.1997 20.4366 30.2211 19.858 29.4214 20.2979C29.0379 20.5088 28.7997 20.9117 28.7997 21.3493V27.1258C28.7997 27.5658 28.5589 27.9705 28.1722 28.1804L20.9722 32.089ZM19.8294 22.1318C20.1853 22.324 20.6141 22.324 20.97 22.1318L26.665 19.0556C27.5046 18.6021 27.5046 17.3975 26.665 16.944L20.97 13.8678C20.6141 13.6756 20.1853 13.6756 19.8294 13.8678L14.1344 16.944C13.2948 17.3975 13.2948 18.6021 14.1344 19.0556L19.8294 22.1318ZM19.8295 29.3619C20.1854 29.5541 20.614 29.5541 20.9699 29.3619L25.7699 26.7699C26.1579 26.5604 26.3997 26.155 26.3997 25.714V23.9293C26.3997 23.0166 25.4211 22.438 24.6214 22.8779L20.978 24.8817C20.6179 25.0798 20.1815 25.0798 19.8214 24.8817L16.178 22.8779C15.3783 22.438 14.3997 23.0166 14.3997 23.9293V25.714C14.3997 26.155 14.6415 26.5604 15.0295 26.7699L19.8295 29.3619Z"
                      fill="white" />
                  </svg>

                </div>
                <p class="map__mark-text">
                  Образование
                </p>
                <p class="map__mark-number">
                  2
                </p>
              </li>

              <li class="map__mark-item">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                    <path
                      d="M26.6875 10.8438H15.3125C14.3428 10.8438 13.4128 11.229 12.7271 11.9146C12.0415 12.6003 11.6562 13.5303 11.6562 14.5V29.125C11.6562 29.6637 11.8703 30.1804 12.2512 30.5613C12.6321 30.9422 13.1488 31.1562 13.6875 31.1562H16.5312C17.07 31.1562 17.5866 30.9422 17.9676 30.5613C18.3485 30.1804 18.5625 29.6637 18.5625 29.125V27.5H23.4375V29.125C23.4375 29.6637 23.6515 30.1804 24.0324 30.5613C24.4134 30.9422 24.93 31.1562 25.4688 31.1562H28.3125C28.8512 31.1562 29.3679 30.9422 29.7488 30.5613C30.1297 30.1804 30.3438 29.6637 30.3438 29.125V14.5C30.3438 13.5303 29.9585 12.6003 29.2729 11.9146C28.5872 11.229 27.6572 10.8438 26.6875 10.8438ZM14.0938 25.0625V19.375H27.9062V25.0625H14.0938ZM15.3125 13.2812H26.6875C27.0107 13.2812 27.3207 13.4097 27.5493 13.6382C27.7778 13.8668 27.9062 14.1768 27.9062 14.5V16.9375H14.0938V14.5C14.0938 14.1768 14.2222 13.8668 14.4507 13.6382C14.6793 13.4097 14.9893 13.2812 15.3125 13.2812ZM16.125 28.7188H14.0938V27.5H16.125V28.7188ZM25.875 28.7188V27.5H27.9062V28.7188H25.875ZM18.9688 22.2188C18.9688 22.5401 18.8734 22.8543 18.6949 23.1216C18.5163 23.3888 18.2625 23.5971 17.9656 23.7201C17.6687 23.843 17.3419 23.8752 17.0267 23.8125C16.7115 23.7498 16.422 23.5951 16.1947 23.3678C15.9674 23.1405 15.8127 22.851 15.75 22.5358C15.6873 22.2206 15.7195 21.8938 15.8424 21.5969C15.9654 21.3 16.1737 21.0462 16.4409 20.8676C16.7082 20.6891 17.0224 20.5938 17.3438 20.5938C17.7747 20.5938 18.1881 20.765 18.4928 21.0697C18.7975 21.3744 18.9688 21.7878 18.9688 22.2188ZM26.2812 22.2188C26.2812 22.5401 26.1859 22.8543 26.0074 23.1216C25.8288 23.3888 25.575 23.5971 25.2781 23.7201C24.9812 23.843 24.6544 23.8752 24.3392 23.8125C24.024 23.7498 23.7345 23.5951 23.5072 23.3678C23.2799 23.1405 23.1252 22.851 23.0625 22.5358C22.9998 22.2206 23.032 21.8938 23.1549 21.5969C23.2779 21.3 23.4862 21.0462 23.7534 20.8676C24.0207 20.6891 24.3349 20.5938 24.6562 20.5938C25.0872 20.5938 25.5006 20.765 25.8053 21.0697C26.11 21.3744 26.2812 21.7878 26.2812 22.2188ZM34 16.125V18.5625C34 18.8857 33.8716 19.1957 33.643 19.4243C33.4145 19.6528 33.1045 19.7812 32.7812 19.7812C32.458 19.7812 32.148 19.6528 31.9195 19.4243C31.6909 19.1957 31.5625 18.8857 31.5625 18.5625V16.125C31.5625 15.8018 31.6909 15.4918 31.9195 15.2632C32.148 15.0347 32.458 14.9062 32.7812 14.9062C33.1045 14.9062 33.4145 15.0347 33.643 15.2632C33.8716 15.4918 34 15.8018 34 16.125ZM10.4375 16.125V18.5625C10.4375 18.8857 10.3091 19.1957 10.0805 19.4243C9.85198 19.6528 9.54198 19.7812 9.21875 19.7812C8.89552 19.7812 8.58552 19.6528 8.35696 19.4243C8.1284 19.1957 8 18.8857 8 18.5625V16.125C8 15.8018 8.1284 15.4918 8.35696 15.2632C8.58552 15.0347 8.89552 14.9062 9.21875 14.9062C9.54198 14.9062 9.85198 15.0347 10.0805 15.2632C10.3091 15.4918 10.4375 15.8018 10.4375 16.125Z"
                      fill="#56693E" />
                  </svg>

                </div>
                <p class="map__mark-text">
                  Транспорт
                </p>
                <p class="map__mark-number">
                  3
                </p>
              </li>

              <li class="map__mark-item">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                    <path
                      d="M16.3996 31.4008C17.3937 31.4008 18.1996 30.5949 18.1996 29.6008C18.1996 28.6067 17.3937 27.8008 16.3996 27.8008C15.4055 27.8008 14.5996 28.6067 14.5996 29.6008C14.5996 30.5949 15.4055 31.4008 16.3996 31.4008Z"
                      fill="#56693E" />
                    <path
                      d="M27.1999 31.4008C28.194 31.4008 28.9999 30.5949 28.9999 29.6008C28.9999 28.6067 28.194 27.8008 27.1999 27.8008C26.2058 27.8008 25.3999 28.6067 25.3999 29.6008C25.3999 30.5949 26.2058 31.4008 27.1999 31.4008Z"
                      fill="#56693E" />
                    <path d="M11 13.4004H13.4L14.12 17.0004M14.12 17.0004L15.8 25.4004H27.8L30.2 17.0004H14.12Z"
                      stroke="#56693E" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </div>
                <p class="map__mark-text">
                  Магазины
                </p>
                <p class="map__mark-number">
                  10
                </p>
              </li>

              <li class="map__mark-item">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#CEDFB8" />
                    <path
                      d="M28.5789 18H13.4211C12.6362 18 12 18.6199 12 19.3846V28.6154C12 29.3801 12.6362 30 13.4211 30H28.5789C29.3638 30 30 29.3801 30 28.6154V19.3846C30 18.6199 29.3638 18 28.5789 18Z"
                      stroke="#56693E" stroke-width="2.4" stroke-linejoin="round" />
                    <path
                      d="M18.8998 14H23.0998V12H18.8998V14ZM23.5198 14.5V18H25.1998V14.5H23.5198ZM18.4798 18V14.5H16.7998V18H18.4798ZM23.0998 14C23.2112 14 23.318 14.0527 23.3968 14.1464C23.4756 14.2402 23.5198 14.3674 23.5198 14.5H25.1998C25.1998 13.837 24.9786 13.2011 24.5847 12.7322C24.1909 12.2634 23.6568 12 23.0998 12V14ZM18.8998 12C18.3428 12 17.8087 12.2634 17.4149 12.7322C17.0211 13.2011 16.7998 13.837 16.7998 14.5H18.4798C18.4798 14.3674 18.5241 14.2402 18.6028 14.1464C18.6816 14.0527 18.7884 14 18.8998 14V12Z"
                      fill="#56693E" />
                    <path d="M18 23.9996H24M21 21.5996V26.3996" stroke="#56693E" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </div>
                <p class="map__mark-text">
                  Здоровье
                </p>
                <p class="map__mark-number">
                  4
                </p>
              </li>

              <li class="map__mark-item">
                <div class="map__mark-icon">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="21" fill="#748D55" />
                    <path
                      d="M20.3997 28.8004C24.3762 28.8004 27.5997 25.5768 27.5997 21.6004C27.5997 17.6239 24.3762 14.4004 20.3997 14.4004C16.4233 14.4004 13.1997 17.6239 13.1997 21.6004C13.1997 25.5768 16.4233 28.8004 20.3997 28.8004Z"
                      stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M20.4 14.4006C21.7255 14.4006 22.8 13.3261 22.8 12.0006C22.8 10.6751 21.7255 9.60059 20.4 9.60059C19.0745 9.60059 18 10.6751 18 12.0006C18 13.3261 19.0745 14.4006 20.4 14.4006Z"
                      stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M28.7999 19.2004C30.1254 19.2004 31.1999 18.1259 31.1999 16.8004C31.1999 15.4749 30.1254 14.4004 28.7999 14.4004C27.4744 14.4004 26.3999 15.4749 26.3999 16.8004C26.3999 18.1259 27.4744 19.2004 28.7999 19.2004Z"
                      stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M11.9996 19.2004C13.3251 19.2004 14.3996 18.1259 14.3996 16.8004C14.3996 15.4749 13.3251 14.4004 11.9996 14.4004C10.6741 14.4004 9.59961 15.4749 9.59961 16.8004C9.59961 18.1259 10.6741 19.2004 11.9996 19.2004Z"
                      stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M11.9996 28.801C13.3251 28.801 14.3996 27.7265 14.3996 26.401C14.3996 25.0755 13.3251 24.001 11.9996 24.001C10.6741 24.001 9.59961 25.0755 9.59961 26.401C9.59961 27.7265 10.6741 28.801 11.9996 28.801Z"
                      stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M28.7999 28.801C30.1254 28.801 31.1999 27.7265 31.1999 26.401C31.1999 25.0755 30.1254 24.001 28.7999 24.001C27.4744 24.001 26.3999 25.0755 26.3999 26.401C26.3999 27.7265 27.4744 28.801 28.7999 28.801Z"
                      stroke="white" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.5996 33.6006L20.3996 21.6006L25.1996 33.6006" stroke="white" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <p class="map__mark-text">
                  Развлечения
                </p>
                <p class="map__mark-number">
                  3
                </p>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section>

    <section class="section section_form form">
      <div class="container form__container">
        <div class="form__img">
          <img src="/assets/img/form-img.svg" alt="form-img">
        </div>
        <h2 class="form__title title title_40">
          Остались вопросы?
        </h2>
        <p class="form__subtitle">
          Отправьте заявку на консультацию и получите ответ на любой вопрос
        </p>
        <div class="form__wrapper">
          <form class="form__form os-form" action="#">

            <input type="text" name="theme" value="consultation" hidden>

            <label class="form__label">
              <input class="form__input _req" name="name" type="text" placeholder="Как вас зовут?">
            </label>

            <label class="form__label">
              <input class="form__input phone _req" name="phone" type="tel" placeholder="Tелефон">
            </label>

            <button class="form__btn btn" type="submit">
              Отправить
            </button>

          </form>
          <div class="form__desc">
            <p class="form__desc-text">
              Нажимая кнопку «Отправить», вы соглашаетесь с
            </p>
            <a class="form__desc-link" href="/pages/policy/">
              условиями обработки персональных данных
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section_apartments apartments">
      <div class="container apartments__container apartments_swiper">
        <h2 class="apartments__title title title_40">
          Похожие квартиры
        </h2>

        <ul class="apartments__list swiper-wrapper">

          <?
          // $result = mysqli_query($db, "SELECT * FROM apartments WHERE id = " . $_GET['id']);
          $result = mysqli_query($db, "SELECT * FROM apartments WHERE commerce = 0 LIMIT 8");

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
              echo '
                <li class="apartments__item swiper-slide">
                <a class="apartments__item-link" href="/pages/apartments-item/?id=' . $row['id'] . '">
                  <h5 class="apartments__item-title">
                    ' . $row['complex'] . ' | ГП ' . $row['house'] . ' | ' . $row['stage'] . ' этаж' . '                    
                  </h5>
                  <div class="apartments__item-img">
                      <img src="/assets/img/' . $row['image'] . '" alt="планировка квартиры">
                  </div>
    
                  <p class="apartments__item-desc">
                    ' . $row['number_of_rooms'] . '-комнатная ' . $row['area'] . 'м2
                  </p>
    
                  <div class="apartments__item-price-wrap">
                    <p class="apartments__item-new-price">
                      ' . number_format($row['price'], 0, '', ' ') . ' ₽
                    </p>
                    <p class="apartments__item-old-price">
                    ' . number_format($row['price'] * 1.2, 0, '', ' ') . ' ₽
                    </p>
                  </div>
    
                  <ul class="apartments__item-footer">
                    <li class="apartments__item-footer-item">
                      <p class="apartments__item-footer-item-text">
                        Акция
                      </p>
                      <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E" />
                        <path
                          d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z"
                          fill="#56693E" />
                      </svg>
                    </li>
    
                    <!-- <li class="apartments__item-footer-item">
                    <p class="apartments__item-footer-item-text">
                      Ключи сегодня
                    </p>
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.5" width="18" height="18" rx="9" stroke="#56693E"/>
                      <path d="M8.41903 11.8409V11.7855C8.42519 11.1977 8.48674 10.7299 8.60369 10.3821C8.72064 10.0343 8.88684 9.75272 9.10227 9.53729C9.31771 9.32185 9.57623 9.12334 9.87784 8.94176C10.0594 8.83097 10.2225 8.70017 10.3672 8.54936C10.5118 8.39548 10.6257 8.21851 10.7088 8.01847C10.795 7.81842 10.8381 7.59683 10.8381 7.35369C10.8381 7.05208 10.7673 6.79048 10.6257 6.56889C10.4841 6.3473 10.2949 6.17649 10.0579 6.05646C9.8209 5.93643 9.55777 5.87642 9.26847 5.87642C9.0161 5.87642 8.77296 5.92874 8.53906 6.03338C8.30516 6.13802 8.10973 6.30268 7.95277 6.52734C7.79581 6.75201 7.70502 7.04593 7.6804 7.40909H6.51705C6.54167 6.88589 6.67708 6.43809 6.9233 6.0657C7.17259 5.6933 7.50036 5.40862 7.90661 5.21165C8.31593 5.01468 8.76989 4.91619 9.26847 4.91619C9.81013 4.91619 10.281 5.02391 10.6811 5.23935C11.0843 5.45478 11.3951 5.75024 11.6136 6.12571C11.8352 6.50118 11.946 6.92898 11.946 7.40909C11.946 7.74763 11.8937 8.05386 11.7891 8.32777C11.6875 8.60168 11.5398 8.84635 11.3459 9.06179C11.1551 9.27723 10.9242 9.46804 10.6534 9.63423C10.3826 9.8035 10.1656 9.98201 10.0025 10.1697C9.83937 10.3544 9.72088 10.5745 9.64702 10.8299C9.57315 11.0853 9.53314 11.4039 9.52699 11.7855V11.8409H8.41903ZM9.00994 14.5739C8.7822 14.5739 8.58677 14.4923 8.42365 14.3292C8.26054 14.1661 8.17898 13.9706 8.17898 13.7429C8.17898 13.5152 8.26054 13.3197 8.42365 13.1566C8.58677 12.9935 8.7822 12.9119 9.00994 12.9119C9.23769 12.9119 9.43312 12.9935 9.59624 13.1566C9.75935 13.3197 9.84091 13.5152 9.84091 13.7429C9.84091 13.8937 9.80244 14.0322 9.7255 14.1584C9.65163 14.2846 9.55161 14.3861 9.42543 14.4631C9.30232 14.5369 9.16383 14.5739 9.00994 14.5739Z" fill="#56693E"/>
                    </svg>                  
                  </li> -->
    
                    <li class="apartments__item-footer-item">
                      <p class="apartments__item-footer-item-text">
                        Окна на 2 стороны
                      </p>
                    </li>
    
                    <!-- <li class="apartments__item-footer-item">
                    <p class="apartments__item-footer-item-text">
                      Гостевой санузел
                    </p>                 
                  </li> -->
    
                    <li class="apartments__item-footer-item">
                      <p class="apartments__item-footer-item-text">
                        Кухня-гостинная
                      </p>
                    </li>
                  </ul>
                </a>
              </li>
                ';
            } while ($row = mysqli_fetch_array($result));
          }
          ?>

        </ul>
        <div class="swiper-navigation">
          <div class="swiper-button swiper-button-prev swiper-button-prev_apart">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M32.25 20.5L23.25 28L32.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

          <div class="swiper-button swiper-button-next swiper-button-next_apart">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.8">
                <rect x="-0.5" y="0.5" width="54" height="54" rx="27" transform="matrix(-1 0 0 1 54.25 0.5)"
                  stroke="#CBCBCB" />
                <path d="M23.25 20.5L32.25 28L23.25 35.5" stroke="#CBCBCB" stroke-width="2" stroke-linejoin="round" />
              </g>
            </svg>
          </div>

        </div>
      </div>


    </section>

    <section class="section section_bot bot">
      <div class="container bot__container">
        <div class="bot__address address">
          <h3 class="address__title title title_40">
            Офис продаж
          </h3>
          <p class="address__desc">
            Ежедневно с 10:00-17:00
          </p>

          <div class="address__wrapper">
            <div class="address__item address__item_address">
              <p class="address__item-title">
                Адрес:
              </p>
              <p class="address__item-text">
                Тюмень, ул. Клары Цеткин, д. 61, к2
              </p>
            </div>

            <div class="address__item address__item_phone">
              <p class="address__item-title">
                Телефон:
              </p>
              <a class="address__item-text" href="tel: <?= $row1['phone']; ?>">
                <?= $row1['phone']; ?>
              </a>
            </div>

            <div class="address__item address__item_mail">
              <p class="address__item-title">
                Почта:
              </p>
              <a class="address__item-text" href="mailto: hello_sibir@yandex.ru">
                hello_sibir@yandex.ru
              </a>
            </div>

          </div>

          <button class="btn btn_green address__btn popup-link" href="#popup-request">
            Получить консультацию
          </button>
        </div>

        <div class="bot__map" id="map2">
        </div>
      </div>
    </section>
  </main>

  <?
  include '' . $_SERVER["DOCUMENT_ROOT"] . '/includes/footer.php';
  ?>

</body>

</html>

























</body>

</html>