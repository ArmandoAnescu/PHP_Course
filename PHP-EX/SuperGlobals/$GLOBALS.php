<?php
/*
Contiene tutte le varibili con scop globale,get,post,request,cookie ecc
puoi trovarla ovunque nel codice
*/
$testGlobal='Questa es una var globale';//la var sarà visibile anche in $GLOBALS
function test(){
    echo '$GLOBALS <br>';
    var_dump($GLOBALS);
}//serve quindi ad usare le var globali nelle funzioni senza usare global permettondo anche di usare lo stesso nome
test();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384"></script>
</head>
<body>
    <div class="container">
        <form action="$GLOBALS.php?name=mauro&lastname=costante" method="POST">
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
                <input type="reset" onclick="location.href='$GLOBALS.php'" class="btn btn-success" value="RESET"/>
                <a class="btn btn-danger" href="$GLOBALS.php?name=test&lastname=TestLastname">Invia test</a>
            </div>
        </form>

    </div>
</body>
</html>


