<?php

$acao = 'recuperar';
require 'tarefa_controller.php';

/*
	echo '<pre>';
	print_r($tarefas);
	echo '</pre>';
	*/

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Lista Tarefas</title>

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<script>
		function editar(id, txt_tarefa) {

			//criar um form de edição
			let form = document.createElement('form')
			form.action = 'tarefa_controller.php?acao=atualizar'
			form.method = 'post'
			form.className = 'row'

			//criar um input para entrada do texto
			let inputTarefa = document.createElement('input')
			inputTarefa.type = 'text'
			inputTarefa.name = 'tarefa'
			inputTarefa.className = 'col-9 form-control'
			inputTarefa.value = txt_tarefa

			//criar um input hidden para guardar o id da tarefa
			let inputId = document.createElement('input')
			inputId.type = 'hidden'
			inputId.name = 'id'
			inputId.value = id

			//criar um button para envio do form
			let button = document.createElement('button')
			button.type = 'submit'
			button.className = 'col-3 btn btn-info'
			button.innerHTML = 'Atualizar'

			//incluir inputTarefa no form
			form.appendChild(inputTarefa)

			//incluir inputId no form
			form.appendChild(inputId)

			//incluir button no form
			form.appendChild(button)

			//teste
			//console.log(form)

			//selecionar a div tarefa
			let tarefa = document.getElementById('tarefa_' + id)

			//limpar o texto da tarefa para inclusão do form
			tarefa.innerHTML = ''

			//incluir form na página
			tarefa.insertBefore(form, tarefa[0])

		}

		function remover(id) {
			location.href = 'todas_tarefas.php?acao=remover&id=' + id;
		}

		function marcarRealizada(id) {
			location.href = 'todas_tarefas.php?acao=marcarRealizada&id=' + id;
		}
	</script>
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				App Lista Tarefas
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-sm-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-sm-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Todas tarefas</h4>
							<hr />

							<div>
								<form action="" class="w-full flex flex-row justify-center">

									<label for="date">Data</label>
									<select name="date">
										<option value="asc">Crescente</option>
										<option value="desc">Decrescente</option>
									</select>

									<label for="categoria">Categoria</label>
									<select name="categoria">
										<option value="">Todas</option>
										<option value="estudo">Estudo</option>
										<option value="diarias">Diarias</option>
										<option value="eventuais">Eventuais</option>
									</select>

									<label for="prioridade">Prioridade</label>
									<select name="prioridade">
										<option value="">Todas</option>
										<option value="urgente">Urgente</option>
										<option value="normal">Normal</option>
									</select>
									<button type="submit">Pesquisa</button>
								</form>
							</div>

							<?php foreach ($tarefas as $indice => $tarefa) { ?>
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-7" id="tarefa_<?= $tarefa->id ?>">
										<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
									</div>
									<div class="col-sm-5 mt-2 d-flex justify-content-between">
										<?php $date1 = new DateTimeImmutable($tarefa->prazo); ?>
										<?= $date1->format('d/m/Y h:m') ?>

										<?php $date2 = new DateTimeImmutable($tarefa->data_cadastrado); ?>
										<?= $date2->format('d/m/Y h:m') ?>

										<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>

										<?php if ($tarefa->status == 'pendente') { ?>
											<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i>
											<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
										<?php } ?>
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