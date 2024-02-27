<?php
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora
{
  public static function soma($num1, $num2)
  {
    return $num1 + $num2;
  }
}

echo Calculadora::soma(1, 2);
