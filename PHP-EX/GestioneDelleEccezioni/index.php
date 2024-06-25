<?php
function getFileContent($filename=' '){
    if(!file_exists($filename))
    {
        throw new Exception("$filename does not exist");
        //sollevo l'eccezione    
    
    }else
    {
        return file_get_contents($filename);
    }
}
try{//prova un codice di blocco
getFileContent('dggdgg');
}catch(Exception $e){//se solleva l'eccezione la cattura
    //e poi se voglio mostro a video il  messaggio
    $arr['success']=false;
    $arr['$message']=$e->getMessage();
    // die($e->getMessage());  
    echo json_encode($arr).'<br>';
}finally
{
    /* viene sempre eseguito */
    echo 'finally called'.'<br>';
}