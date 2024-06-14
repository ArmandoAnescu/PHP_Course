
<?php
/*
le funzioni non sono case sensitive
può essere chiamata prima di essere definita purchè non dipenda da un altra funzione
(funzioni annidate)
tutte le funzioni sono globali
*/
//prova();
function prova($name='World'){//se non passi nessun valore mette in automatico 'World'
    echo "ciao $name";
}
function nomeIntero(string $name,string $surname){//puoi indicare il tipo dei parametri
    echo "il tuo nome è $name $surname".'<br>';
}
$sayHi=function(){
    echo "hi".'<br>';
};
prova();
echo'<br>';
$sayHi();//se una funz è dichiarata in una var non può essere usata prima di essere dichiarata
// nomeIntero("Armando","Re di Spagna");
// nomeIntero("Alberto","Petorazza");
nomeIntero(4,4);//se tu non dici alla funzione che deve essere strict type, quindi non convertirlo
//ma essere proprio una stringa
//puoi invertire l'ordine usando i nomi
nomeIntero(surname:"Re di Spagna",name:"Armando");
//i parametri con valori di default vanno alla fine perchè  altrimenti ti da errore
// perchè diventa obbligatorio usarlo se il parametro dopo non ha un val di default
function ritorno(int $a,int $b):int{//:type la funz deve ritornare il type messo
    return $a+$b;
}
$arrAr2p=calcolaArea2p(4,4);
echo $arrAr2p[0], $arrAr2p[1].'<br>';


function calcolaArea2p(int $base,int $altezza):array{
    $area=$base*$altezza;
    $perimetro=2*($base+$altezza);
    return [$area,$perimetro];
}
[$area,$perimetro]=calcolaArea2p(3,3);//ritorna l'array e assegan i valori ad area e 2p
echo $area,$perimetro.'<br>';
list($a,$b)=calcolaArea2p(5,5);
//assegna a più var i valori di un array
echo $a.'<br>'.$b;
//in php 8 in poi oa non sei più obbligato a mettere i param in ordine