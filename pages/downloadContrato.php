<?php
require_once('download/functions.php');
require_once('clientes/functions.php');
index();

if ($customers) {
	download_send_headers("data_export_" . date("Y-m-d") . ".csv");
	echo array2csv($customers);
	die();
} else {

}

?>