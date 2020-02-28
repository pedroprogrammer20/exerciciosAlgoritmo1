<div class="titulo">Exercício 02</div>

<p> 
    Implemente um algoritmo em <b>PHP</b> que escreva a seguinte mensagem na tela,
    substituindo a profissão pela informada pelo usuário: "Tibúrcio é <b> < profissão > </b> " 
    <br> Solicite ao usuário que informe a profissão do Tibúrcio, apresente as seguintes opções:
    <br> <b>a-</b>Advogado <b>d-</b>Designer <b>e-</b>Engenheiro <b>m-</b>Médico <b>p-</b>Programador 
    <br> Se informada opção diferente das apresentadas a profissão é DESEMPREGADO.
</p><hr>


<label for="formControlProfi">Escolha a profissão de Tibúcio</label>
<form action="#" method="POST" name="formControProfi">
    <select name="controlProfi">
        <option value=" ">Selecionar</option>
        <option value="a">Advogado</option>
        <option value="d">Designer</option>
        <option value="e">Engenheiro</option>
        <option value="m">Médico</option>
        <option value="p">Programador</option>
    </select>    

    <input type="submit" value="selecionar">
    
    <br>

    <?php 
        $controlProfi = $_POST['controlProfi'];
        $profissao;

        if (isset($controlProfi)) {
            switch($controlProfi) {
                case a:
                    $profissao = "Advogado";
                    echo "A profissão de Tibúrcio é: " . $profissao;
                break;

                case d:
                    $profissao = "Designer";
                    echo "A profissão de Tibúrcio é: " . $profissao;
                break;

                case e:
                    $profissao = "Engenheiro";
                    echo "A profissão de Tibúrcio é: " . $profissao;
                break;

                case m:
                    $profissao = "Médico";
                    echo "A profissão de Tibúrcio é: " . $profissao;
                break;

                case p:
                    $profissao = "Programador";
                    echo "A profissão de Tibúrcio é: " . $profissao;
                break;
        
                default: 
                    $profissao = "DESEMPREGADO";
                    echo "Tibúrcio está " . $profissao;
            }    
        }
    ?>
</form>
