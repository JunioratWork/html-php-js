<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if($usuario === '' || $pass === ''){
    echo json_encode('Llenar todos los campos'); 
}else{
    echo json_encode('Correcto: <br>Usuario: '.$usuario.'<br>Contraseña:'.$pass);
}