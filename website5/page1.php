<?php
	if(isset($_POST['submit'])){
	   $name = htmlentities($_POST['name']);

       setcookie('name', $name, time()+3600);
       // 1 Hour
       header('Location: page2.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    		<div class="form-group">
    			<label>Name</label>
    			<input type="text" name="name" class="form-control" placeholder="Enter Name">
    		</div>
    		<br>
    		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
    	</form>
</body>
</html>