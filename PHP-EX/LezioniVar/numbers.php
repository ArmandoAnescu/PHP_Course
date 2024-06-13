<h1>
<?php
$dec=255;
$dec='255';
$oct=0124;//i val in base 8 vengono riconverti in base 10 da vara Dump
$hex=0x1f;
$bin=0b1101;
$result=$hex+$bin;
$result=$bin/$hex;//il risultato di una / per php e sempre float
$age=rand(18,120);
$price = rand(20, 100) / 10; 
var_dump($dec);//risultato è string
var_dump($oct*2);
var_dump($hex*2);
var_dump($bin*2);
var_dump($dec*4);//php fa l'auto casting SE la stringa inizia con num o inizia col - e quindi il risultato è int
//se scrivi 255aaaaa converte solo 255 in int e fa l'operazione ma poi ti da un warning 
//'A non well formed numeric value encountered'
?>
</h1>