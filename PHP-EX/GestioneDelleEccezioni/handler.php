<?php
error_reporting(E_ALL);
set_error_handler(function ($errorno,$errordesc,$efile,$eline){
    var_dump(func_get_args());


});//puoi mettere il nome della funz tra '' oppure farla in line
file_get_contents('test.txt');
set_exception_handler(function($e){
error_log($e->getMessage());
});


