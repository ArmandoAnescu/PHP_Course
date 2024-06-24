<?php
interface iCar
{
    public function stop();
    public function start();
    public function changeGear(int $v);
    public function park();
    public function accelerate();
}
class Auto implements iCar
{
    public $isStopped=true;
    protected $gear=0;
    protected $isParked=false;
    public function stop(){
        $this->isStopped=true;
    }
    public function start(){
        $this->isStopped=false;
    }
    public function changeGear($v){
        $this->gear=$v;
    }
    public function park(){
        $this->isStopped=true;
        $this->isParked=true;
    }
    public function accelerate(){
        
    }
}
$car=new Auto('Rosa','Nero');
$car->start();
$car->changeGear(3);
var_dump($car);