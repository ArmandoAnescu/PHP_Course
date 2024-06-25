<?php
$data=[
'name'=>'John',
'lastname'=>'Doe'
];

$obj=new stdClass();
$obj->name='john';
$obj->lastname='Doe';
$name ='John Doe';

function modifyVal(&$val){//per obbligare il pass per ref basta mettere & davanti
    if(is_object($val)){
        $val->name='JOHN';
    }else if(is_array($val)){
        $val['name']='JOHN';
    }else
    {
        $val='JOHN';
    }
    echo "<h1> Interno funzione </h1>";
    echo var_dump($val).'<br>';
}

var_dump($data);
modifyVal($data);
modifyVal($obj);//viene passato sempre per ref l'array no
//ne i valori scalari
echo var_dump($obj).'<br>';
var_dump($data);