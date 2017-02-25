<?php

require_once('./config.php');

require_once(DBAPI);
$cursos = null;
$curso = null;
$cursosParticipantes = null;
$cliente = null;
$reload = null;

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

    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $curso = $_POST['curso'];
    $curso['modified'] = $curso['dataCriacao'] = $today->format("Y-m-d H:i:s");
    
    if (!empty($_POST['data'])) {
       $data = $_POST['data'];
       $curso['data'] = date('Y-m-d', strtotime($data));       
    }

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
 *  Atualizacao/Edicao de curso
 */
function editParticipant() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  $qtdePreenchidas = 0;


  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['curso'])) {

       if (!empty($_POST['participante'])) {

            $curso = $_POST['curso'];
           
            $curso['modified'] = $now->format("Y-m-d H:i:s");


            update('cursos', $id, $curso);

            if($_POST['participante'])

              $data = $_POST['participante'];
              $columns = null;
            $values = null;
 
            foreach ($data as $key => $value) {
              $columns .= trim($key, "'") . ",";
              $values .= "'$value',";
            }

            $columns = rtrim($columns, ',');
            $values = rtrim($values, ',');
            
            $today = 
              date_create('now', new DateTimeZone('America/Sao_Paulo'));
            
            $participante = find_all_byelement('clientes', 'nome', $values);
            $participante['modified'] = $participante['dataCriacao'] = $today->format("Y-m-d H:i:s");

            $participanteCurso['idCurso'] = $id;
            $participanteCurso['idCliente'] = $participante['id'];
            $participanteCurso['nomeCliente'] = $participante['nome'];
            $participanteCurso['situacaoPagamento'] = 0;
            $participanteCurso['dataCriacao'] = $today->format("Y-m-d H:i:s");
            $participanteCurso['modified'] = $today->format("Y-m-d H:i:s");

            save('cursos_participantes', $participanteCurso);
           header('location: cursoParticipantes.php?id=' . $id);
           
      
      }

      //header('location: edicaoCurso.php?id=' . $id);
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

/**
 *  Exclusão de um Cliente
 */
function deleteParticipant($id = null, $idCurso = null) {
  global $participante;

  $participante = remove('cursos_participantes', $id); 

  header('location: cursoParticipantes.php?id=' . $idCurso);
}


function clearMessages() {
   $_SESSION['message'] = "";
   $_SESSION['type'] = "";
}

