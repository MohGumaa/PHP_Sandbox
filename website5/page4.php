<?php

	$user = ['name' => 'Mohamed', 'age' =>25];

	// Prepare data to store
	$user = serialize($user);

	setcookie('user', $user, time() + (86400 * 30));

	$user = unserialize($_COOKIE['user']);
	echo $user['name'];