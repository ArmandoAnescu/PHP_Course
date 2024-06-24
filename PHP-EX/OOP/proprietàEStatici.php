<?php
abstract class Car
{
    protected $speed=50;
    public static $classVersion='1';/*
    static=proprietà che non dipende dall'oggetto è inerente a tutta la classe
    */
    abstract function speedUp(int $v);
    public final function getSpeed(){
        
        return $this->speed;
    }
    /*
    final=non puoi sovrascrivere il metodo
    */
  
}
class myCar extends Car
{
    
    public function speedUp(int $v){
        $this->speed+=$v;
    }
    public function getParentV(){
        return parent ::$classVersion;
    }
    //parent=chiama a riferimetno la classe base
}
$auto=new myCar;
$auto->speedUp(50);
var_dump($auto);
