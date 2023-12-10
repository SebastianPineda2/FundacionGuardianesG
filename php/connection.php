<?php


function connection(){
    //datos de conexión a la BD
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    //Base de datos
    $dbname = "bdguardianesg";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_select_db($conn, $dbname);


    return $conn;

   

   

}


?>