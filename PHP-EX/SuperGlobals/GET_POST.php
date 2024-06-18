<?php
/*
    $_GET contiene tuccio ciò che passi nell'url o in un form o con un metodo get
    es:http://localhost/SuperGlobals/GET_POST.php?username=a

*/
ini_set('display_errors',1);//permette di attivare una conf di php, in sto caso di errore
error_reporting(E_ALL);//mostra tutti gli errori
// if(isset($_GET['username'])){
//     var_dump($_GET['username']);
// }
//$_GET['username']=null;//se assegno il valore null  non posso vedere il var dump 
//perchè per isset è falso, allora controllo che la chiave esista
if(array_key_exists('username',$_GET )){
    var_dump($_GET['username']);
}
var_dump($_POST);


//potete scegliere di usare post o get in base al livello di sicurezza che volete ricordate di controllare che le chiavi esistano e fate i vari necessari controlli ecc
/*
There are 2 methods to send HTML form data from 1 Page to another or HTML page to server side (In PHP).

POST
It is a method in which data gets sent using packet which is not visible to any user on web-browser. it is secured compared to GET method.

GET
It is a method in which data gets sent with URL which is visible to user in address-bar of any web-browser. So, it’s not secure as POST method.

Now, There are total three super global variables to catch this data in PHP.

$_POST: It can catch the data which is sent using POST method.
$_GET: It can catch the data which is sent using GET method.
$_REQUEST: It can catch the data which is sent using both POST & GET methods.
Also with $_GET superglobal variable can collect data sent in the URL from submit button.
https://stackoverflow.com/questions/42942559/whats-the-difference-between-post-get-and-request#:~:text=Difference%20is%3A,multipart%2Fform%2Ddata%20encoding.

se volete approfondire->https://www.diffen.com/difference/GET-vs-POST-HTTP-Requests
*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <form action="GET_POST.php?name=monke&lastname=sium" method="POST">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="name" name="name" placeholder="Inserisci" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Lastname</label>
                <input type="text" id="lastname" name="lastname" placeholder="Inserisci" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success">SAVE</button>
                <input type="reset" onclick="location.href=GET_POST.php" class="btn btn-success" value="RESET">
                <a class="btn btn-danger" href="GET_POST.php?name=test&lastname=TestLastname">Invia test</a>
            </div>
        </form>

    </div>
</body>
</html>

