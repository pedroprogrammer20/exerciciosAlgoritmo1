<div class="titulo">Formulário HTML</div>

<form action="processaForms.php?dir=processa&file=resp02Slide04" method="POST">

    <span>
        <label for="cidadeOrigem">Em qual cidade você nasceu?</label>

        <select name="cidadeOrigem" id="cidadeOrigem">
            <option value="default">Selecionar</option>
            <option value="SC">Florianópolis</option>
            <option value="GO">Goiânia</option>
            <option value="SP">São Paulo</option>
        </select>
    </span>
    
    <br><br>
    
    <span>
        <label for="cidadeAtual">Em qual cidade você mora?</label>

        <select name="cidadeAtual" id="cidadeAtual">
            <option value="default">Selecionar</option>
            <option value="SC">Florianópolis</option>
            <option value="GO">Goiânia</option>
            <option value="SP">São Paulo</option>
        </select>
    </span>
    
    <br><br>

    <span>
        <label for="descricao">Descrição: </label>
        <br>
        <textarea name="descricao" cols="50" rows="4" id="descricao"></textarea>
    </span>
    
    <br><br>

    <span>
        <label for="campoOculto">Campo Oculto: </label>
    
        <input type="hidden" id="campoOculto" name="campoOculto" value="true">
    </span>

    <br><br>

    <span>
        <label for="senha">Senha: </label>

        <input type="password" id="senha" name="senha" />
    </span>

    <br>

    <input type="submit" />
</form>