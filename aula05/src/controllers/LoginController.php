<?php

require_once "./src/models/User.php";

class LoginController
{
  private $users;

  public function __construct()
  {
    $this->users = [
      new User(1, "adm@teste.com.br", "123098", 1),
      new User(2, "tiago@teste.com.br", "123098", 1),
      new User(3, "leonardo@teste.com.br", "123098", 2),
      new User(4, "bruno@teste.com.br", "123098", 2),
      new User(5, "luiz@teste.com.br", "123098", 2),
    ];
  }
  public function autenticar($email, $password)
  {
    foreach ($this->users as $user) {
      if ($user->email == $email && $user->password == $password) {
        $_SESSION["autenticar"] = "SIM";
        $_SESSION["id"] = $user->id;
        $_SESSION["profile_id"] = $user->profile_id;
        header("Location: ../view/home.php");
        die();
      }
    }
    $_SESSION["autenticar"] = "NAO";
    header("Location: index.php?login=erro");
    exit;
  }
}
