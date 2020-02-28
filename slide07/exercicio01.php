<div class="titulo">Exercício 01</div>

<p>
    Implemente uma <b>calculadora</b>, primeiro peça <b>2</b> números 
    ao usuário e apresente as seguintes <b>opções</b>:
    <br> <b>1-</b> Adição <b>2-</b> Subtração <b>3-</b> Multiplicação <b>4-</b> Divisão
</p><hr>

<h3>Calculadora</h3>
<form action="#" method="POST">
    <span>
        <label for="num1">Digite um numero: </label>
        <input type="text" name="num1">
    </span>
    <br>
    <span>
        <label for="num2">Digite um numero: </label>
        <input type="text" name="num2">
    </span>
    <br>
    <select name="tipoOpera">
        <option value="selecionar">Selecionar</option>
        <option value="1">1- Adição</option>
        <option value="2">2- Subtração</option>
        <option value="3">3- Multiplicação</option>
        <option value="4">4- Divisão</option>
    </select>

    <input type="submit" value="calcular">

    <br>

    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $tipoOpera = $_POST['tipoOpera'];
        $resultado;

        if (isset($num1)) {
            
            switch($tipoOpera){
                case 1:
                    $resultado = $num1 + $num2;
                    echo "Operação adição = " . $resultado;
                break;
    
                case 2: 
                    $resultado = $num1 - $num2;
                    echo "Operação subtração = " . $resultado;
                break;
    
                case 3:
                    $resultado = $num1 * $num2;
                    echo "Operacação multiplicação = " . $resultado;
                break;
    
                case 4:
                    $resultado = $num1 / $num2;
                    echo "Operação divisão = " . $resultado;
                break;
    
                default:
                    echo "ERRO!";
            }   
        }
    ?>
</form>
                                                
