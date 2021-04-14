<?php

function getKeys(array $vetor){
    $chaves = [];

    foreach ($vetor as $key => $value) {
        $chaves[] = $key;
    }

    return $chaves;
}

    $algumVetor = [
        "chave1" => "valor1",
        999 => "valor2",
        "algumaCoisa" => "valor3"
    ];

    $vetorChaves = getKeys($algumVetor);
    print_r($vetorChaves);