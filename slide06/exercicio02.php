<div class="titulo">Exercício 02</div>

<p>Faça um programa em <b>PHP</b> que solicite <b>1</b> número inteiro,
verificar se o mesmo é <b>múltiplo</b> de <b>2</b> e mostrar a resposta
mesmo que negativa.</p><hr>

<form action="#" method="POST"> 
    <span>
        <label for="numInt">Digite um numero <b>inteiro</b>:</labe<l>
        <input type="text" name="numInt" />
    </span>

    <input type="submit" name="enviar" />
</form>

<?php
    $numInt = $_POST['numInt'];

    if (isset($numInt)) {
        if(($numInt % 2) == 0) {
            echo "É multiplo de 2! ". "Numero = " . $numInt;
    } 
}
    
