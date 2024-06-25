<?php
require_once 'car.php';
require_once 'person.php';

$person=new Person('aaa','bbb',232,'23211441434');

/**
 * @var $car Car
 */
foreach($person->getCars() as $car)
{
    /* se una delle auto è nulle ci può essere un fatal error per questo si usa il null operator */
    $car?->getSpeed();//se non è null usa get speed altrimenti non lo usa
}