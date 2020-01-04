<?php
	# Function - Block of code that can repeatedly called

	/*
		Came Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/

	// Create Simple Function
	function simpleFunction(){
		echo "Hello World PHP!";
	}

	// Run Function
	// SimpleFunction();

	// Function With Param
	# Here We Use Also Default Value
	function sayHello($name  = 'World'){
		echo "Hello $name <br>";
	}

	// Here Overwrite
	#sayHello('Ali');
	#sayHello();

	// Return Value
	function addNumber($num1, $num2){
		return $num1 + $num2; 
	}

	#echo addNumber(4,5);

	// Pass By Value 

	$myNum = 10;
	function addFive($num){
		$num +=5;
	}

	// Pass By Reference
	function addTen(&$num){
		$num +=10;
	}

	echo addFive($myNum);

	echo "Value : $myNum<br>";

	echo addTen($myNum);

	echo "Value : $myNum<br>";
?>