<?php
/*
In php ai valori degli array puoi dare indici numerici o stringhe
gli array possono essere usati come, liste
funzioni già native in php 🤑
*/
$arr=array();
//$arr=[];puoi usare anche questa sintassi scegli te
$arr=array('RED','GREEN','BLUE');
//$arr=['RED','GREEN','BLUE'];
$arr[]='PINK';//aggiunge un val
//var_dump($arr);
$arr[9]='PURPLE';//puoi lasciare a php di usare la prossima pos. oppure puoi scegliere di mettere la var dove vuoi
$arr[]='YELLOW';//L'arr continuerà dallultima pos cioè 9
//puoi usare anche le key nello stesso array
$arr['ReDiSpagna']='Armando';
$arr[]='WHITE';
$arr[4]=[2,44,4,43443];
// var_dump($arr);
$arr['5']='Cinco';
$arr['5.2']='Cinco'; //5.2 lo conta come stringa se tolgi '' lo casta ad intero quindi 5
//var_dump($arr);
print_r($arr);//la diff da var dump oltre a come lo stampa è che qua mostra l'indice e
//il valore contenuto mentre var dump ti dice anche il tipo el valore contenuto nell'array
echo $arr['ReDiSpagna'];//se ometti ' ' ti da errore ma riconosce cmq la chiave
//come faccio a scrivere un array multidimensionale
$arr['GIORNI']=['lunedi','martedì'];
echo "<br> Valore indice 4 terza posizione è {$arr [4][3]}";
//le chiavi sono key sensitive giorni!=GIORNI fate attenzione
echo "<br> Valore chiave 4 terza posizione è {$arr ['GIORNI'][1]}";
array_push($arr['GIORNI'],'mercoledì');
$arr2=['a','b','c','d'];
unset($arr['GIORNI']);//rimuove il valore/i dll'array all'indice o chiave specificata
unset($arr2[2]);
$arr2=array_values($arr);
var_dump($arr2);
//print_r($arr);