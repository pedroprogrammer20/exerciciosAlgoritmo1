<div class="titulo">Resposta exercício 02 - Slide 05</div>

<?php
    $num1 = 0;
    $num2 = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calculo;
    $calculo = $num1 + $num2;

    echo 'A soma dos dois inteiros é = ' . $calculo;
?>