<?php
/*
switch(exp):
    case:
        esegue tutto il codice fino al break appena trova una condizione vera
        break;
*/
$soldi=3;
//se metti FALSE il valore sarà castato a int perciò 0 fai attenzione
switch($soldi){//lo swich appena trova una condizione true eegue il codice fino a break
//se ti dimentichi di metterlo continua ad andare avanti
    case 0:
        echo "Non hai soldi";//se dovete controlalre sia val interi che bool tenete conto
        //true==1 false==0
        break;
    case 1:
        echo "hai un euro";
        break;
    case 2:
        echo "hai due euro";
        break;
    case 3:
    case 4:
        echo "Hai 3 o 4 euro";
        break;
    default:
    echo 'valore non valido';
    break;
}//puoi mettere le {} dopo i : per aiutarti a capire i blocchi