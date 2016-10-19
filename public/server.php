<?php

	// receive all data passed with GET
	$data = $_POST;
	// get data inside of user_text
	$user_text = $data["user_text"];
	// do something with it like uppercasing
	$response = strtoupper($user_text);
	// send it back to the client
	echo $response;
	print_r($response);


?>


