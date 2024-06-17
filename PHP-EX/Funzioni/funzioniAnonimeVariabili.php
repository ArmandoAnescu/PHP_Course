<?php
/*
FUNZIONI VARIABILI
*/
$somma=function($a,$b){
    echo $a+$b;
};
//funzione anonima
function test(Closure $func){
    $func(5,3);
}
$somma(2,3);
$test=3;
test($somma);
$arr=[2,4,6];
$moltiplicazioni=function($val){//applica una funzione a ogni elemtno dell'array
     $val*=2;
};
// array_walk($arr,function($val){//applica una funzione a ogni elemtno dell'array
//     echo $val*2;
// });
array_walk($arr,$moltiplicazioni);//per chiaare una funzione metti ' nome_funzione '
var_dump($arr);
//funzioni anonime, funzioni che vengono usate poco o sono usa  getta e variabili quando devi usarla di più