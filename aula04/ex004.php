<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

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

  public function setIdade($idade)
  {
    return $this->idade = $idade;
  }

  public function setNome($nome)
  {
    return $this->nome = $nome;
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

$cachorro->setIdade(5);
$cachorro->setNome("Bartolomeu");

echo "Nome: " . $cachorro->getNome() . "<br>Idade: " . $cachorro->getIdade();
