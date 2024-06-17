<?php
function doppio($val){
    return $val * 2;
}
$doppio=array_map(fn ($val)=>$val*2,
    $doppio
);
$arr=[2.4,4.7,6.9,8.1,9.25];
// $doppioArr=array_map('doppio',$arr);
$arrotonda=array_map('floor',$arr);
print_r($arrotonda);