<?php

	// receive all data passed with GET
	$data = $_GET;
	// get data inside of user_text
	$user_text = $_GET["user_text"];
	// do something with it like uppercasing
	$response = strtoupper($user_text);
	// send it back to the client
	echo $response;


?>


