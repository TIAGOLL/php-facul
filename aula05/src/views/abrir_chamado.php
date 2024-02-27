<?php

//nos proximos capitulos

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .card-abrir-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
  <title>Chamado Real</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark p-4">
    <a class="navbar-brand" href="#">
      <img src="../../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Chamado Real
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../logoff.php">SAIR</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form method="post" action="registra_chamado.php">
                  <div class="form-group">
                    <label>Título</label>
                    <input name="titulo" type="text" class="form-control" placeholder="Título">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria" class="form-control">
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                    </div>

                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>