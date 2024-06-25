<?php
class Car{
    public function __construct
    (
        protected string $make,protected string $model,protected string $version,
        protected string $coloro,protected float $price
    )
    {
        
    }

    public function getSpeed(){
        return 40;
    }
}
