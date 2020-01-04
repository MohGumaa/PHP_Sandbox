<?php
	session_start(); 

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h5>Thank you <?php echo "$name"; ?>, You have subscribed with the email <?php echo "$email"; ?></h5>
    <a href="page3.php">Go to page 3</a>
</body>
</html>