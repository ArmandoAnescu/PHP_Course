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