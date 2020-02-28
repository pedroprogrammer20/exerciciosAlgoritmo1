<div class="titulo">Exercício 03</div>

<p>Faça um programa em <b>PHP</b> que solicite <b>2</b> números
inteiros, verificar qual é o número <b>maior</b> e mostrar na
tela, ou se forem <b>iguais</b>, mostrar uma mensagem
indicando esta <b>informação</b>.</p><hr>

<form action="#" method="POST">
    <span>
        <label for="campo1"><b>Campo I</b></label>
        <input type="text" name="campo1" />
    </span>

    <span>
        <label for="campo2"><b>Campo II</b></label>
        <input type="text" name="campo2" />
    </span>

    <input type="submit" name="enviar" />
</form>

<?php
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];

    if (isset($campo1)) {
        if ($campo1 > $campo2){
            echo "Campo I maior = " . $campo1;
        } else if ($campo2 > $campo1) {
            echo "Campo II maior = " . $campo2;
        } else if ($campo1 == $campo2) {
            echo "Campo I e II são iguais!";
        }
    }
    
?>

