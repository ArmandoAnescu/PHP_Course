<?php
const PI=3.14;//puoi anche mettere un espressione qui tipo 3*4, ma deve essere calcolata al tempo di compilazioni non può dipendere a un altra var
echo PI.PHP_EOL;
//define('PI',3.141)
//pi=1.78; non puoi sovrasciverla ti segna errore
const Provincie=['TO','RE'];
//Provincie[2]='RO'; NON SI PUO' NEMMNEO CAMBIARE UN VALORE
if(!defined('PI'))//se non è stata definita una const con nome PI allora definiscila
define('PI',3.141);
