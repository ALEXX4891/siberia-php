<?
  include $_SERVER["DOCUMENT_ROOT"] . '/backend/db.php';

  $query = json_decode(file_get_contents('php://input'), true);
  $result = mysqli_query($db, $query);


  $arr = [];
  foreach ($result as $row) {
    $arr[] = $row;
  }
  $json = json_encode($arr);

  echo $json;