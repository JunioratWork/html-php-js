<?php
$Monto = $_POST['Monto'];
$Moneda = $_POST['Moneda'];

if($Monto === '' || $Moneda === ''){
    echo json_encode('error'); 
}else{
    echo json_encode('Correcto: <br>Usuario: '.$Monto.'<br>Contraseña:'.$Moneda);
}