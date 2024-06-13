<?php
//le VAR DEVONO iniziare con $ e una letteradopo di che si possono mettere lettere, numeri o _ per continuare
$marc3Ll0___='Banana';
$lastName='di Spagna';
$name='Re';
$age=6900000000000000000;
//array
$mogli=['Angelo','Vegro','Piaggio','Cheru','Giacomo'];
$pi=3.14;
$raggio=20;
//%raggio='h' anche dopo aver già creato una var puoi assegnarli un valore di un altro tipo senza errore
$area=$pi*$raggio*$raggio;
echo "L'area è: <br> $area";//per scrivere una var insieme a una str basta mettere $ noe var dentro la stringa da stampare
//potete mescolare anche i tag html per andare a capo nel browser o rendere la stringa in crosivo, sottolinearla, farla in grassetto, applicare h1 2 3 ecc
echo " <br>il perimetro è: ".(2*$pi*$raggio);
