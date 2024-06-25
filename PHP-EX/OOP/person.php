<?php
class Person{
    public string $name;
    public string $lastName;
    public int $age=0;
    public  ?string $address='';
    public  ?string $phone='';
    protected array $cars=[];
    public function __construct(
        string $name,string $lastName,string $address,string $phone
    )
    {
        $this->setName($name);
        $this->lastName=$lastName;
        $this->setAddress($address);
        $this->setPhone($phone);
    }
    public function getCars():array{
        return $this->cars;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getAddress(): string{
        return $this->address;
    }
    public function getPhone(): string{
        return $this->phone;
    }
    public function setName(string $nome):void{
        $this->name=$nome;
    }
    public function setLastName(string $lastName):void{
        $this->lastName=$lastName;
    }
    public function setAge(int $eta):void{
        $this->age=$eta;
    }
     public function setAddress(string $indirizzo):void{
        $this->address=$indirizzo;
    }
    public function setPhone(string $phone):void{
        $this->phone=$phone;
    }
}