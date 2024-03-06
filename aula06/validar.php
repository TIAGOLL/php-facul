<?php
require "./src/controllers/CadastrarAluno.php";
session_start();

$cadastra = new CadastrarAluno();
$cadastra->cadastraAluno($_POST["nome"], $_POST["matricula"], $_POST["curso"]);

$alunos = $cadastra->getAlunos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Cadastros</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Chamado Real</title>
  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
      margin-bottom: 20px;
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
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de alunos
            </div>

            <div class="card-body">

              <?php foreach ($alunos as $aluno) { ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">Aluno: <?= $aluno->nome ?></h5>
                    <h5 class="card-title">Matricula: <?= $aluno->matricula ?></h5>
                    <h5 class="card-title">Curso: <?= $aluno->curso ?></h5>
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