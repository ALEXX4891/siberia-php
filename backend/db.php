<?php
error_reporting(0);

$host = 'localhost'; // имя хоста
$database = 'wwserver_marchel'; //vizit7_main
$user = 'wwserver_marchel'; //vizit7_main
$pswd = 'gtZfo*L7'; //пароль

$db = mysqli_connect($host, $user, $pswd, $database) or die("Ошибка БД localhost #1");
