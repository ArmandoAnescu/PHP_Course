<?php
declare(strict_types=1);

function sum(?int $a=null,?int $b=null){//con il ? accetta valori null o gli assegna null
    if ($a===null && $b===null){
        return null;
    }
    return $a + $b;
}
$result=sum(null,null);