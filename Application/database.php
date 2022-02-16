<?php
	$server = "signtoall.database.windows.net";
	$username = "ncortes";
	$password = "SigntoAll_";
	$database = "Sign_to_all";

	try {
		$conn= new PDO("mysql:host=$server; dbname=$database;", $username, $password);

	} catch (Exception $e) {
		die("Conexion Fallida: " . $e->getMessage());
	}
?>