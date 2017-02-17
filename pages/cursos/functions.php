<?php

require_once('./config.php');

require_once(DBAPI);
$cursos = null;
$curso = null;
$cursosParticipantes = null;
/**
 *  Listagem de cursos
 */
function index() {
	global $cursos;
	$cursos = find_all('cursos');
}

function searchCourseStudents($idCurso = null) {
  global $cursosParticipantes;
  $cursosParticipantes = find_all_byelement('cursos_participantes', 'idCurso', $idCurso);
}


/**
 *  Cadastro de cursos
 */
function add() {
  if (!empty($_POST['curso'])) {

    if($_POST['curso'])
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $curso = $_POST['curso'];
    $curso['modified'] = $curso['dataCriacao'] = $today->format("Y-m-d H:i:s");
    
    save('cursos', $curso);
    header('location: cadastroCurso.php');
  }
}

/**
 *	Atualizacao/Edicao de curso
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['curso'])) {
      $curso = $_POST['curso'];
      $curso['modified'] = $now->format("Y-m-d H:i:s");
      update('cursos', $id, $curso);
      header('location: edicaoCurso.php?id=' . $id);
    } else {
      global $curso;
      $curso = find('cursos', $id);
    } 
  } else {
     header('location: edicaoCurso.php?id=' . $id);
  }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $curso;
  $curso = remove('cursos', $id);
  header('location: edicaoCurso.php?id=' . $id);
}