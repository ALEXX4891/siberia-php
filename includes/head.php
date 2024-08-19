<?
  include $_SERVER["DOCUMENT_ROOT"] . '/includes/db.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?echo $title?></title>
  <? if ($meta) echo $meta?>
  <meta name="keywords" content="<?echo $keywords?>"/>
	<meta name="description" content="<?echo $description?>"/>
  <link rel="canonical" href="<?echo 'https://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];?>"/>
  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
  <link rel="icon" type="/image/png" sizes="32x32" href="/img/favicon-32x32.png">
  <link rel="icon" type="/image/png" sizes="16x16" href="/img/favicon-16x16.png">
  <link rel="manifest" href="/files/site.webmanifest">
  <link rel="stylesheet" href="/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/style.css">  
</head>