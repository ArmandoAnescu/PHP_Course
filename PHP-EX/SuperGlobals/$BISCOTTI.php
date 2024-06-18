<?php
/*
per creare un cookie ci sono vari param
setcookie(name,value,expire,path,domain,secure,httponly)
name=nome del cookie
value=il valore che vogliamo dare es:"TheRock"
expire=quanto dura il cookie, se non lo imposti chiuso il browser il cookie fa ciao ciao
path=il percorso dove il cookie è valido, se vuoto la cartella dove sis ta lavorando
domain=il dominio dove il cookie è valido,armando.com,tuttogratis.com,tiruboisoldi.com ecc
secure=se il cookie deve essere inviato per connessioni sicure o meno, perciò se siamo in http il valore è True il biscotto non sarà
inviato
httponly=il cookie non è visibile allo script di js ma solo al browser e al server
*/
//come incrementare e creare un cookie
//per evitare problemi con l'ob header se disattivato basta
ob_start();
$time=time()+3600;
setcookie('test',2);
if(!isset($_COOKIE['numberOfVisits'])){
    setcookie("numberOfVisits",1,$time);//crea il cookie
    //$_COOKIE legge i cookie dal browser e dal server 
}else{
    $total=$_COOKIE['numberOfVisits']+1;
    setcookie("numberOfVisits",$total);
}
// header("Set-Cookie:numberOfVisits=1");
foreach($_COOKIE as $name=>$value){
    echo "$name = $value <br>";
}
var_dump($_COOKIE['numberOfVisits']);
//come faccio ad eleminare un cookie?
$tempo=time()-3600;
setcookie('test','',$tempo);//per farlo devi mettere value come stringa vuota ma anche farsì 
//che si termini nel passato, cioè usando time togli un ora creando così il cookie nel passato
//eliminandolo