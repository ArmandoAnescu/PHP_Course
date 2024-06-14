<style>
    ul{
        background-color: darkgray;
    }
</style>
<ul>
<?php
    $arr=['red','blue','green','yellow','pink','purple','black'];
    //$total=count($arr);
    //puoi inizializzare lavar qui o dentro il for
   for($j=0;$j<3;$j++){//ripete il ciclo dentro 3 volte
    for($i=0,$total=count($arr);$i< $total;$i++)
    {
        // if($i>2)
        // {
        //     break;//ferma il ciclo
        // }
        // if($arr[$i]=='pink'){
        //     continue;//salta l'iterazione e va a quella dopo
        //     //le istruzioni prima vengono eseguite quelle dopo no
        // }
        if($j==1){
            break 2;//quanti cicli devo saltare
        }
        if($i==6){
           $hr='<hr>';
        }else{
            $hr="";
        }
        echo '<li style="color:'.$arr[$i].'">'.$arr[$i].$hr.' </li>';

    }
   }
?>
</ul>
<?php
for($i=0;$i<=10;$i++){
    for($j=0;$j<=10;$j++){
        echo "$i X $j=".($i*$j).'<br>';
    }
    echo '<br>';
}
?><!-- commento -->
<h1>
<?php
$arr=['red','blue','green','yellow','pink','purple','black'];
$arr2=['rosso'=>'red','blue'=>'blue','green','yellow','pink','purple','black'];
$arr3[]=['A','B','C'];
$arr3[]=['1','2','3'];
foreach($arr as $value){
    echo "$value <br>";
}
foreach($arr2 as $key=>&$value){//con & passo value per ref
    $value=strtoupper($value);
    echo "$key -> $value <br>";
}
unset($value);//per evitare che qualcuno modifichi il valore essendo passata per ref
//var_dump($arr2);
foreach($arr3 as $value){
    foreach($value as $val){
        echo "$val <br>";
    }
}
?>
</h1>
