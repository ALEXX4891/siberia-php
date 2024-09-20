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


  if ($function == 'active') {

    if ($table == 'offices') {

      if ($field == 'status') {

        $sql = sprintf(
          "UPDATE `offices` SET `status` = '1' WHERE `id` = '%s'",
          mysqli_real_escape_string($db, $id)
        );

        echo $sql;

      }
    }

    if ($table == 'news') {

      if ($field == 'status') {

        $sql = sprintf(
          "UPDATE `news` SET `status` = '1' WHERE `id` = '%s'",
          mysqli_real_escape_string($db, $id)
        );

        echo $sql;

      }
    }
  } else if ($function == 'deactive') {
    if ($table == 'offices') {

      if ($field == 'status') {

        $sql = sprintf(
          "UPDATE `offices` SET `status` = '0' WHERE `id` = '%s'",
          mysqli_real_escape_string($db, $id)
        );

        echo $sql;


      }
    }

    if ($table == 'news') {

      if ($field == 'status') {

        $sql = sprintf(
          "UPDATE `news` SET `status` = '0' WHERE `id` = '%s'",
          mysqli_real_escape_string($db, $id)
        );

        echo $sql;


      }
    }
  }

  // echo $sql;
  mysqli_query($db, $sql);
}