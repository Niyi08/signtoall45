<?php
	$server = "signtoall.database.windows.net";
	$username = "ncortes";
	$password = "SigntoAll_";
	$database = "Sign_to_all";
	$connectionInfo = array( "Database"=>"Sign_to_all", "UID"=>"ncortes", "PWD"=>"SigntoAll_");

	try {
		$conn = sqlsrv_connect( $server, $connectionInfo);


	} catch (Exception $e) {
		die("Conexion Fallida: " . $e->getMessage());
	}
?>