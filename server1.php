<?php

	// receive all data passed with POST
	//$data = $_POST;
	
	// if you're not sure whether the client it's using GET or POST
	// the use $_REQUEST	
	$data = $_REQUEST;
	// get data inside of user_text
	$user_text = $data["user_text"];

	//$user_text = $_POST["user_text"];
	// do something with it like uppercasing
	$response = strtoupper($user_text);
	// send it back to the client
	echo $response;


?>
