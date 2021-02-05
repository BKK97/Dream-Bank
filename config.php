<?php
//replace below params with your db params 
        $servername = "sql12.freesqldatabase.com";
        $username = "sql12391013";
        $password = "BQTBAR5JKT";
        $database = "sql12391013";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
