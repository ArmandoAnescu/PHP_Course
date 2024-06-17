<?php
/*
array_pop:toglie l'ultimo elemento
array_push:aggiunge un elemento alla fine
array_shift:togli il primo elemento e lo ritorna
array_unshift:aggiunge elementi all'inizio di un array
sort:ordina un array e rigenera le chiavi
natsort:ordina un array seguendo l'ordine naturale 1,2,3,4 ecc e funziona come il sort
asort:ordina un array mantenedo le chiavi
array_map:applica una funzione ad ogni elemento e ritorna un nuovo array con le modifiche
array_walk:applica una funzione a ogni elemento

*/
$colors=['BLUE','RED','GREEN'];
echo var_dump($colors).'<br>';
$color=array_pop($colors);//rimuove l'ultimo colore e lo ritorna
echo $color.'<br>';
var_dump($colors);
//array_push($colors,['PINK','PURPOL','YELLOW']);
//se scrivi così crei un array a più dimensioni nella 3 pos avrai un array contenente i colori sopra
array_push($colors,'PINK','PURPOL','YELLOW');
echo '<br>'.var_dump($colors).'<br>';
$color=array_shift($colors);
echo var_dump($color).'<br>';
array_unshift($colors,'BLUE','WHITE');
//se mette più valori non scrive WHITE,BLUE ...
//Ma BLUE,WHITE
echo '<br>'.var_dump($colors).'<br>';
////////////////////////////////////////////////////////////////////////
$images=['img1.jpg','img2.jpg','img11.jpg','img4.jpg','img5.jpg','img10.jpg','img6.jpg','img3.jpg','img20.jpg','img8.jpg','img9.jpg'];
//sort($images,SORT_NATURAL);//se non usi sort natural il risultato non è l'ordinamento umano
//1,2,3 ... ma quello della macchina
//oppure puoi usare, uguale a quello usato primo ma co sort natural integrato e puoi usarlo
//key sensitive natsort() o insensitive natcasesort()
natcasesort($images);
var_dump($images);
$words=['red'=>'rosso','blue'=>'blu','green'=>'verde'];
//sort($words);non mantine le chiavi
asort($words);
// var_dump($words);
array_walk($words,function(&$val,$k){
    $val=strtoupper($val);
});
$initial=array_map(function($v){
    return substr($v,0,1);
},$words);
var_dump($initial);

