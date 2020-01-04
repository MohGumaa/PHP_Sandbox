<?php
	# Array- Variable that holds multiple values
	/* 
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	# Indexed And Syntax To Create
	$people = array('Ali', 'adam', 'Majaed');
	$id = array(22,45,232,454);
	$cars = ['Honda', 'Toyota','BMW'];
	$cars[3] = 'Chevy'; // Add If know position
	$cars[] = 'Ford';
	//echo $cars[4];
	//echo $people[2];

	//echo count($cars);  // Print number of element in array

	// print_r($cars);  // For Array to Show Whole Arrays 

	//var_dump($cars); // To Show DataType of Element 

	# Associative Arrays by define ke/value
	$people = array('Brand' => 35, 'Ali' => 32);
	$id= [22 => 'Omer', 43 => 'Jumaa'];

	//echo $people['Ali'];
	//echo $id[22];

	//$people['Adam'] = 41; // To add new element to array

	# Multi-Dimensional 
	$cars = array(
		array('Honda', 20,10),
		array('Toyota', 30,20),
		array('Ford', 23,12),
	);
	echo $cars[1][1];
?>