<div class="titulo">Resposta exercício 04 - Slide 05</div>

<?php
    
    $altura = (double) $_POST['altura'];
    $peso = (int) $_POST['peso'];

    $imc = (double) $peso / ($altura * $altura) ;

    echo "IMC = " . round($imc, 2);

?>

<!-- fazer a interpretação do IMC com % -->