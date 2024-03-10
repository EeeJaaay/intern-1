<<<<<<< HEAD
<?php  

	function dataLink(){

		date_default_timezone_set('Asia/Manila');
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "intern_builders_core";

		// Create connection
		$dbConnection = new PDO('mysql:dbname='.$dbname.';host='.$servername.';charset=utf8mb4', $username, $password);

		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $dbConnection;
	}

=======
<?php  

	function dataLink(){

		date_default_timezone_set('Asia/Manila');
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "intern_builders_core";

		// Create connection
		$dbConnection = new PDO('mysql:dbname='.$dbname.';host='.$servername.';charset=utf8mb4', $username, $password);

		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $dbConnection;
	}

>>>>>>> 50738457b13b2043e6e07348bcdb0c2b7e3976f7
?>