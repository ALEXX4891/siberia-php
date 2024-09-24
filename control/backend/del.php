<?
error_reporting(E_ALL);

$inputData = file_get_contents('php://input');

if (!$inputData) {
  die('No data');
}

include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';
include $_SERVER["DOCUMENT_ROOT"] . '/backend/f.php';

if ($inputData) {
  $data = json_decode($inputData, true);
  $arrKeys = array_keys($data);
  $arrData = [];

  foreach ($arrKeys as $key) {
    if ($key == 'function') {
      $function = $data[$key];
    }

    if ($key == 'table') {
      $table = $data[$key];
    }

    if ($key == 'field') {
      $field = $data[$key];
    }

    if ($key == 'id') {
      $id = $data[$key];
    }
  }

if ($function == 'del') {

  $query = sprintf(
    "SELECT * FROM `$table` WHERE `id` = '%s'",
    mysqli_real_escape_string($db, $id)
  );

  $result = mysqli_query($db, $query);  
  $row = mysqli_fetch_array($result);
  
  $photoFileArr = [
    'photo',
    'image-1',
    'image-2',
    'image-3',
    'image-4',
    'image-5',
    'image-6',
    'image-7',
    'image-8',
    'image-9',
    'image-10'
  ];
  
  foreach ($photoFileArr as $value) {
    if ($row[$value]) {
      unlink($_SERVER['DOCUMENT_ROOT'].'/assets/img/'.$row[$value]);
    } 
  }

    $sql = sprintf(
      "DELETE FROM `$table` WHERE `id` = '%s'",
      mysqli_real_escape_string($db, $id)
    );
  }
  mysqli_query($db, $sql);
}