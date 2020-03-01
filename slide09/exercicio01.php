<div class="titulo">Exercício 01</div>

<p>Escreva um algoritmo para calcular e mostrar a média
dos números entre 0 e 1000 usando while.</p><hr>

<?php 
  $media = 0.0;
  $soma = 0.0;
  $i = 0;
  while ($i<=1000) {
    $soma = $soma + $i;  
    $i++;
  }

  echo "Soma: " . $soma . "<br>";
  
  $media = $soma / 1000;

  echo "Média: " . $media . "<br>";
  
  echo "<br>";