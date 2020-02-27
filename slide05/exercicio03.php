<div class="titulo">Exercício 03</div>

<p>Escreva um programa em <b>PHP</b> que solicite ao usuário <b>2</b> 
números inteiros (na mesma interface), armazene os
valores em variáveis e depois mostre a soma dos dois
em uma mensagem.</p><hr>

<!-- action="processaForms.php?dir=processa&file=resp02Slide05" -->
<form  action="#" method="POST">
    <span>
        <label for="inteiro1">Digite um numero inteiro: <label>
        <input type="text" name="inteiro1" />
    </span>

    <span>
        <b> + </b>
    </span>
    
    <span>
        <label for="inteiro2">outro inteiro:</label>
        <input type="text" name="inteiro2" />
    </span>

    <span>
        <b> = </b> 
    </span>

    <input type="submit" value="enviar" />
</form>

<?php 
        $inteiro1 = $_POST['inteiro1'];
        $inteiro2 = $_POST['inteiro2'];
    
        $calculoSoma = $inteiro1 + $inteiro2;
        if (isset ($inteiro1)) {
            echo "A soma dos inteiros é = " . $calculoSoma;
        } 
?>

<style>

    b {
        padding: 10px;
    }
</style>

