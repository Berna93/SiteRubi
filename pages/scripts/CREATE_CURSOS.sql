CREATE TABLE cursos (
  id int(11) NOT NULL,
  nome varchar(255) NOT NULL,
  professor varchar(14) NOT NULL,
  qtdeVagas int NOT NULL,
  valor varchar(15) NULL,
  data date NOT NULL,
  contrato blob NOT NULL,
  datacriacao date NOT NULL,
  modified date NOT NULL
);

ALTER TABLE cursos
  ADD PRIMARY KEY (id);
  
ALTER TABLE cursos
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;