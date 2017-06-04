CREATE TABLE tbl_usuarios (
  usuarios_id int UNSIGNED NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(10) NOT NULL,
  tipoUsuario varchar(15) NOT NULL
  
);

ALTER TABLE tbl_usuarios
  MODIFY usuarios_id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;