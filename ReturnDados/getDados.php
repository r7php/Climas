<?php 

$cidade = $_POST['cidade'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=$cidade&appid=3744ce2a64f4949b3e31247e5f599caa&units=metric&lang=pt_br",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

$js = json_decode($response, true);

$array_info[0] = $js["main"]["temp"];
$array_info[1] = $js["weather"][0]["description"];
$array_info[2] = $js["wind"]["speed"];
$array_info[3] = $js["weather"][0]["icon"];
echo json_encode($array_info);


 ?>