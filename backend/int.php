<?
// $houseId = json_decode(file_get_contents('php://input'), true)['id'];
function getRequest($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}

$apiKey = "29f8fcf87bc0605d57ca8d0c5e776f03";
$url = "https://crm.m2lab.ru/api/getHouseList?token={$apiKey}";
$response = getRequest($url);

// echo $response;

$houseArray = json_decode($response, true);
$idHouseArray = array_column($houseArray['response'], 'house_id');



// echo '<pre>';
// print_r($houseArray['response']);
// echo '</pre>';

// echo '<pre>';
// print_r($idHouseArray);
// echo '</pre>';

// echo '1';

foreach ($idHouseArray as $houseId) {
  $apiKey = "29f8fcf87bc0605d57ca8d0c5e776f03";
  $url = "https://crm.m2lab.ru/api/getRealtyList?token={$apiKey}&houseId={$houseId}&fields=price,price_sq";
  $response = getRequest($url);
}


echo '<pre>';
print_r(json_decode($response));
echo '</pre>';