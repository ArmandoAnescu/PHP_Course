<?php
/*
In php i valori che valgono false sono:
False/false 
Zero (0) per gli interi
0.0 e -0.0 per i float
la stringa vuota e la stringa "0"
e NULL
*/

$verify =false;
// if($verify===true)
// $verify=4>5;una var bool può essere direttamente una espressione che poi ritorna t o f
$verify=4===5;
$verify=(bool)"Hellow World";//il risultato sarà t perchè la str non è ne vuota ne "0"
var_dump($verify);//dice il tipo della var inserita.
if($verify){
    echo "vero";
}else{
    echo "falso";
}
//quando passi i dati da un form non passare True o false come condizioni perchè li converte in stringa e risultano entrambi true 
//perchè le stringhe sono non vuote, quindi è meglio utilizzare 0 e 1 come valori booleani