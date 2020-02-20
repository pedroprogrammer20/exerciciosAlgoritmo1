<div class="titulo">Resposta exercício 02 - Slide 04</div>

<?php
    $cidadeOrigem = $_POST['cidadeOrigem'];
    $cidadeAtual = $_POST['cidadeAtual'];
    $descricao = $_POST['descricao'];
    $campoOculto = $_POST['campoOculto'];
    $senha = $_POST['senha'];

    echo 'Cidade origem: ' . $cidadeOrigem;

    echo "<br>"; 

    echo 'Cidade atual: ' .  $cidadeAtual;

    echo "<br>";

    echo 'Descrição: ' . $descricao;

    echo "<br>";
    
    echo 'Campo oculto: ' . $campoOculto;

    echo "<br>";

    echo 'Senha: ' . $senha;

?>
