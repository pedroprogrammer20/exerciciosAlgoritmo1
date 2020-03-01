<div class="titulo">Exercício 01</div>

<p>Solicite ao usuário que escreva uma frase e o número de
vezes que a mesma deve ser mostrada. Implemente o
algoritmo usando</p><hr>

<form action="#" method="POST">
    <span>
        <label for="frase">Escreva uma frase: </label>
        <input type="text" name="frase" size="100"/>

        <br>

        <label for="numRepet">Numero de repetições: </label>
        <input type="text" name="numRepet" size="10"/>
    </span>

    <input type="submit" value="calcular" />
</form>
<br>

<?php 
    $frase = $_POST['frase'];
    $numRepet = $_POST['numRepet'];

    for ($i = 1; $i <= $numRepet; $i++) {
        echo $frase . "<br>";
    }