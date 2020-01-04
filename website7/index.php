<?php
	$path = '/dir1/myfile.php';
	$file = 'file1.txt';

	/*
	// Return file name
	#echo basename($path);

	// Return filename with ext
	echo basename($path, '.php');

	// Return the dir name from path
	echo dirname($path);

	// Check if file exist
	echo file_exists($file);
	
	// Get abs path
	echo realpath($file);

	// Checks to see if file
	echo is_file($file);

	// Check if writeable
	echo is_writable($file);

	// Check if readable
	echo is_readable($path);
	
	// Get the file size
	echo filesize($file);

	// Create a directory
	mkdir('testing');

	// Remove dir if empty
	rmdir('testing');
	
	// Copy file
	echo copy('file1.txt', 'file.txt');

	// Rename file
	rename('file.txt', 'myfi.txt');

	// Delete File
	unlink('myfi.txt');
		
	// Write from file 
	echo file_get_contents($file);
	
	// Write string to file
	echo file_put_contents($file, 'Goodbye');
	
	// Append to file
	$current = file_get_contents($file);
	$current .= 'World';
	file_put_contents($file, $current);
	
	// Open File For Reading
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	*/
	// Open file for writing
	$handle = fopen('file2.txt', 'w');
	$txt ="John Doe\n";
	fwrite($handle, $txt);
	$txt ="Asmith\n";
	fwrite($handle, $txt);
	fclose($handle);
