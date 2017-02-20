CREATE TABLE cursos_participantes (
  id int NOT NULL,
  idCurso int NOT NULL,
  idCliente int NOT NULL,
  nomeCliente varchar(255) NOT NULL,
  situacaoPagamento tinyint(1) NOT NULL,
  datacriacao date NOT NULL,
  modified date NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (idCurso) REFERENCES cursos(Id),
  FOREIGN KEY (idCliente) REFERENCES clientes(Id)
);

ALTER TABLE cursos_participantes
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;