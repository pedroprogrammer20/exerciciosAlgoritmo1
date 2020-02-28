<div class="titulo">Exercício 06</div>

<p>Solicitar <b>nome</b> e <b>idade</b> de uma pessoa.
Se a pessoa possuir idade entre <b>15</b> e <b>25</b> anos, <b>imprimir</b> o
nome e a mensagem: <b>“ACEITA”</b>. Caso contrário, <b>imprimir</b> o
nome e a mensagem: <b>“NÃO ACEITA”</b>.</p><hr>

<form action="#" method="POST">
    <span>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" />
    </span>

    <span>
        <label for="idade">Idade: </label>
        <input type="text" name="idade" />
    </span>

    <input type="submit" value="testar" />
</form>

<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if (isset($nome)) {
        if($idade >= 15 && $idade <= 25) {
            echo "Nome: " . $nome;
            echo "<br>";
            echo "Idade: " . $idade;
            echo "<br>";
            echo "ACEITO!!!";
        } else {
            echo "Nome: " . $nome;
            echo "<br>";
            echo "Idade: " . $idade;
            echo "<br>";
            echo "NÃO ACEITO!!!";
        }
    }
    