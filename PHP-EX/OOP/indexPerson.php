<?php
require_once 'proprietàEClassiReadOnly.php';
require_once 'Person2.php';
$p=new Person('Marcello','Targone',1);
//                  $p->age="2323";
/*essendo read only fare cosi ↑ ritorna fatal error  */
// var_dump($p);
$p2=new Person2('Angelo','Formaggione',69);

echo $p->name.' '.$p->surName.'<br>';
echo $p2->name.' '.$p2->surName;