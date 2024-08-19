<?php
error_reporting(0);

$host = 'localhost'; // имя хоста
$database = 'wwserver_sib_dev'; // имя бд
$user = 'wwserver_sib_dev'; // имя пользователя
$pswd = 'n1WbPE%u'; //пароль

$db = mysqli_connect($host, $user, $pswd, $database) or die("Ошибка БД localhost #1");