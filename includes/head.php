<?
include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';

$yandexMapApiKey = '9e0bbb5f-9b5e-4f9e-8eb8-b98592b9e414';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<? echo $keywords ?>">
  <meta name="description" content="<? echo $description ?>">
  <meta property="og:image" content="/assets/img/opengraph.png">
  <meta property="og:title" content="<? echo $title ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<? echo 'https://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:description " content="Содержание из атрибута content метатега <? echo $description ?>">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:site_name" content="СЗ «Сибирь», Тюмень | Новостройки от застройщика ">

  <title><? echo $title ?></title>
  <meta name="yandex-verification" content="64d431561909792d">

  <? if ($meta) echo $meta ?>
  <link rel="canonical" href="<? echo 'https://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI']; ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="/assets/css/fancybox.css">
  <link rel="stylesheet" href="/assets/css/style.css">



  <script src="https://api-maps.yandex.ru/v3/?apikey=<?= $yandexMapApiKey ?>&lang=ru_RU"></script>
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
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(98568541, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/98568541" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3565683", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "tmr-code");
</script>
<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3565683;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
<!-- /Top.Mail.Ru counter -->
</head>