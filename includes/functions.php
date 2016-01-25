<?php
	require_once('config.php');

	function openDB(){
		return $dbh = new PDO('mysql:host=localhost;dbname=kylefoul_crm', 'root', '');
	}

	function get_users(){
		
		try {
			$dbh = openDB();
				foreach($dbh->query('SELECT * from users') as $row) {
        			print_r($row);
    			}



			$dbh = null;
		} catch (Exception $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}
	}



	function userRegister(){
		$dbh = openDB();

		$stmt = $dbh->prepare("INSERT INTO users (first_name, last_name) VALUES (:first_name, :last_name)");
		$stmt->bindParam(':first_name', $first_name);
		$stmt->bindParam(':last_name', $last_name);
		$stmt->bindParam(':username',$username);
		$stmt->bindParam(':email',$email);
		

		// insert one row
		$first_name = 'kyle';
		$last_name = 'foulks';
		$stmt->execute();



		$dbh = null;
	}


?>