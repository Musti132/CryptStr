<?php
$word = "string";

function e($string){
    echo "\n".$string."\n";
}

$wordLength = strlen($word);

function generateString(int $length){
    $letters = 'abcdefghiklmnopqrstvxyzABCDEFGHIKLMNOPQRSTVXYZ';

    $letterCount = strlen($letters);

    $string = '';
    for($i = 0; $i < $length; $i++){
        $string .= $letters[mt_rand(0, $letterCount - 1)];
    }
    return $string;
}

$wordArray = [];
for($i = 0; $i <= $wordLength - 1; $i++){
    $wordArray[] = $word[$i];
}

$encryptedWord = [];
$counter = 0;

foreach($wordArray as $letter){
    $counter++;
    $encryptedWord[] = $letter.$counter.generateString(8);
}

$word = '';
$used =  [];
$arrayCount = count($encryptedWord) - 1;
$test = false;
$counter = 0;
while(true){
    $counter++;
    if(count($used) == $arrayCount+1){ break; }
    $character = mt_rand(0, $arrayCount);
    if(in_array($character, $used)) { e($counter.': skipped'); continue; }
    else {
        $used[$character] = $character;
        $word .= $encryptedWord[$character];
    }
}
e(count($used));
print_r($used);
echo "\n".$word;

?>