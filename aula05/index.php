<?php



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Chamado Real</title>
  <style>
    .card-login {
      padding: 30px 0 0 0;
      margin: 0 auto;
      width: 350px;
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
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Senha">
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