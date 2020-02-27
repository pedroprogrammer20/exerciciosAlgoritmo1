<div class="titulo">Formulários HTML</div>

<p>Todo formulário em <b>HTML</b> é construído usando elementos dentro de um bloco <b>form</b></p>
<p>O bloco <b>form</b> define a <b>URL</b> que receberá o formulário e pode definir também o <b>método</b> usado.</p><hr>

<!-- 
    <form action=" URL para onde serão enviados os dados " method= " método HTTP (pode ser GET ou POST) ">
        
        AQUI VÃO OS ITENS DO FORMULÁRIO

    </form>

    * Formulários são similares a links.
    * Um par formulário-botão tem o mesmo efeito que um link criado com <a href></a> 

    * O link está no formulário e o evento no butão

    * O bloco form: 
        <form action="/dados/tutorial.html">

            <input type="submit" value="Tutorial">

        </form>
    
    * Gera a mesma requisição que: 
        <a href="/dados/tutorial.html">Tutorial</a>
 -->

<form action="processaForms.php?dir=processa&file=resp01Slide04" method="POST" name="formulario"> 
    <span>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" />
    </span>

    <span>
        <p>Disciplinas em que está matriculado: </p>
        <label for="">Algoritmos 1</label>
        <input type="checkbox" name="disciplina" value="Algoritmos 1" /><br>
    </span>

    <span>
        <label for="">Algoritmos 2</label>
        <input type="checkbox" name="disciplina" value="Algoritmos 2" /><br>
    </span>

    <span>
        <label for="">Programação web</label>
        <input type="checkbox" name="disciplina" value="Programação Web" />
    </span>    

    <span>
        <p>Sexo: </p>
        <label for="masculino">Masculino</label>
        <input type="radio" name="sexo" value="Masculino" /><br>

        <label for="feminino">Feminino</label>
        <input type="radio" name="sexo" value="Feminino" /><br>
    </span>

    <input type="submit" name="botão" value="enviar" />
</form>