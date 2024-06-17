<?php
declare(strict_types=1);
/*
PHP non farà più casting implicito quando vuoi ritonrare o passare un valore.Perciò se al posto
si un int metti string solleva una eccezione 
*/

function somma(int $a,int $b): int 
{
    $somma=$a + $b;
    // return (string)$somma;
    return $somma;
}
// echo somma('5',5);//solleva un eccezione
echo somma(5,5);
