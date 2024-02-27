<?php

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
}

$livro = new Livro('O Senhor dos Anéis', 'J. R. R. Tolkien');
echo $livro->getTitulo();
echo '<br>';
echo $livro->getAutor();
