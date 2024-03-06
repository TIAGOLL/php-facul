<?php



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Chamado Real</title>
  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark p-4">
    <a href="#" class="navbar-brand">
      <img src="logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
      Chamado Real
    </a>
  </nav>
  <div class="container">
    <div class="row">
      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="valida_login.php" method="post" class="">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>
              <?php
              if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger">
                  Usuário ou senha inválido(os)
                </div>
              <?php } ?>
              <button class="btn btn-lg btn-info btn-block" type="submit">
                Entrar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>