<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "At the start of your transaction you had $riel riel, $kyat kyat, $krones krones, and $lek lek.";

$riel_to_usd = round(ConvertToUSD($riel, 0.00026), 2);
$kyat_to_usd = round(ConvertToUSD($kyat, 0.00066), 2);
$krones_to_usd = round(ConvertToUSD($krones, 0.11), 2);
$lek_to_usd = round(ConvertToUSD($lek, 0.009), 2);

 echo "\n\nAt the end of your transaction you will have $riel_to_usd USD, $kyat_to_usd USD, $krones_to_usd USD, and $lek_to_usd USD, for all of your respective exchanges.";

function ConvertToUSD($foreign, $exchange){
  $flat_fee = 1;
  $foreign_to_usd = ($foreign * $exchange) - $flat_fee;
  return $foreign_to_usd;
}



