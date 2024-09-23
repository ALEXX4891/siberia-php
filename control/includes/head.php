<?
session_start();
if(!$_SESSION['user_id'] AND !$_SESSION['access']){
  // die($_SESSION['access']);
  echo '<meta http-equiv="refresh" content="0; URL=\'/control/login.php\'" />';
  exit();
}

include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';



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