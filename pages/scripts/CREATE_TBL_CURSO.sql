CREATE TABLE tbl_curso (
  curso_id int UNSIGNED NOT NULL,
  nome_var varchar(255) NOT NULL,
  professor_var varchar(14) NOT NULL,
  qtdeVagas_int int NOT NULL,
  qtdePreenchidas_int int NOT NULL,
  valor_var varchar(15) NULL,
  data_evento_dt date NOT NULL,
  horario_evento_var varchar(10) NOT NULL,
  contrato_var varchar(5000) NOT NULL,
  status_var varchar(10) NOT NULL DEFAULT 'Aberto',
  data_criacao_dt date NOT NULL,
  data_modificacao_dt date NOT NULL
);

ALTER TABLE tbl_curso
  ADD PRIMARY KEY (curso_id);
  
ALTER TABLE tbl_curso
  MODIFY curso_id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;