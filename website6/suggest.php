<?php
// People Array 
$people[] = "Ali";
$people[] = "John";
$people[] = "Omer";
$people[] = "Ahmed";
$people[] = "Mohamed";
$people[] = "Majed";
$people[] = "Mustafa";
$people[] = "Ali";
$people[] = "Gumaa";

// Get Query 
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestion
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			} else {
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;