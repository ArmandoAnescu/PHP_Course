<?php
$arr=[
    [
    'name'=>'arr',
    'age'=>20,
    'city'=>'beijing'
    ]
];
$prova='hey';
$arrnew=array_map(function($val) use($prova){
$tmp=[];
//puoi includere nella funzione non gloibale dei valori dei valori
foreach($val as $k=>$v){
    $tmp[$k]=$prova.strtoupper($v);
}
return $tmp;
}, $arr);
$arr2=[
    'name'=>'arr',
    'age'=>20,
    'city'=>'beijing'
];
$arrResult=array_map(fn($v)=>strtoupper($v),$arr2);
var_dump($arrnew);
print_r($arrResult);