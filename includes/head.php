<?
include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NMZW3TMH');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97841820, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true,
      ecommerce: "dataLayer"
    });
  </script>
  <noscript>
    <div>
      <picture>
        <source srcset="https://mc.yandex.ru/watch/97841820" type="image/webp"><img src="https://mc.yandex.ru/watch/97841820" style="position:absolute; left:-9999px;" alt="" />
      </picture>
    </div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

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
  <script src="https://api-maps.yandex.ru/v3/?apikey=9e0bbb5f-9b5e-4f9e-8eb8-b98592b9e414&lang=ru_RU&_v=20240819113010"></script>

</head>