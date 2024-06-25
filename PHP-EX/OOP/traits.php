<?php 
/*
Non possiamo dare a un sola classe da ereditare più clssi per questo possiamo
i traits

*/
trait Test{
    public function login()
    {
        echo 'Mi sto loggando';
    }

    public function logout()
    {
        echo 'Mi sono disconnesso';
    }
    public function getUserRole(){
        return $_SESSION['userrole']??'';
    }
    public function getUserName(){
        return $_SESSION['username']??'';
    }
}
class PostController
{
    use Test;
    public function display(){
        echo $this->getUserName().'<br>';
        $this->logout();
    }
}

$pc=new PostController();
$pc->display().'<br>';
var_dump($pc);
