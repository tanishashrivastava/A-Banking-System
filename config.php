<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "GreatState_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to error --> ".mysqli_connect_error());
	}

?>