<?php
	
	if(isset($_GET['name'])){
		$name = htmlentities($_GET['name']);
	}
/*
	if(isset($_POST['name'])){
		$name = htmlentities($_POST['name']);
		echo "$name";	
		print_r($_POST);
	}

	if(isset($_REQUEST['name'])){ // It work for both GET and POST request but not much useable  
		$name = htmlentities($_REQUEST['name']);
		echo "$name";	
		print_r($_REQUEST);
	}

	
	echo $_SERVER['QUERY_STRING']; // It return all input form value
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="email" name="email">
		</div>
		<input type="submit" name="submit">		
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Ali">Ali</a>
		</li>
		<li>
			<a href="get_post.php?name=Mohamed">Mohamed</a>
		</li>
	</ul>
	<h1><?php echo "{$name}'s Profile" ?></h1>
</body>
</html>