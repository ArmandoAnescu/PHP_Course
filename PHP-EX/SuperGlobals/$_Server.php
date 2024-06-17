<?php
/*
Variabili super globals sono var che si vedono d'ovunque nel nostro script
es:
REMOTE_ADDR,PHP_SELF,SCRIPTING_FILENAME_REQUEST_URI,HTTP_USER_AGENT,QUERY_STRING,REQUEST_METHOD
DOCUMENT_ROOT
$_SERVER è una collezione che contiene tutti dati
*/
var_dump($_SERVER['REMOTE_ADDR']);
var_dump($_SERVER['HTTP_HOST']);
var_dump($_SERVER['REQUEST_URI']);