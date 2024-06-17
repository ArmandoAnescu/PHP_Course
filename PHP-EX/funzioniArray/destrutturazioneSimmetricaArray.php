<?php
declare(strict_types=1);

$arr=[1,2,3];
list($a,$b,$c)=$arr;
var_dump($a,$b,$c);
//come già visto list suddivide i valori nell'array nel numero di var
//ma se l'array usa delle chiavi?
$userData=[
    ['name'=>'Armando','lastName'=>'Anescu'],
    ['name'=>'Armando2','lastName'=>'Anescu2'],
    ['name'=>'Armando3','lastName'=>'Anescu3'],
    ['name'=>'Armando4','lastName'=>'Anescu4']
];
// list($name,$surname)=$userData;
// list('name'=>$name,'lastName'=>$surname)=$userData;
/*
In questo caso basta specificare la chiave del valore da assegnare
keyObiettivo=>destinazione,...
*/
//['name'=>$name,'lastName'=>$surname]=$userData;//short syntax
foreach($userData as ['name'=>$name,'lastName'=>$surname]){
    echo "$name $surname <br>";
}
var_dump($name,$surname);
