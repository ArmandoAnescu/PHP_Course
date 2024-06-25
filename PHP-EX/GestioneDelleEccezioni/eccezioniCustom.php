<?php
class MyException extends Exception{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null){
        $message='An exception has been found in '.$this->getFile().' at line '.$this->getLine().' with code '.$code.'<br>';
        parent::__construct($message, $code, $previous);
    }
}
function getFileContent($filename=' '){
    if(!file_exists($filename))
    {
        throw new MyException("$filename does not exist");
        //sollevo l'eccezione    
    
    }else
    {
        return file_get_contents($filename);
    }
}
try{//prova un codice di blocco
getFileContent('dggdgg');
}catch(MyException $e){//se solleva l'eccezione la cattura
    //e poi se voglio mostro a video il  messaggio
    $arr['success']=false;
    $arr['$message']=$e->getMessage();
    // die($e->getMessage());  
    echo json_encode($arr).'<br>';
}catch(Exception $ex){//se vuoi usare le tue eccezioni ricordati di mettere un catch generico
    echo '<br'.$ex->getMessage();
}finally
{
    /* viene sempre eseguito */
    echo 'finally called'.'<br>';
}