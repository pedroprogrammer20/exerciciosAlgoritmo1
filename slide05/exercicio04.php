<div class="titulo">Exercício 04</div>

<p>Escreva um programa em <b>PHP</b> que solicite ao usuário o seu
peso (aqui entenda como massa) em <b>Kg</b> (int) e a sua <b>Altura</b> em
metros (Double). Com o <b>PHP</b> “force” a tipagem e com estes dados calcule o
<b>IMC</b> – Índice de Massa Corporal. <br><b>Seguindo a seguinte fórmula: </b><br>
<b>IMC</b> = massa / (altura * altura )</p><hr>
<!-- Mostre o resultado em uma mensagem na próxima página. -->

<form action="processaForms.php?dir=processa&file=resp04Slide05" method="POST">    
    <span>
        <label for="altura">Altura: </label>
        <input type="text" name="altura" />
        (M)
    </span>

    <span>
        <label for="peso">Peso: </label>
        <input type="text" name="peso" />
        (Kg)
    </span>

    <input type="submit" name="enviar" />
</form>

<style>
    span {
        padding-left: 15px;
    }
</style>
