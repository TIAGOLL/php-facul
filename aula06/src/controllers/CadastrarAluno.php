<?php

require  "./src/models/Aluno.php";

class CadastrarAluno
{

  private $alunos;

  public function __construct()
  {
    $this->alunos = [
      new Aluno("Tiago", "tiagopitanga10", "Eng. Software"),
      new Aluno("Leonardo", "cavalotriste", "Eng. Software"),
    ];
  }

  public function cadastraAluno($nome, $matricula, $curso)
  {
    $this->alunos = [new Aluno($nome, $matricula, $curso), ...$this->alunos];
  }

  public function getAlunos()
  {
    return $this->alunos;
  }
}
