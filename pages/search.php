<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'test';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM clientes WHERE nome LIKE '%".$searchTerm."%' ORDER BY nome ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nome'];
}
//return json data
echo json_encode($data);
?>