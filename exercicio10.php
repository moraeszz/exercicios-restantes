<?php

function vetores ($primeiroVetor, $segundoVetor) {
    foreach ($primeiroVetor as $elementos){
        if($elementos == $segundoVetor){
            return "true";
        }
    }

    return "false";
}

$elemento1 = [1, 2, 3, 4, 5, 6];
$elemento2 = [3, 4, 7];

echo vetores($elemento2,1,2,3,4,5,6);
