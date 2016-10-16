<?php

	// receive all data passed with POST
	//$data = $_POST;
	
	// if you're not sure whether the client it's using GET or POST
	// then use $_REQUEST	
	$data = $_REQUEST;
	
	//$user_text = $_REQUEST["user_text"];
	// get data inside of user_text
	$user_text = $data["user_text"];

	// do something with it like uppercasing
	$response = strtoupper($user_text);
	// send it back to the client
	// i get array and response back on console and network tab
	//print_r($data);
	echo $response;

?>
