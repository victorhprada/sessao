<?php

class Calculadora
{
    public function CalculaMedia(array $notas): ?float
    {
    $quantidadeNotas = sizeof($notas);
        
    if($quantidadeNotas > 0)
    {
        $soma = 0;
    for($i = 0; $i < $quantidadeNotas; $i++)
    {
        $soma += $notas[$i];
    }

    $media = $soma/$quantidadeNotas;


    return $media;

    }else{
        return null;
    }
    }
}