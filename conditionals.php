<?php
	# Conditionals
	/*
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	*/

	/*
		Logical Operators
		and &&
		or 	||
		Xor
	*/

	$num = 6;
	if($num > 4 AND $num < 10){ // we can use &&
		#echo "$num passed";
	}

	$color = 'Blue';

	switch ($color) {
		case 'red':
			# code...
			echo "Your Favorite color is Red";
			break;
		case 'yellow':
			# code...
			echo "Your Favorite color is Yellow";
			break;
		case 'Blue':
			# code...
			echo "Your Favorite color is Blue";
			break;
		
		default:
			# code...

			echo "Your Favorite color is White";
			break;
	}
?>