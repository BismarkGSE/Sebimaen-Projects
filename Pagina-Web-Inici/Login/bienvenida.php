<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Bienvenido - Sebimaen</title>
    <link rel="stylesheet" href="../css/login-styles.css">
    <link rel="stylesheet" href="../css/main-styles.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda|Montserrat" rel="stylesheet">
    <link rel="icon" href="../img/favicon00.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/menu_ham.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
   <div class="ctn-welcome">
    <img src="images/logo-magtimus-small.png" alt="" class="logo-welcome">
    <h1 class="title-welcome">Bienvenido ha Sebimaen S.A <b>TE HAS LOGEADO CON EXITO!</b></h1>
    <a href="https://sebimaen.com/botiga/" class="close-sesion">Entrar a la Botiga</a>
    <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
   </div>
 </body>
</html>
