<?
$houseId = json_decode(file_get_contents('php://input'), true)['id'];
function getRequest($url) {  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}

$apiKey = "29f8fcf87bc0605d57ca8d0c5e776f03";
// $apiKey = "a2a837c238adf8f115947e9b1cbebd2a";
$url = "https://crm.m2lab.ru/api/getRealtyList?token={$apiKey}&houseId={$houseId}&fields=price,price_sq";
// https://crm.m2lab.ru/api/getRealtyList?token=29f8fcf87bc0605d57ca8d0c5e776f03&houseId=933&fields=price,price_sq
$response = getRequest($url);


echo $response;
