<?php
// Example using CoinGecko API to get price of Bitcoin in USD
$coin = 'bitcoin';
$apiUrl = "https://api.coingecko.com/api/v3/simple/price?ids={$coin}&vs_currencies=usd";

$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

$priceUsd = $data[$coin]['usd'] ?? 0;

$amount = 0.05; // amount of coin user wants to convert
$usdValue = $amount * $priceUsd;

echo "Value of {$amount} {$coin} is $".number_format($usdValue, 2)." USD";
?>
