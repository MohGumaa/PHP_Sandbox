<?php
	# substr()
	# Returns a portion of a string
	
	$output = substr('Hello', 1, 3);
	$out = substr('Hello', -2);
	//echo $out;

	# strlen()
	# Return the length

	$output = strlen("Hello world");
	//echo $output;

	# strpos
	# Finds the position of the first occurence of a sub string

	$output = strpos('haystack', 's');
	//echo $output;

	# strrpos
	# Finds the position of the last occurence of a sub string

	$output = strrpos('haystack', 's');
	//echo $output;

	# trim()
	# Strip whitespace we use for form

	$text = "Hello Wolrd                ";
	//var_dump($text);

	$text1= trim($text);
	//var_dump($text1);

	# strtoupper - strtolower - ucwords[capitalize every first letter for word]
	$text = ucwords('ali');
	//echo "$text";

	# str_replace 
	$text = 'Hello again';
	$output = str_replace("again", 'Everyone', $text);
	//echo "$output";

	/*
	# is_string 
	$val = 'Hello';
	$output = is_string($val);
	//echo "$output";

	$values = array(true, false, 'ali', 33,'33','');
	foreach ($values as $value) {
		# code...
		if(is_string($value)) {
			echo "{$value} is string<br>";
		}
	}
	*/

	# gzcompress() to compress a string and gzuncompress reverse
	$string = "lorem40Documentation

The following pages contain the official documentation for Sublime Text 3. The Sublime Text Unofficial Documentation is an excellent supplementary resource, with a huge amount of information not covered in the official documentation. Documentation

The following pages contain the official documentation for Sublime Text 3. The Sublime Text Unofficial Documentation is an excellent supplementary resource, with a huge amount of information not covered in the official documentation. ";
	$co= gzcompress($string);
	echo "$co";
?>