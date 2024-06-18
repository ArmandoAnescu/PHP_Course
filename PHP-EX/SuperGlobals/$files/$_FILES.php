<?php
/*

*/
if(!empty($_FILES)){//controllo che non sia vuoto
    // var_dump($_FILES);
    $destination=realpath(dirname(__FILE__).'/images/');
    //creo la destinazione
    echo $destination.'<br>';
    foreach($_FILES as $key=>$file){
        echo "$key <br>";
        $filename=basename($file['name']);
        if(is_uploaded_file($file['tmp_name'])&& $file['error']=== UPLOAD_ERR_OK){
            //controllo se il file è stato caricato e che non ci siano errori
            $res=move_uploaded_file($file['tmp_name'],$destination.'/'.$filename);
            if($res){//sposto il file e controllo poi se l'ha spostato oppure no
                echo "file $filename è stato caricato <br>";
            }else{
                echo "file $filename non è stato caricato <br>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity='sha384'></script>
</head>
<body>
    <div class="container">
        <form enctype="multipart/form-data" action="$_FILES.php?name=mauro&lastname=costante" method="POST">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="name" name="name" placeholder="Inserisci" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Inserisci" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">Avatar</label>
                <input type="file" id="avatar" name="avatar" placeholder="Inserisci immagine" class="form-control" onchange="document.getElementById('imgavatar').src=window.URL.createObjectURL(this.files[0])">
                <img src="" alt="avatar" id="imgavatar" width="120">
            </div>
            <div class="form-group">
                <button class="btn btn-success">SAVE</button>
                <input type="reset" onclick="location.href='$_FILES.php'" class="btn btn-success" value="RESET"/>
            </div>
        </form>

    </div>
</body>
</html>
<?php
