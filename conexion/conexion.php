<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="ingles";
    $tabla="register";

    $conexion= new mysqli($server,$username,$password,$db);
    if($conexion->connect_errno){
        die("Conexion fallida".$conexion->connect_errno);
    }else{
    }
    ?>




