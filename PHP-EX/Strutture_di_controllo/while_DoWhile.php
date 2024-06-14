
<?php
/*
while(espressione){
 ......
}
prima controlla l'espressione poi esegue il codice

do
{
.....
}while(espressione);
fa il codice almeno una volta e poi controlla che l'espressione sia vera
*/
// $i=1;
// while($i<=10)
// {
//     echo $i."<br>";
//     $i+=1;//incremento la var di uno
// }
// echo "<br><br>";
// //anche se i adesso è 11 esegue almeno una volta la stampa 
// do
// {
//     echo $i."<br>";
//     $i+=1;
// }while($i<=10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body{
        background-color: cornflowerblue;
    }
    ul{
        background-color: gray;
        color: black;
        font-size: large;
        border-radius: 5px;
        border: 5px solid darkgrey;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicli While</title>
</head>
<body>
<ul>
    <?php
    $arr=['red','blue','green','yellow'];
    $i=0;
    $total=count($arr);//ritorna il numero di elementi in un array
    while($i<$total){
        echo '<li style="color:'.$arr[$i].'">'.$arr[$i];
        $i++;
    }
    
    
    ?>
</ul>
</body>
</html>
