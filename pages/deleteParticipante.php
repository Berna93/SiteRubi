<?php 
  require_once('cursos/functions.php'); 
  if (isset($_GET['id']) and isset($_GET['idCurso'])){
    deleteParticipant($_GET['id'],$_GET['idCurso']);
  } else {
    die("ERRO: ID não definido.");
  }
?>