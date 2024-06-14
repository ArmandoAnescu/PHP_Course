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
if($price!==null){//controllo che il tipo sia div da NULL
    echo "il prezzo è aggiornato";
}else{
    echo "il prezzo non è aggiornato";
}
$data=[4,5,0];
var_dump(in_array(0,$data));//controllo se il valore 0 è presente nell'array
/*
$a==$b true se i val sono uguali
$a===$b true se i val e i tipi sono uguali
$a!=$b diverso se a diverso da b
$a <> $b diverso se a diverso da b
$a !== $b Non identici True se a e b sono divresi sia in tipo che valore
$a<$b true se è minor stretto di b
$a>$b true se a è maggiore stretto di b
$a<=$b true se a è minore o uguale a b
$a>=$b true se a è maggiore o uguale a b
$a <=> $b 
Ritorna 0 se a e b sono uguali
Ritorna 1 se a>b
Ritorna -1 se a è < di b
$a ?? $b ?? $c  ?? $d ritorna il primo valore che non è null
(condizione)? valore1:valore2
ATTENZIONE: 2**3**2 NON è (2^3)^2 MA 3^2=9 e poi 2^9
*/
$ar=['name'=>'BB','city'=>'Turkmenia','lastname'=>null];
$lastName=$ar['lastname']??='N/A';//se null metti N/A
echo $ar['lastname'];
echo $lastName;
$val1=null;
$val2=null;
$result=$val1??$val2??3;
var_dump($result);
$ternary=($val1===$val2)?"sono uguale":"sono diversi";
echo '<br>'.$ternary;
//per espressioni semplici è meglio utlizzare il ternario per operazioni più difficili è meglio l'if l'else e l'else if