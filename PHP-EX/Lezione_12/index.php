<?php
$result=2+2;// va il $ er dichiarae una var (money)
//fwrite(STDOUT,'Armando'); solo su CLI
echo $result;
echo "\n"."Armando";//sia CLI che B(r)owser// \n manda a capo(solo CLI) e . unisce le stringhe
$name ='Armando';
file_put_contents('test.txt',$name);