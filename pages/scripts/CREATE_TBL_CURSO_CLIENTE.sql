CREATE TABLE tbl_curso_cliente (
  curso_cliente_id int UNSIGNED NOT NULL,
  curso_id int UNSIGNED NOT NULL,
  cliente_id int UNSIGNED NOT NULL,
  cliente_nome_var varchar(255) NOT NULL,
  situacao_pagamento_tni tinyint(1) NOT NULL,
  data_criacao_dt date NOT NULL,
  data_modificacao_dt date NOT NULL,
  PRIMARY KEY (curso_cliente_id),
  FOREIGN KEY (curso_id) REFERENCES tbl_curso(curso_id),
  FOREIGN KEY (cliente_id) REFERENCES tbl_cliente(cliente_id)
  
);

ALTER TABLE tbl_curso_cliente
  MODIFY curso_cliente_id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;