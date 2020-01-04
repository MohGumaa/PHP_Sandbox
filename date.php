<?php
	#echo date('d'); // Day
	/* 
		# Params for date
		d - Day
		m - Month
		y - Year
		l - Day of the week
	*/
	#echo date('Y/m/d');
	#echo date('m-d-Y');

	/*
		h - Hour
		i - Min
		s - Seconds
		a - AM or Pm
	*/

	// Set Time Zone To get your Current time
	date_default_timezone_set('America/New_York');
	// echo date('h:i:sa');

	/* 
	Unix timestamp is along integer containing the number of seconds between the unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
	*/

	$timestamp = mktime(10,14,54,12,06,1994);
	//echo "$timestamp<br>";
	//echo date('d/m/Y h:i:sa',$timestamp);

	$timestamp2 = strtotime('next Sunday');
	$timestamp3 = strtotime('+ 2 Days');

	echo date('m/d/Y h:i:sa', $timestamp2);




?>