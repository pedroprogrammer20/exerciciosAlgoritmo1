<div class="titulo">Exercício 02</div>

<p>Escreva um algoritmo usando while que solicite ao
usuário um número inicial e um número final. Calcule a
soma de todos os números dentro da faixa de valor
informada INCLUINDO o número inicial e final.</p><hr>

<form action="#" method="POST">
    <span>
        <label for="numInicial">Numero inicial: </label>
        <input type="text" name="numInicial" />

        <label for="numFinal">Numero final: </label>
        <input type="text" name="numFinal" />
    </span>
    <input type="submit" value="calcular">
</form>

<?php
    $numInicial = $_POST['numInicial'];
    $numFinal = $_POST['numFinal'];

    $soma;
    $i = $numInicial;
    if (isset($numInicial)) {
        while ($i <= $numFinal) {
            $soma += $i;
            $i++;
        } 
        echo "Soma: " . $soma . "<br>";
    }
   
