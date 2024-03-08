<?php

class Conexao
{

  private $host = "localhost";
  private $db_name = "todo_db";
  private $user = "root";
  private $password = "";

  public function conectar()
  {
    try {
      $conexao = new PDO(
        "mysql:host=$this->host;dbname=$this->db_name",
        "$this->user",
        "$this->password"
      );
      return $conexao;
    } catch (PDOException $error) {
      echo "<p>" . $error->getMessage() . "</p>";
    }
  }
}
