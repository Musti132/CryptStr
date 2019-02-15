<?php
$word = 'n5YatahGETg6ofAqkSVii4fbYNBrrpt2nOcXEBQcs1soikVconr3iPsoPpYC';
$length = strlen($word);

$wordArray = [];
for($i = 0; $i <= $length - 1; $i++){
    $wordArray[] = $word[$i];
}

$stage1 = [];

$counter = 0;
foreach($wordArray as $key => $value){
    if(is_numeric($value)){ $stage1[$value] = $wordArray[$counter - 1]; }
    $counter++;
}

ksort($stage1, SORT_NUMERIC);
$stage2 = $stage1;

$decrypted = '';
foreach($stage2 as $key => $word){
    $decrypted .= $word;
}

echo $decrypted;


?>