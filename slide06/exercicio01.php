<div class="titulo">Exercício 01</div>

<p>Faça um programa em <b>PHP</b> que solicite 2 números
inteiros e efetue a adição; caso o resultado seja maior
que 10, apresentá-lo.</p><hr>

<form action="#" method="POST">
    <span>
        <label for="int1">Digite um numero <b>inteiro</b></label>
        <input type="text" name="int1" />
    </span>

    <span>
        <label for="">digite outro numero <b>inteiro</b></label>
        <input type="text" name="int2" />
    </span>

    <input type="submit" name="enviar" />
</form>

<?php
        $int1 = $_POST['int1'];
        $int2 = $_POST['int2'];

        $calcInt = $int1 + $int2;

        if(isset($int1)){
            if($calcInt > 10 ) {
                echo "Adição > 10 = " . $calcInt;
            } else {
                echo "Adição < 10 = " . $calcInt;
            }
        }
    ?>



