<?php
    
    //variables de conexion al servidor
    $DATABASE_HOST='localhost';
    $DATABASE_USER='root';
    $DATABASE_PASS='';
    $DATABASE_NAME='db_parkinglot';
    $DATABASE_PORT='3306';

    $conexion =mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

    if(mysqli_connect_error()){
        exit('Error de conexion con MYSQL'.mysqli_connect_error());
    }else{
        //echo"Conexion exitosa";
    }
?>