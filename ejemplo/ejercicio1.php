<?php

//inicio de uso de sesion
session_start();

//session_id---> es el identificador de la 
//               sesion
echo session_id();

//Creamos un arreglo(array o vector) con varios datos
$usuario = [
    'nombre' => 'jose',
    'id' => 359,
    'fecha' => "2006/8/13" 
];

// $_SESSION ---> variable de tipo sesion
//$_SESSION['nombre'] = "jose";

//definimos el nombre de la variable y le guardamos todos los datos de $usuario
$_SESSION['usuario'] = $usuario;

