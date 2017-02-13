CREATE TABLE clientes (
  id int(11) NOT NULL,
  nome varchar(255) NOT NULL,
  cpf varchar(14) NOT NULL,
  rg varchar(14) NOT NULL,
  datanascimento date NULL,
  endereco varchar(255) NOT NULL,
  email varchar(100) NOT NULL,
  telefone varchar(100) NOT NULL,
  astrologia tinyint(1) NOT NULL,
  tarot tinyint(1) NOT NULL,
  cabala tinyint(1) NOT NULL,
  umbanda tinyint(1) NOT NULL,
  hermetismo tinyint(1) NOT NULL,
  reiki tinyint(1) NOT NULL,
  datacriacao date NOT NULL,
  modified date NOT NULL
);

ALTER TABLE clientes
  ADD PRIMARY KEY (id);
  
ALTER TABLE clientes
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;