<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($name) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				# Failed
				$msg = 'Please use a vaild email';
				$msgClass = 'alert-danger';
			} else {
				# Passed
				// Send It To Email
				$toEmail = 'gomaam14@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
						<h4>Name</h4><p>'.$name.'</p>
						<h4>Email</h4><p>'.$email.'</p>
						<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$header = "MIME-Version: 1.0" ."\r\n";
				$header .= "Content-Type:text/html;charset=UTF-8"."\r\n";

				// Addition Headers
				$header .= "From: ".$name. "<".$email.">"."\r\n";

				if(mail($toEmail, $subject, $body, $header)){
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					$msg = 'Your email has NOT been sent';
					$msgClass = 'alert-danger';
				}


			}

		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
      <div class="container">
      	<div class="navbar-header">
      		<a href="index.php" class="navbar-brand">My Website</a>
      	</div>
      </div>
    </nav>
    <div class="container">
    	<?php if ($msg != ''):?> 
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>
    	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    		<div class="form-group">
    			<label>Name</label>
    			<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
    		</div>
    		<div class="form-group">
    			<label>Email</label>
    			<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
    		</div>
    		<div class="form-group">
    			<label>Message</label>
    			<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
    		</div>
    		<br>
    		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
    	</form>
    	
    </div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>