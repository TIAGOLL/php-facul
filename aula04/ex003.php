<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal
{
  protected $nome;
  protected $idade;

  public function __construct($idade, $nome)
  {
    $this->idade = $idade;
    $this->nome = $nome;
  }

  public function getIdade()
  {
    return $this->idade;
  }
  public function getNome()
  {
    return $this->nome;
  }
}

class Cachorro extends Animal
{
  public function getIdade()
  {
    return $this->idade  * 7;
  }
}

$cachorro = new Cachorro(3, "Romeu");

echo "Nome: " . $cachorro->getNome() . "<br>Idade: " . $cachorro->getIdade();
