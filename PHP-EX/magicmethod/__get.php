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
        // var_dump(func_get_args());
        $obj=new static();
        switch($name){
            case "all":
                return 1;
        }
    }
}
// $obj=new Request();
// echo $obj->name;
Request::all('neim');
// var_dump($obj->getData());
// // Request::get('name');//riorna un par
// // Request::all()//ritorna tutti i param 
// $obj=new Request();
// $obj->name;