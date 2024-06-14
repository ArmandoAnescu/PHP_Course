<?php
$a=5;
$b=10;
$c=$a+$b;
$d=($a+$b)/5;//la priorità è come quella in matematica 

$g=2**4;

$a='1';
$b=1;
// $c=$a==$b; torna true
$c=$a===$b;//torna false
$a=null;
$b=0;
$c=$a==$b;//torna true
$c=$a===$b;//torna false
var_dump($a,$b,$c);
$price=0;
if($price){
    echo "il prezzo aggiornato";
}else{
    echo "il prezzo non è aggiornato";
}