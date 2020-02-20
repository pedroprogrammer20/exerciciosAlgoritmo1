<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/mySitePhp/assets/css/exercicio.css">
		<title>Exercícios PHP</title>
	</head>
	<body class="exercicio">
		<header class="cabecalho">
			<h1>Exercícios PHP</h1>
			<h2>Visualização do Exercício</h2>
		</header>

		<nav class="navegacao">
			<a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
			<a href="index.php" class="vermelho">Voltar</a>
		</nav>

		<main class="principal">
			<div class="conteudo">
				<?php 
					include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
				?>
			</div>
		</main>

		<footer class="rodape">
			UNISUL & ALUNOS © <?= date('Y'); ?>
		</footer>
	</body>
</html>