<div class="titulo">Exercício 04</div>

<p>A prefeitura de <b>Florianópolis</b> abriu uma linha de crédito
para os funcionários estatutários. O <b>valor máximo</b> da
prestação não poderá ultrapassar <b>30%</b> do <b>salário bruto</b>.
Faça um <b>algoritmo</b> que permita entrar com o <b>salário bruto</b>
e o valor da <b>prestação</b> e informar se o <b>empréstimo</b> pode
ou não ser <b>concedido</b>.</p><hr>

<form action="#" method="POST">
    <span>
        <label for="salBruto">Salario bruto = </label>
        <input type="text" name="salBruto" />
    </span>
    <br>
    <span>
        <label for="valPrestacao">Valor da prestação = </label>
        <input type="text" name="valPrestacao" />
    </span>

    <input type="submit" value="calcular" />
</form>

<?php
    $salBruto = $_POST['salBruto'];
    $valPrestacao = $_POST['valPrestacao'];

    $emprestimo = ((30 * $salBruto) / 100);

    if($valPrestacao < $emprestimo) {
        echo "Emprestimo concedido!";
    }