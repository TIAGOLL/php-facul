<?php

$string = "Hello World";
echo str_replace(["a", "e", "i", "o", "u"], "*", $string);


//Verificar se um número é primo

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
  echo "<br><br>$number É primo<br><br>";
} else {
  echo "<br>$number Não é primo<br><br>";
}

