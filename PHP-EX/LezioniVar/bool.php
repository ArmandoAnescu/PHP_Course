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
if($verify){
    echo "vero";
}else{
    echo "falso";
}