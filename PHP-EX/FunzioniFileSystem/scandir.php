<?php
$dir='IncludeRequire/';
$d=scandir($dir);//array con elementi di una cartella che puoi ciclare
echo var_dump($d).'<br>';
foreach($d as $entry){
    if($entry==='.'||$entry==='..'){
        continue;
    }
    echo var_dump(is_dir($dir.$entry)).'<br>';//controlla che sia una dir
    echo var_dump(is_file($dir.$entry)).'<br>';//controlla che sia un file
    //devi aggiunger dir altrimenti lui guarda tutto il file system non la dir corrente
    echo $entry.'<br>';
}
//oppure 
$d=dir($dir);//usi dir e ti ritorna un handler che usi poi per vedere i dati
    echo "Handle:".$d->handle.'<br>';
    echo "Path:".$d->path.'<br>';
    while(false!==($entry=$d->read())){
        echo $entry.'<br>';
    }
    echo '<hr>';
//ma il modo più semplice è usare una classe iteratore per ciclare con più facilità i file nella dir
$di=new DirectoryIterator($dir);//iteratore che passando un path 
foreach($di as $entry){//contiene vari metodi come is dir e getfile name che semplificano il process
    echo $entry->getFilename().'<br>';
    echo var_dump($entry->isDir()).'<br>';
    echo var_dump($entry->isFile()).'<br>';
}