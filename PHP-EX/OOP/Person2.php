<?php

readonly class Person{//puoi semplificare tutto facendo la classe read only direttamente
       function __construct
    (
        public  string $name=" ",public  string $surName=" ",
        public  int $age=0
    )
    {

    }


}