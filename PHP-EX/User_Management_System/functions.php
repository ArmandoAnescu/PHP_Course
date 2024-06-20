<?php
function getRandName(){
    $names=[
        'John',
        'Mario',
        'Irene',
        'Goku',
        'Nazza',
        'Angelica',
        'Ermenegilda',
        'Vittoria',
        'Francesca',
        'Nicole',
        'Enrico',
        'Leopoldo',
        'Carloamianto',
        'Fabio',
        'Marcello',
        'Noelle',
        'Eleonora',
        'Elena',
        'Sam'
    ];
    $lastnames=[
        'Rossi',
        'Borbone',
        'Melon',
        'Cucu',
        'Sterza',
        'Formaggio',
        'Cherubin',
        'Anescu',
        'Sulek',
        'Vegro',
        'Morandi',
        'Sprocati',
        'Alfieri',
        'Zadra',
        'Targa',
        'Gasparini'
    ];
    return $names[mt_rand(0,count($names)-1)].' '.$lastnames[mt_rand(0,count($lastnames)-1)];
}
// echo getRandName();
// echo getRandEmail(getRandName()); 
echo getRandFiscalCode();
function getRandEmail($name){
    $domains=[
        'google.com',
        'yahoo.com',
        'outlook.com',
        'iisviolamarchesini.edu.it',
        'infinitevoid.jap',
        'malevolentshrine.com',
        'hotmail.it'
    ];
    return strtolower(str_replace(' ','.',$name).mt_rand(10,99).'@'. $domains[mt_rand(0,count($domains)-1)]); 
}

function getRandFiscalCode(){
    $res='';
    for($i=16;$i>0;$i-=1){
        $res .=chr(mt_rand(65,90));
    }
    return $res;
}



