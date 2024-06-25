<?php
include 'Dev1/test.php';
/*
I namespace sono un modo per incapsulare i dati, sono come delle cartelle dove lo stesso
nome di file può esistere in diverse cartelle: /TEST/info.txt /PROD/info.txt
Per definirne uno all'inizio del file scrivi namespace e deve essere la prima riga 
almeno che non usi una declare
*/
$test= new Dev1\Test();