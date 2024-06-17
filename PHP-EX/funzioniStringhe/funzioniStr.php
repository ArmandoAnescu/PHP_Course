<h1>
<?php
/*
strtoupper trasforma i caratteri in min to Maiusc
strtolower trasforma i caratteri in Maiusc to min
trim elimina gli spazi iniziali e finali di una stringa
replace sostituisce un char con un altro
strpos la pos di un char
implode unisce gli elementi degli array e se vuoi puoi mettere
un simbolo tra ogni elemnto
explode dato un char suddivide una stringa in un array
join uguale a implode
stripslashes se nel DB(data base) salvi i dati con \ alla fine inizio puoi rimuoverli
per una stampa pulita
str_contains controlla se un char o una parola sono contenute in una stringa
se c'è ritorna true altriemnti false(key sensitive)
starts_with controlla che la stringa inizia con un char o parola(key sensitive)
ends_with controlla che la stringa finiscaa con un char o parola(key sensitive)
stripos ritorna la pos della lettara ed key insensitive
*/

$lastName='Griffin';
$firstName='Peter';
$email='PETER.GRIFFIN@GMAIL.COM';
$address='èàò';
echo strtoupper($lastName).'<br>';
echo strtolower($lastName).'<br>';
$email=trim(strtolower($email));
echo $email;
// $address=str_replace('à','a',$address);
// $address=str_replace('è','e',$address);
// $address=str_replace('ò','o',$address);
//troppo lungo
$arrDaSostituire=array('è','à','ò');
$arrSostituti=['e','a','o'];
$address=str_replace($arrDaSostituire,$arrSostituti,$address);
echo '<br>'.$address;
$atExist=strpos($email,'@');
if($atExist!==false){//non basta $atExist come condizione
//perchè se la @ è nella pos 0 0 è false e quindi nonti dice che c'è

    echo "la chiocciola c'è".'<br>';
}
echo var_dump($atExist).'<br>';
$str='1,2,3,4,5,6,7,8,9';
$arr=explode(',',$str);
$sayHi=['H','e','l','l','o'];
echo implode("-",$sayHi).'<br>';
echo join("",$sayHi).'<br>';
$carName="Doblo\'";
$carName=stripslashes($carName);
echo $carName.'<br>';
$str='Adoro le ragazze gotiche';
echo var_dump(str_contains(haystack:$str,needle:'gotiche')).'<br>';
if(str_starts_with($str,'Adoro')){
    echo "La stringa inizia con A";
}
?>
</h1>
