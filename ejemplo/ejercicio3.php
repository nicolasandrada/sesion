<?php

session_start();

if (isset( $_SESSION['usuario'] )){
    echo "Esto es ultra secreto";
}
else {
    header('location:https://www.google.com');
}
