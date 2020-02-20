<div class="titulo">Exercício 01</div>

<p>Faça um programa em <b>PHP</b> declarando uma variável chamada <b>nome</b>, e siga os seguintes passos: </p>

<ol>
    <li>Atribua o valor "João" a esta variável</li>
    <li>Mostre o valor da variável nome em uma mensagem</li>
    <li>Mude o valor da variável nome para outro valor qualquer</li>
    <li>Mostre o valor da variável nome em uma mensagem seguindo o seguinte modelo:</li>
    <!-- O valor da variável é: <valor inserido no passo 3 -->
</ol><hr>

<h2>Resposta:</h2>

<?php
    // atribuindo valor a variável nome
    $nome;
    $nome = 'Ricardo';
?>

<!-- mostrando o valor da variável nome -->
<p>O nome do professor é <?= $nome ?> </p>


<?php 
    // mudando o valor da variável nome
    $nome = 'Pedro Ivo';
?>

<!-- mostrando o novo valor da variável nome -->
<p>O nome do aluno é <?= $nome ?> </p>