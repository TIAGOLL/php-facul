<?php


//CRUD
class TarefaService
{

	private $conexao;
	private $tarefa;

	public function __construct(Conexao $conexao, Tarefa $tarefa)
	{
		$this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
	}

	public function inserir()
	{
		//create
		$query = 'insert into tb_tarefas(tarefa,categoria,prioridade,prazo)values(?,?,?,?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute([$this->tarefa->__get('tarefa'),$this->tarefa->__get('categoria'),$this->tarefa->__get('prioridade'),$this->tarefa->__get('prazo')]);
	}

	public function recuperar($categoria = '', $prioridade = '', $date = '')
	{
		//read
		$query = '
			select 
				*
			from 
				tb_tarefas as t
				left join tb_status as s on (t.id_status = s.id)
				where categoria like "%"?"%" and prioridade like "%"?"%" ORDER BY data_cadastrado ' . $date . '
		';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute([$categoria, $prioridade]);
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar()
	{ //update

		$query = "update tb_tarefas set tarefa = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->tarefa->__get('tarefa'));
		$stmt->bindValue(2, $this->tarefa->__get('id'));
		return $stmt->execute();
	}

	public function remover()
	{ //delete

		$query = 'delete from tb_tarefas where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		$stmt->execute();
	}

	public function marcarRealizada()
	{
		//update

		$query = "update tb_tarefas set id_status = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->tarefa->__get('id_status'));
		$stmt->bindValue(2, $this->tarefa->__get('id'));
		return $stmt->execute();
	}

	public function recuperarTarefasPendentes()
	{
		$query = '
			select 
				t.id, s.status, t.tarefa 
			from 
				tb_tarefas as t
				left join tb_status as s on (t.id_status = s.id)
			where
				t.id_status = :id_status
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}
