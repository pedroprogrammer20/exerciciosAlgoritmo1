<div class="titulo">Exercício 03</div>

<p>Escreva um algoritmo que mostre todos os números
pares entre 33 e 57 usando for.</p>

<?php 
    $soma;
    for($i = 33; $i <= 57; $i++) {
        $soma += $i;
        if(($i % 2 ) == 0) {
            echo $i . "<br>";
        }
    }
    echo "Soma dos numeros pares: " . $soma;