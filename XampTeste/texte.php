<?php

session_start();
require 'Calculadora.php';

$notas  = [9, 5, 10, 8, 10];
$_SESSION['notas'] = ' 9, 5, 10, 8, 10';

$calculador = new Calculadora();
$media = $calculador->CalculaMedia($notas);

if($media)
{
    echo "<br>A média é: $media</br>";
    echo 'As respectivas notas são:';
    echo '('. $_SESSION['notas'] . ')';
    
}else
{
    echo "Não foi possível calcular a média";
}


