<?php
	function conexion(){

	$host = "host=viaduct.proxy.rlwy.net";
	$port = "port=38631";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=LzcyzzRGDFiuLWwTfuCXGizpSmFmlzqC";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>