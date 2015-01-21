<?php

require_once dirname(dirname(__FILE__)).'/public/header.php';


if (isset($_GET['term'])){
	$return_arr = array();
/*
	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('SELECT name FROM freighw5_freightmeta_db1.country country WHERE name LIKE :term');
	    $stmt->execute(array('term' => $_GET['term'].'%'));
	    
	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['name'];
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}*/

    $sqlQeury = 'SELECT name FROM freighw5_freightmeta_db1.country country WHERE name LIKE :term';
    $params = array('term' => $_GET['term'].'%');
    $return_arr = DatabaseHandler::GetAll($sqlQeury, $params);
    
    
    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}

?>