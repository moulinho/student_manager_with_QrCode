<?php
//ouverture et verification de la session
    session_start();
    if (!(isset($_SESSION['PROFILE']))) {
       header("location:Login.php");
    }
?>
