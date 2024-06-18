<?php
/*
include:quando noi abbiamo del codice in un file e vogliamo incluerlo in un altro file
in modo da non ripetere lo stesso codice(funzioni,classi,var ecc)
*/
//include 'function.php';//questo perché è nella stessa dir
//altrimenti devi specificare il path il problema è che per sbaglio fai include di nuovo dello stesso
//ti da errore allora usa
include_once 'function.php';/*
Nel caso di script complicati e lunghi è meglio usare include_once così se l'hai già incluso
non causa errori
Ma cosa cambia da require/require once?
Che se sbagli il nome del file include ti da un warning mentre reuire un errore perchè 
la funzione è richiesta, poi il once funziona smepre come prima
*/
$dati=['name'=>'Shrek','cognome'=>"l'orco"];
$messaggio=dd($dati);
echo '<br>'.$messaggio;
