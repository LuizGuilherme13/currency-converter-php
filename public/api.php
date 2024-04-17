<?php

$valueFrom = (float) $_POST['value-from'];
$moedaA = $_POST['select-from'];
$moedaB = $_POST['select-to'];
$url = "https://economia.awesomeapi.com.br/json/last/{$moedaA}-{$moedaB}";

if ($valueFrom > 0) {

  $curl = curl_init();
  curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ]);

  $response = curl_exec($curl);
  curl_close($curl);

  $json = json_decode($response, true);

  $value = (float) $json["{$moedaA}{$moedaB}"]['bid'] * $valueFrom;

  echo round($value, 2);

}