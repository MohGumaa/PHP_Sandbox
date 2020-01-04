<?php
	# Loops - Execute code set number of times

	/*
		For 
		While
		Do..While
		Foreach
	*/

	# For Loop
	# @params - init, condition, increment

	/*
	for($i = 0; $i < 10; $i++){
		echo 'Number: '.$i;
		echo "<br>";
	}
	*/

	# While Loop (we use if we dont know number of repeat)
	# @params - condition 
	/*
	$i = 0;
	while ($i < 10) {
		# code...
		echo "Numers: $i <br>";
		$i++;
	}
	 echo "Do..While<br>";
	# Do..While
	# @params - condition
	$i = 11;
	do{
		echo "Number: $i <br>";
		$i++;
	}
	while ($i < 20);
	*/

	# Foreach Loop - For Arrays
	$people = ['Ali','Omer','Adam'];

	foreach ($people as $person) {
		# code..
		echo "Name is : $person <br>";
	}

	$people_detail = ['Ali' => 22,'Omer' => 12,'Adam' => 55];

	foreach ($people_detail as $person => $age) {
		# code...
		echo "Name is : $person <br> and Age $age";	
	}
?>