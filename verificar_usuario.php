<?php 
//conexion a base de datos
include "conexion.php";

//toma los datos del js y pasa de json a objetos
$datos = json_decode(file_get_contents("php://input"));

//guarda el nombre de usuario
$nombre = $datos->usuario;

//seleciona a todos los usuarios con el mismo nombre de usuario
$sql = "SELECT * FROM usuario WHERE nombre = '$nombre'";
//guarda el resultado de la consulta en res
$res = $con->query($sql);

//si la cantidad de registros encontrados es 0 significa que no existe
if($res->num_rows == 0 ){
    echo "nombre de usuario valido";
}else{
    echo "Error: existe un usuario con el mismo nombre";
}