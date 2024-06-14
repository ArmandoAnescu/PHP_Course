<?php
/* 
accettano un numero variabile di argomenti
*/
function somma($operation,...$values){//array con i parametri passati
    $somma=0;
    $total=count($values);
    for($i=0;$i<$total;$i++){
        switch($operation){
            case '+':
                $somma += $values[$i];
            break;
            case '-':
                $somma -= $values[$i];
                break;
            case '*':
                $somma *= $values[$i];
                break;
            case '/':
                $somma /=$values[$i];
        }
        $somma += $values[$i];
    }
    return $somma;
}
$sum=somma(1,32,23,3,2,3,);
echo $sum;