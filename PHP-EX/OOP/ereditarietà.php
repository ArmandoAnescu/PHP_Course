<?php
/*
 * class NomeClass{
 * }
*/
class Auto{
    protected $color;
    protected $upholstery;

    function __construct($extColor=null,$intColor=null){
        $this->color=$extColor;
        $this->upholstery=$intColor;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $color){
        if(strlen($color)<3){
            throw new Exception('Colore invalido');
            //lancio un eccezione
        }
        $this->color=$color;
    }  
    public function getUpholstery()
    {
        return $this->upholstery;
    }
    public function setUpholstery(string $upholstery){
        $this->upholstery=$upholstery;
    }  
}

//Ereditàrieta
class Truck extends Auto
{
    protected $weight;
    public function __construct($extColor=null,$intColor=null,int $weight=100){
        //parent::__construct($extColor,$intColor);
        /* faccio riferimento alla super classe egl paso i parametri che ho ereittato */
        //oppure
        parent::setUpholstery($intColor);
        parent::setColor($extColor);
        // $this->color=$extColor;
        // $this->upholstery=$intColor;

        $this->weight=$weight;

    }
}
$fordTruck=new Truck('rosso','Bugatti',12);

var_dump($fordTruck);
