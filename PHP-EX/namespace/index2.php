<?php
/*
Come si fa l'autoload? per usare le classi quando ne abbiamo bisogno
*/
function autoloadClass($className){
    // echo "<h1> $className </h1>";
    $link=str_replace('\\','/',$className).'.php';
    // echo $link;
    if(file_exists($link)){
        require_once $link;
    }
}
spl_autoload_register('autoloadClass');

$ada=new Dev1\Test();