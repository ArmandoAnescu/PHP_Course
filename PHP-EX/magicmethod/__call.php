<?php
class Request
{
    protected $data;
    public function __construct( )
    {
        echo "passando costruttore <br>";
        if(!empty($_REQUEST)&& empty(self::$data))
        {   
            $this->data = $_REQUEST;
        }
    }
    public function getData(){
        return $this->data;
    }
    public function __get($name){
        return isset($this->data[$name])?$this->data[$name]:null;
    }
    public static function __callStatic($name, $args){
    
        $obj=new static();
        switch($name){
            case "all":
                return $obj->getData();
        }
    }

    public  function __call($name, $args){
        $var=strtolower(str_replace('get','',$name));
        return isset($this->data[$var])?$this->data[$var]:null;
    }
}
$obj=new Request();
var_dump($obj->getName());