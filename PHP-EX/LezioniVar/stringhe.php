<h1>
<?php
$address="Via Ponfo104";
$name='Armando';
$lastName= "$name Anescu \n $address";//con le " PHP controlla che ci siano vaar e le converte in testo
//echo $name;
echo nl2br($lastName);
$name='<br> $address Armando <br>';
echo $name;
$account=[2,3];
$account['SSN']=244424;
$obj=new stdClass();
$obj->name='Armando';
$dati=<<<EOD
il mio nome é $name <br>
il mio cognome è $lastName
il mio indirizzo è $address <br>
$account[SSN] <br>
{$account['SSN']} <br>
$obj->name
$account[0]
EOD;//<<<Identifiativo identificativo; posso mettere dentro tutti i dati in una stringa come voglio senza stare a preoccuparmi degli apici
//posso mettere qunati tag volgio , puoi metterci anche una poesia heredoc
//array e oggetti possono essere messi dentro
echo $dati;
//nl2br= new line to breaktrasforma \n in un break
//nowdoc diff di here doc è che metti gli ' '
$data2=<<<'EOD'
il mio nome é $name <br>

il mio cognome è $lastName

il mio indirizzo è $address <br>

$account[SSN] <br>

{$account['SSN']} <br>

$obj->name

$account[0]
EOD;//non parsifica nulla lascia tutto come lo scrivi es: $var=2 sarà in output $var non il valor come con heredoc
?>
</h1>
<!--per scrviere un elemento di un array che usa una key o togli ' ' o metti {array[key]} altrimenti è errore
per scrivere un elemento di un oggetto che usa una proprietà non servono le {} ma per i metodi si-->