<?php
	// Check for Posted data
/*
	if (filter_has_var(INPUT_POST, 'data')) {
		# code...	
		echo "Data Found";
	} else {
		echo "No Data";
	}


	if (filter_has_var(INPUT_POST, 'data')) {
		$email = $_POST['data'];

		// Remove illegal char
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo "$email <br>";

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "Email is valid";
		} else {
			echo "Email is NOT valid";
		}
	} 

	#FILTER_VALIDATE_BOOLEAN
	#FILTER_VALIDATE_EMAIL
	#FILTER_VALIDATE_FLOAT
	#FILTER_VALIDATE_INT
	#FILTER_VALIDATE_IP
	#FILTER_VALIDATE_REGEXP
	#FILTER_VALIDATE_URL

	#FILTER_SANITIZE_EMAIL
	#FILTER_SANITIZE_ENCODED
	#FILTER_SANITIZE_NUMBER_FLOAT
	#FILTER_SANITIZE_NUMBER_INT
	#FILTER_SANITIZE_SPECIAL_CHARS
	#FILTER_SANITIZE_STRING
	#FILTER_SANITIZE_URL

	$var = 23;
	if(filter_var($var, FILTER_VALIDATE_INT)){
		echo "$var is a Number";
	} else {
		echo "$var is NOT a Number";
	}
*/
	$number = '434sfasf323asf323sf2332';
	var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
?>	

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="text" name="data">
	<button type="submit">Submit</button>
</form>