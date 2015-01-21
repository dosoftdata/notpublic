<?php

require_once dirname(dirname(__FILE__)).'/public/header.php';


if (isset($_GET['term'])){
	$return_arr = array();
/*
	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare('SELECT state_name FROM states, country WHERE country.name = :country_name AND states.country = country.country_id AND states.state_name LIKE :term');
	    $stmt->execute(array('term' => $_GET['term'].'%', 'country_name'=> $_GET['country_name']));
	    
	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['state_name'];
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}*/

    $sqlQeury = 'SELECT state_name FROM states, country WHERE country.name = :country_name AND states.country = country.country_id AND states.state_name LIKE :term';
    $params = array('term' => $_GET['term'].'%', 'country_name'=> $_GET['country_name']);
    $return_arr = DatabaseHandler::GetAll($sqlQeury, $params);
    
    
    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>