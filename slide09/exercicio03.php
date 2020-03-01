<div class="titulo">Exercício 03</div>

<p>Escreva um algoritmo que mostre todos os números pares entre 13 e 23 usando do..while.</p>

<?php
    $i = 13;
    do {
        $i++;
        if (($i % 2) == 0) {
            echo "É par: " . $i . "<br>";
        }
    } while($i<23); 
    
             