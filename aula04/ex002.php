<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

class Livro
{
  private $titulo;
  private $autor;

  public function __construct($titulo, $autor)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function getAutor()
  {
    return $this->autor;
  }

  public function setTitulo($titulo)
  {
    return $this->titulo = $titulo;
  }

  public function setAutor($autor)
  {
    return $this->autor = $autor;
  }
}

$livro = new Livro('O Senhor dos Anéis', 'J. R. R. Tolkien');
echo $livro->getTitulo();
echo '<br>';
echo $livro->getAutor();
echo '<br>';
echo $livro->setTitulo("Titulo qualquer");
echo '<br>';
echo $livro->setAutor("Tiago");
