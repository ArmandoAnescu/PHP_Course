<?php
session_start();//per iniziare una sessione basta
ob_end_clean();
?>
<h1>Titolo</h1>
<?php
/*
$_SESSION:
Dove raccolgo le sessioni, cioè un ambiente dove posso salvare i dati dell'utente mentre lavora
Devi però iniziare una sessione
*/
var_dump($_SESSION);
$_SESSION['userid']=4;
$_SESSION['islogged']=1;
session_write_close();//se devi usare session in più file php devi aspettare che finisca di usare la sessione
//perciò ricorda di chiudere la sessione