<?php
$data=[
    'nome'=>'John',
    'surname'=>'Doe'
];
//object
$obj=new stdClass();
$obj->nome='John';
$obj->lastname='Dow';
//Scalar
$name='John Dow';
$val='Test';
function modifyVal($val=null){
    // global $obj;//faccio riferimento alla var
    // $obj->nome='Jane';
    //global $data;
    $GLOBALS['nome']='Capitan Uncino';
    global $val;//facendo questo ignora la var di inserimento
    $val.=' modified';
    var_dump($val);
}
modifyVal('monke');
//var_dump($GLOBALS);
//$GLOBALS contine tutte le var globali e posso accedervi