<?php

// exercicio 1
$string = "Hello World";
echo str_replace(["a", "e", "i", "o", "u"], "*", $string);

echo "<br><br>";

// exercicio 2
function isPrimo($n)
{
  for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) {
      return false;
    }
  }
  return true;
}

$number = 7;

if (isPrimo($number)) {
  echo "$number É primo";
} else {
  echo "$number Não é primo";
}

echo "<br><br>";

// exercicio 3
$string = "Hello World";
$invertida = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
  $invertida .= $string[$i];
}

echo $invertida;

echo "<br><br>";

// exercicio 4
function number($string)
{
  if ($string == 0) {
    echo "O número é igual a zero";
  } else if ($string > 0) {
    echo "O número é positivo";
  } else if ($string < 0) {
    echo "O número é negativo";
  }
}
number(0);

echo "<br><br>";
// exercicio 5
function word_count($string)
{
  $words = explode(" ", $string);
  echo "Quantidade de palavras = " . count($words);
  echo "<br>";
  echo "Palavras = ";
  foreach ($words as $word) {
    echo $word;
  }
}
word_count("Hello World");

echo "<br><br>";

// exercicio 6
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

echo "<br><br>";


// exercicio 7
function multiple_of_3($number)
{
  for ($i = 0; $i != $number; $i++) {
    echo $i % 3 == 0 ? "" : "$i";
  }
}
multiple_of_3(40);

echo "<br><br>";


// exercicio 8
function remove_spaces($string)
{
  $string = str_replace(" ", "", $string);
  echo $string;
}
remove_spaces("Hello Word");

echo "<br><br>";


// exercicio 9
function fibonacci($n)
{
  $fibonacci = [0, 1];

  for ($i = 2; $i < $n; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
  }

  return $fibonacci;
}

$fibonacciNumbers = fibonacci(10);

foreach ($fibonacciNumbers as $number) {
  echo $number . " ";
}
fibonacci(10);

echo "<br><br>";


// exercicio 10
function isPangrama($string)
{
  $string = strtolower($string);
  $alfabeto = "abcdefghijklmnopqrstuvwxyz";

  for ($i = 0; $i < strlen($alfabeto); $i++) {
    if (strpos($string, $alfabeto[$i]) === false) {
      echo $alfabeto[$i];
      return false;
    }
  }

  echo "É pangrama";
}
isPangrama("grave e cabisbaixo, o filho justo zelava pela querida mae doentekwy");
