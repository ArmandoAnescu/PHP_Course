<?php
/*
MATCH è come lo switch ma fa il controllo stretto
quindi === controlla sia il valore che il tipo della varù
MATCH ritorna un valore
*/
$money=false;
$result=match($money){
    1>2=>print_r("E' false",true),
    false=>"Chupapo",
    0 =>print("Non hai soldi false <br>"),
    3,4=> print("hai 3 o 4"),
    default=>print("Nessuno dei valori")
};
var_dump($result);
//nel match non puoi mettere funzioni dopo 
//la chiami direttamente
/*
Match:
ritorna un valore
confronto di uguglianza stretto
default obbligatorio

Switch:
confronto di uguaglianza
cast implicito

Se devi fare un confronto stretto e semplice o ritornare un
valore scegli match altrimenti usa lo switch per farepiù azioni.
*/