<div class="titulo">Exercício 03</div>

<p> 
    Uma loja dará um desconto em seus produtos de acordo com a categoria de
    cada produto. As categorias e os descontos são mostrados abaixo:<br>
    <ol type="A">
        Categoria desconto
        <li>10%</li>
        <li>15%</li>
        <li>20%</li>
        <li>25%</li>
        <li>50%</li>
    </ol> 
    Faça um algoritmo para ler o nome do cliente, o preço e a categoria do
    produto que o cliente está comprando. Após a leitura mostrar na tela o preço
    final que o cliente deverá pagar após ter sido dado o desconto no preço da
    mercadoria.
</p><hr>

<form action="#" method="POST">
    <span>
        <label for="nomeCli">Nome cliente: </label>
        <input type="text" name="nomeCli" />

        <br>

        <label for="precoProd">Preço produto:</label>
        <input type="text" name="precoProd">
    </span>

    <br>

    <span>
        <label for="valorDescont">Categoria desconto: </label>
        <select name="valorDescont">
            <option value=" ">Selecionar</option>
            <option value="A">A - 10%</option>
            <option value="B">B - 15%</option>
            <option value="C">C - 20%</option>
            <option value="D">D - 25%</option>
            <option value="E">E - 50%</option>
        </select>
        <input type="submit" value="calcular" />
    </span>
    
    <br>

    <?php 
        $nomeCli = $_POST['nomeCli'];
        $precoProd = (double) $_POST['precoProd'];
        $valorDescont = $_POST['valorDescont'];
        $desconto; 
        $categoria;


        switch($valorDescont) {
            case A:
                $desconto = ($precoProd * 10) / 100;
                $categoria = "A - 10%";
                echo "Nome: " . $nomeCli;
                echo "<br>";
                echo "Preço produto: " . $precoProd;
                echo "<br>";
                echo "Categoria desconto: " . $categoria;
                echo "<br>";
                echo "Preço final com desconto = " . round($desconto, 3);
            break;

            case B:
                $desconto = ($precoProd * 15) / 100;
                $categoria = "B - 15%";
                echo "Nome: " . $nomeCli;
                echo "<br>";
                echo "Preço produto: " . $precoProd;
                echo "<br>";
                echo "Categoria desconto: " . $categoria;
                echo "<br>";
                echo "Preço final com desconto = " . round($desconto, 3);
            break;

            case C:
                $desconto = ($precoProd * 20) / 100;
                $categoria = "C - 20%";
                echo "Nome: " . $nomeCli;
                echo "<br>";
                echo "Preço produto: " . $precoProd;
                echo "<br>";
                echo "Categoria desconto: " . $categoria;
                echo "<br>";
                echo "Preço final com desconto = " . round($desconto, 3);
            break;

            case D:
                $desconto = ($precoProd * 25) / 100;
                $categoria = "D - 25%";
                echo "Nome: " . $nomeCli;
                echo "<br>";
                echo "Preço produto: " . $precoProd;
                echo "<br>";
                echo "Categoria desconto: " . $categoria;
                echo "<br>";
                echo "Preço final com desconto = " . round($desconto, 3);
            break;

            case E:
                $desconto = ($precoProd * 50) / 100;
                $categoria = "E - 50%";
                echo "Nome: " . $nomeCli;
                echo "<br>";
                echo "Preço produto: " . $precoProd;
                echo "<br>";
                echo "Categoria desconto: " . $categoria;
                echo "<br>";
                echo "Preço final com desconto = " . round($desconto, 3);
            break;
        }
    ?>
</form>

<style>
    input[type=submit] {
        border-radius: 10px;
        background-color: black;
        border: none;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        margin: 10px 0px;
        cursor: pointer;
    }
</style>