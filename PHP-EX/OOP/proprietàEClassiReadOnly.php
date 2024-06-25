<?php
class Person2{
    // public readonly string $name;
    // public readonly string $surName;
    // public readonly int $age;
    // public function __construct(string $name, string $surName,int $age){
    //     $this->name = $name;
    //     $this->surName = $surName;
    //     $this->age = $age;
    // }ricorda il metodo più fast
    function __construct
    (
        public readonly string $name=" ",public readonly string $surName=" ",
        public readonly int $age=0
    )
    {

    }


}