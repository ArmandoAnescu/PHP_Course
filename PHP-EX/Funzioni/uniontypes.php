<?php
declare(strict_types=1);
/*
Union types permette di specificare più tipi per un parrametro
* type|type
* int | float


*/
// function somma(int $a, int $b):int{
//     return $a + $b;
// }
// echo somma(5.5,6);//questo senza union types causa errore
function somma2(int|float|string $a=null,int|float  $b):int|float|null{
    return $a + $b;
}
echo somma2(5.5,6);
class B{
    public string |Stringable $nome;
}//Stringable indica l'implementazione del metodo ToString()
