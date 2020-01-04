<?php
	# $_SERVER SUPERGLOBAL
	
	// Create Server Array
	$server = [
		'Host Server Name' => $_SERVER['SERVER_NAME'],
		'Server Software' => $_SERVER['SERVER_SOFTWARE'],
		'Document Root' => $_SERVER['DOCUMENT_ROOT'],
		'Current Page' => $_SERVER['PHP_SELF'],
		'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
	];

	//echo $server['Absolute Path'];
	
	// Create Client Array
	$client = [
		'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
		'Client IP' => $_SERVER['REMOTE_ADDR'],
		'Remote Port' => $_SERVER['REMOTE_PORT']
	];

	//print_r($client)
?>