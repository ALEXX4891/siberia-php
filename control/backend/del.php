<?

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

// var_dump(value: $arrKeys);


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
    $sql = sprintf(
      "DELETE FROM `$table` WHERE `id` = '%s'",
      mysqli_real_escape_string($db, $id)
    );
  }
  mysqli_query($db, $sql);
}