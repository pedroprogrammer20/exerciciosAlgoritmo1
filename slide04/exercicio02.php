<div class="titulo">Formulário HTML</div>

<form action="processaForms.php?dir=processa&file=resp02Slide04" method="POST">
    <label for="cidadeOrigem">Em qual cidade você nasceu?</label>

    <br>

    <select name="cidadeOrigem" id="cidadeOrigem">
        <option value="default">Selecionar</option>
        <option value="SC">Florianópolis</option>
        <option value="GO">Goiânia</option>
        <option value="SP">São Paulo</option>
    </select>

    <br><br>
    
    <label for="cidadeAtual">Em qual cidade você mora?</label>

    <br>

    <select name="cidadeAtual" id="cidadeAtual">
        <option value="default">Selecionar</option>
        <option value="SC">Florianópolis</option>
        <option value="GO">Goiânia</option>
        <option value="SP">São Paulo</option>
    </select>

    <br><br>

    <label for="descricao">Descrição: </label>

    <br>

    <textarea name="descricao" cols="50" rows="4" id="descricao"></textarea>

    <br><br>

    <label for="campoOculto">Campo Oculto: </label>

    <br>

    <input type="hidden" id="campoOculto" name="campoOculto" value="true">

    <br><br>

    <label for="senha">Senha: </label>

    <br>

    <input type="password" id="senha" name="senha" />

    <br><br>

    <input type="submit" />
</form>