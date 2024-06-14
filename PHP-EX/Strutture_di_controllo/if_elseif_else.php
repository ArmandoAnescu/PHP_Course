<?php
$money=30;
// if(!$money){//ricorda tutto ciò che NON è null, 0,"" o '0' è true
//     echo "non hai soldi";
// }else{
//     echo "hai dei soldi";
// }
// if($money<=10){
//     echo 'puoi comprare una pizza';
// }elseif($money>10 && $money<=20){
//     echo 'puoi comprare una pizza e una birra';
// }elseif($money>20&&$money<=30){
//     echo 'puoi andare in ristorante';
// }else{
//     echo 'puoi prtare un amico';
// }

//sintassi per mettere check veloci in html per controlli più complessi è meglio usare un file php a parte
//questo sewrve se tu vuoi mettere html puro altrimenti puoi usare un echo '<h2>Puoi comprare una pizza</h2>';
//queto è meglio per un web designer che no sa molto di php ed evita così di modigicare il codice php e creare errori
if(!$money<=10): ?>
    <h2>Puoi comprare una pizza</h2>
<?php 
else: ?>
    <h2>Non puoi comprare una pizza</h2>
<?php
endif;
?>//puoi anche sostituire i : con le { }

