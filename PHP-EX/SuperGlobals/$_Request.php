<?php
/*
REQUEST è un super array che contiene POST GET e COOKIES
l'ordine e get,post sovrascrive GET e poi cookie
*/
ini_set('display_errors',1);//permette di attivare una conf di php, in sto caso di errore
error_reporting(E_ALL);//mostra tutti gli errori
var_dump($_GET);
echo '<br>';
var_dump($_POST);
echo '<br>';
var_dump($_REQUEST);
echo '<br>';
//se usate sia una var get che post vince il post e sovrascrive i valori di get


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
        <form action="$_Request.php?name=monke&lastname=sium" method="POST">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="name" name="name" placeholder="Inserisci" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Last name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Inserisci" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success">SAVE</button>
                <input type="reset" onclick="location.href=$_REQUEST.php" class="btn btn-success" value="RESET"/>
                <a class="btn btn-danger" href="$_Request.php?name=test&lastname=TestLastname">Invia test</a>
            </div>
        </form>

    </div>
</body>
</html>

