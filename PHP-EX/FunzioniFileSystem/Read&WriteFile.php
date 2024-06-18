<?php
// $dir='FunzioniFileSystem/';
$filename='myfile.txt';
//apro un file e se non esiste lo crea
$hd=fopen($filename,'w');
if($hd){
    fwrite($hd,'prima scrittura su file');
    fclose($hd);
}else{
    echo 'errore apertura file';
}
$hd=fopen($filename,'r');//se usi un file binario aggiugni b quindi 'rb'
if($hd){
    $content=fread($hd,filesize($filename));//file size ritorna la grandezza di un file
    rewind($hd);//visto che ho già letto nel file il puntatore è già alla fine allora usiamo rewind
    //e torniamo all'inizio
    $content='';//metodo se non vuoi uare filesize
    while(!feof($hd)){//controllo se arriavto a fine file
        $content.=fread($hd,1024);//concateno tutto
    }
    echo $content;
    fclose($hd);
}else{
    echo 'errore apertura file';
}
$hd=fopen($filename,'a');//appende il contenuto,cioè se ho già informazioni salvate
//le aggiugne subito dopo
if($hd){
    fwrite($hd,"\nSeconda scrittura su file \n");
    fclose($hd);
}else{
    echo 'errore apertura file';
}