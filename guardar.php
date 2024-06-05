<?php

include "conexion.php";

$nombre = $_REQUEST['nombre'];
$clave = password_hash( $_REQUEST['clave'] , PASSWORD_BCRYPT);

$sql = "SELECT * FROM usuario WHERE nombre = '$nombre'";
$res = $con->query($sql);

if($res->num_rows == 0 ){
    $sql = "INSERT INTO usuario(nombre, clave) 
            VALUES ('$nombre','$clave')";

    $con->query($sql);
}else{
    echo "Error: existe un usuario con el mismo nombre";
}