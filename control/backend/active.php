<?

// переключение режима работы:
// $mode = 'dev'; // режим разработки
// $mode = 'prod'; // режим продакшн


// if ($mode == 'dev') {
//   $str = '{
//     "script": "/control/backend/active.php",
//     "function": "deactive",
//     "table": "offices",
//     "fild": "status",
//     "id": "1"
// }';
//   // $str = '{"function":"goActive","table":"contractor","idContractor":2,"isActive":"1"}';
//   // $str = '{"table":"contractor","idContractor":2,"name":"ООО « Жизнь большое название 2»","taxNumber":978777112,"address":"г. Тюмень. ул. Фармана Салманова, д. 2","telephone":"+7 987 333 31-12","email":"email2@example.com","function":"update"}';
//   $inputData = $str;
// } else if ($mode == 'prod') {
//   $inputData = file_get_contents('php://input');
// }



$inputData = file_get_contents('php://input');
// var_dump($inputData);

if (!$inputData) {
  die('No data');
}

include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';


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


  if ($function == 'active') {

        $sql = sprintf(
          "UPDATE `$table` SET `$field` = '1' WHERE `id` = '%s'",
          mysqli_real_escape_string($db, $id)
        );
  } else if ($function == 'deactive') {

        $sql = sprintf(
          "UPDATE `$table` SET `$field` = '0' WHERE `id` = '%s'",
          mysqli_real_escape_string($db, $id)
        );
  }



  mysqli_query($db, $sql);
}