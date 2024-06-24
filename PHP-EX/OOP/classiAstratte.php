<?php
/*
le classi astratte NON possono essere implementate vengono usate solo come classi base
le classi astratte possono avere metodi astratti
i metodi della classe astratta devono rispettare la firma della classe base e la visibilità

*/
abstract class Car
{
    abstract function speedUp(int $v);
}
class myCar extends Car
{
    protected $speed=50;
    public function speedUp(int $v){
        $this->speed+=$v;
    }
}
$auto=new myCar;
$auto->speedUp(50);
var_dump($auto);
