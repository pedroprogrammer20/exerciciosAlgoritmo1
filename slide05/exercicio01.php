<div class="titulo">Conversões de tipos</div>
        <!-- 
                settype() = Atribui um tipo para a variável!
                gettype() = Faz uma representação legivel do tipo da variável para a depuração.
                var_dump() = checa o tipo e o valor da expressão.
                var_export() 
        -->
<?php
    $numero = 10;
    $nome = 'Pedro';
    $peso = 65.4;

    echo $numero;

    $resposta = (string) $numero;

    echo "<br>";
    
    echo gettype($numero);

    echo "<br>";

    echo gettype($resposta);

    echo "<br>";

    var_dump($numero);

    echo "<br>";

    var_dump($resposta);

    $mudanca = (integer) $resposta;

    echo "<br>";

    var_dump($mudanca);

    settype($peso,"integer");

    echo "<br>";

    echo gettype($peso);

    $calculo = 10;

    $resposta = (float) $calculo - 4.4;

    var_dump($calculo);
    
    echo "<br>";

    var_dump($resposta);

    echo "<br>";
    
    echo gettype($resposta);