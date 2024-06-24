<?php
/*
 * class NomeClass{
 * }
*/
class Auto{
    private $color;
    public $upholstery;

    function __construct($extColor=null,$intColor=null){
        $this->color=$extColor;
        $this->upholstery=$intColor;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor(string $color){
        if(strlen($color)>3){
            throw new Exception('Colore invalido');
            //lancio un eccezione
        }
        $this->color=$color;
    }
}
/*
public=l'attributo/metodo può essere chiamato ovunque
(no incapsulamento)
private=l'attributo/metodo può essere chiamato solo da se stesso o dalle classi che ereditano
*/
$auto=new Auto('Red','blue');
$auto2=new Auto;
$auto2->setColor('Azure');
echo $auto->getColor().'<br>';
echo $auto2->getColor().'<br>';
// $auto->color='yellow';
var_dump($auto);