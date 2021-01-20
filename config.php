<?php
//replace below params with your db params 
        $servername = "sql12.freesqldatabase.com";
        $username = "sql12387302";
        $password = "KiRR24g9PH";
        $database = "sql12387302";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
