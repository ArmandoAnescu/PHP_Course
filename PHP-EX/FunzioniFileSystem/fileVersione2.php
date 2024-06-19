<?php 
$filename='myfile2.txt';
$content='';
// file_put_contents($filename,'Primo contenuto');
if(is_dir(dirname(__FILE__))){
    echo '<br>'.'Directory esiste'.'<br>';
}
if(file_exists($filename)){
    $content=file_get_contents($filename);
}
file_put_contents($filename,$content."\n".'Secondo contenuto');
echo file_get_contents($filename);
/*
dirname(__FILE__)
getcwd()
file get contents ti prende tutto il contenuto di un file mentre put mette una stringa dentro al file
fa tutto in auto
unlink(nomefile):elimina un file
*/