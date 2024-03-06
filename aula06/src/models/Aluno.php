<?php


class Aluno
{
  public $nome;
  public $matricula;
  public $curso;

  public function __construct($nome, $matricula, $curso)
  {
    $this->nome = $nome;
    $this->matricula = $matricula;
    $this->curso = $curso;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function setMatricula($matricula)
  {
    $this->matricula = $matricula;
  }

  public function setCurso($curso)
  {
    $this->curso = $curso;
  }

  public function getNome()
  {
    return $this->nome;
  }
  public function getMatricula()
  {
    return $this->matricula;
  }
  public function getCurso()
  {
    return $this->curso;
  }
}
