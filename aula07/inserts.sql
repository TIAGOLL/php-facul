select * from tb_tarefas;
select * from tb_status;

select * from tb_tarefas as t left join tb_status as s on (t.id_status = s.id) where categoria like '%Diarias%' and prioridade like '%Urgente%' ORDER BY data_cadastrado desc;


insert into tb_tarefas (id, id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, 1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 1 month));
insert into tb_tarefas (id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 2 month));
insert into tb_tarefas (id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 3 month));
insert into tb_tarefas (id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 0 month));
insert into tb_tarefas (id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 2 month));
insert into tb_tarefas (id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 1 month));
insert into tb_tarefas (id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (1, "Fazer bolo", now(), "Diarias", "Urgente", date_add(now(), interval 3 month));
insert into tb_tarefas (id, id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (2, 2, "Fazer arroz", now(), "Estudo", "Normal", date_add(now(), interval 4 month));
insert into tb_tarefas (id, id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (3, 1, "Fazer feijão", now(), "Eventuais", "Normal", date_add(now(), interval 1 month));
insert into tb_tarefas (id, id_status, tarefa, data_cadastrado, categoria, prioridade, prazo) values (4, 1, "Fazer batata", now(), "Estudo", "Urgente", date_add(now(), interval 2 month));

