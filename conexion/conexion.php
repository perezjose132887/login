<?php
    $servername="localhost";
    $username="root";
    $password="perez123";
    $dbname="login";

    $conn= new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Conexion fallida");
    }
    else{
        echo "Conexion exitosa";
    }
?>