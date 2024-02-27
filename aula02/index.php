<?php
// Inverter uma string sem usar a função strrev

$string = "Hello World";
$invertida = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
  $invertida .= $string[$i];
}

echo $invertida;

// Crie uma função que verifiqe se uma plavra é um palíndromo

function isPalindromo($palavra)
{
  $palavra = strtolower($palavra);
  $invertida = "";

  for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
    $invertida .= $palavra[$i];
  }

  if ($palavra == $invertida) {
    return true;
  } else {
    return false;
  }
}

echo isPalindromo("arara") ? "É palíndromo" : "Não é palíndromo";
