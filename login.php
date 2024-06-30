<?php

session_start();

include "conexion.php";

$nombre = $_REQUEST['nombre'];
$clave = $_REQUEST['clave'];

$SQL = "SELECT * FROM usuario 
            WHERE nombre = '$nombre'";

$res = $con->query($SQL);

$datos = $res->fetch_assoc();

if( password_verify( $clave , $datos['clave'] ) ){
    $_SESSION['usuario'] = $datos; 
}else{
    header('location:logeo.php');
}







