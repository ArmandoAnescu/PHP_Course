<h1>
<?php
$lastName='Griffin';
$firstName='Peter';
$email='PETER.GRIFFIN@GMAIL.COM';
echo strtoupper($lastName).'<br>';
echo strtolower($lastName).'<br>';
$email=trim(strtolower($email));
echo $email;
?>
</h1>
/*
strtoupper trasforma i caratteri in min to Maiusc
strtolower trasforma i caratteri in Maiusc to min
trim elimina gli spazi iniziali e finali di una stringa
*/