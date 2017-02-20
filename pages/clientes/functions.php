<?php

require_once('./config.php');

require_once(DBAPI);
$customers = null;
$customer = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('clientes');
}

/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['customer'])) {

    if($_POST['customer'])
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['dataCriacao'] = $today->format("Y-m-d H:i:s");
    
    save('clientes', $customer);
    header('location: index.php');
  
  }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('clientes', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('clientes', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $customer;
  $customer = remove('clientes', $id);
  header('location: cadastroCliente.php');
}