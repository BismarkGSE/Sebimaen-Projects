<?php

    define('DB_SERVER', 'PMYSQL106.dns-servicio.com:3306');
    define('DB_USERNAME', 'wp-admin');
    define('DB_PASSWORD', '!Cristina313');
    define('DB_NAME', '6650490_wp_sebimaen');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

    mysqli_select_db($link, DB_NAME);

    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

    $result = mysqli_query($link, "SELECT * FROM 'sebimaenusers'");

    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }
?>
