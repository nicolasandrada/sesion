<?php
//conexion a base de datos
include "conexion.php";

//recibe los datos del usuario
$nombre = $_REQUEST['nombre'];
//recibe la clave y la encripta. Ej: casa1234 --> xcd$10skjalfak%jajs.... 
$clave = password_hash( $_REQUEST['clave'] , PASSWORD_BCRYPT);

//
$sql = "SELECT * FROM usuario WHERE nombre = '$nombre'";
$res = $con->query($sql);

if($res->num_rows == 0 ){
    $sql = "INSERT INTO usuario(nombre, clave) 
            VALUES ('$nombre','$clave')";

    $con->query($sql);
}else{
    echo "Error: existe un usuario con el mismo nombre";
}