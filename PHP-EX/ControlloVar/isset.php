<?php
$name=null;
if(isset($name)){
    echo "la var $name esiste <br>";
}else{
    echo "la var $name non esiste <br>";
}
//empty
if(empty($name)){
    echo "la var $name è vuota <br>";
}else{
    echo "la var $name non è vuota<br>";
}
/*
php considera una var vuota se:
non è dichiarata
""
0
0.0
"0"
NULL
FALSE
array() (array vuoto)
*/
//is_null()
if(is_null($name)){
    echo "$name è null<br>";
}else{
    echo "$name non è null<br>";
}
//la diff tra isset e is_null è che l'ultimo non genera errore al contrario di isset se non hai ancora dichiarato la var
