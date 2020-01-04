<?php 
	// Update cookie
	setcookie('name', 'Ali', time()+(86400) * 30);

	// Delete Cookie
	#setcookie('name', 'Ali', time() -3600);

	if(count($_COOKIE) > 0) {
		echo 'The are '.count($_COOKIE). ' cookies saved<br>';
	} else {
		echo "There are no cookies";
	}

	if(isset($_COOKIE['name'])){
		echo 'User '. $_COOKIE['name'] .' is set';
	} else {
		echo "User is Not Set";
	}