<?php

require_once('./config.php');

require_once(DBAPI);
$cursos = null;
$curso = null;
/**
 *  Listagem de cursos
 */
function index() {
	global $cursos;
	$cursos = find_all('cursos');
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
    //header('location: index.php');
    print_r($curso);
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
      header('location: index.php');
    } else {
      global $curso;
      $curso = find('cursos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $curso;
  $curso = remove('cursos', $id);
  header('location: index.php');
}