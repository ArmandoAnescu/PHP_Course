<?php

$names=[
    'name'=> 'Riccardo',
    'lastName'=>'Esposito'
];
$address=[
    'address',
    'Napoli'
];
$data=array_merge($names,$address);
print_r($data);
//$data2=[...$data,...$address];le chiavi numeriche non sovrascrivono quello che c'è già
$data2=[...$data,...$names];//le chiavi testuali se uguali si sovrascrivono
print_r($data2);
$arr1=[1,2,3,4];
$arr2=[1,2,3,4];
//print_r(array_merge($arr1,$arr2));gli altri valori vengono aggiunti alla fine
//per evitare doppi metti array unique davanti
//print_r(array_unique(array_merge($arr1,$arr2)));
print_r([...$arr1,...$arr2]);