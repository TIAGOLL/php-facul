<?php


require "./src/controllers/CadastrarAluno.php";

$alunos = new CadastrarAluno();
$alunos->getAlunos();

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

    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
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
            Cadastro de alunos
          </div>
          <div class="card-body">
            <form action="validar.php" method="post">
              <div class="form-group">
                <input name="nome" type="text" class="form-control" placeholder="Nome">
              </div>
              <div class="form-group">
                <input name="matricula" type="text" class="form-control" placeholder="Matricula">
              </div>
              <div class="form-group">
                <input name="curso" type="text" class="form-control" placeholder="Curso">
              </div>

              <button class="btn btn-lg btn-info btn-block" type="submit">
                Cadastrar
              </button>

            </form>
          </div>
        </div>

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>

            <div class="card-body">

              <?php foreach ($alunos as $aluno) { ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                    <p class="card-text"><?= $chamado_dados[3] ?></p>

                  </div>
                </div>

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>