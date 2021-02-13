<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/myStyle.css">

    <title>Document</title>
</head>
<body>
<div class="container sapcer  col-xs-6 col-sm-6 col-md-6 col-xs-offset-3 col-sm-offset-3  col-md-offset-3">
<?php require("entete.php")?>
    <div class="panel panel-warning">
    <div class="panel panel-heading spacer"><h1><center>Authentification</center></h1></div>
    <div class="panel panel-body"> 
    
        <form method="post" action="Authentifier.php" enctype="multipart/form-data">
            <div class="form-group " >
            <label  class="control-label">Login:</label>
            <input type="text" name="username" class="form-control" id="">
            </div>

            <div class="form-group " >
            <label  class="control-label">Mot de passe :</label>
            <input type="password" name="password" class="form-control" id="">
            </div>


           <center> <button type="submit" class="btn btn-primary">Se connecté</button></center>
        </form>
    
    </div>
    </div>
    </div>
</body>
</html>