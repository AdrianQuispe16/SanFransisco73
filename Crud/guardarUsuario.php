<?php
require_once("C:/xampp/htdocs/SanFransisco73/Controlador/Login/Registro.php");
$obj = new usernameControler();
$obj->insertarUsuario(
    
    $_POST['email'],
    $_POST['usuario'],
    $_POST['password']
);


?>
