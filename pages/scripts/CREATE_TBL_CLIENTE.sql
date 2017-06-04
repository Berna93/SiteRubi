CREATE TABLE tbl_cliente (
  cliente_id int UNSIGNED NOT NULL,
  nome_var varchar(255) NOT NULL,
  cpf_var varchar(14) NOT NULL,
  rg_var varchar(14) NOT NULL,
  datanascimento_dt date NULL,
  endereco_var varchar(255) NOT NULL,
  email_var varchar(100) NOT NULL,
  telefone_var varchar(100) NOT NULL,
  astrologia_tni tinyint(1) NOT NULL,
  tarot_tni tinyint(1) NOT NULL,
  cabala_tni tinyint(1) NOT NULL,
  umbanda_tni tinyint(1) NOT NULL,
  hermetismo_tni tinyint(1) NOT NULL,
  reiki_tni tinyint(1) NOT NULL,
  data_criacao_dt date NOT NULL,
  data_modificacao_dt date NOT NULL
);

ALTER TABLE tbl_cliente
  ADD PRIMARY KEY (cliente_id);
  
ALTER TABLE tbl_cliente
  MODIFY cliente_id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;