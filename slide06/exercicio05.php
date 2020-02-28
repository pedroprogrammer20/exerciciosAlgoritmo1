<div class="titulo">Exercício 05</div>

<p>Solicitar o <b>ano de nascimento</b> de uma pessoa e o <b>ano
atual</b>. Verifique se o ano de nascimento é <b>válido</b>, ou seja,
se o ano de nascimento é <b>menor</b> que o ano atual, então
mostre a idade desta pessoa.</p><hr>

<form action="#" method="POST">
    <span>
        <label for="anoNasci">Ano nascimento: </label>
        <input type="text" name="anoNasci" />
    </span>

    <span>
        <label for="anoAtual">Ano atual: </label>
        <input type="text" name="anoAtual" />
    </span>

    <input type="submit" value="calcular">
</form>

<?php
    $anoAtual = $_POST['anoAtual'];
    $anoNasci = $_POST['anoNasci'];

    $calcIdade = $anoAtual - $anoNasci;

    if (isset($anoAtual)) {
        if($anoNasci < $anoAtual) {
            echo "Ano de nascimento valido! " . "Idade = " . $calcIdade . " anos.";
        } else {
            echo "Ano de nascimento invalido!";
        }
    }
    