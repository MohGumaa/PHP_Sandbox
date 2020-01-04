<?php
	$loggedIn = true;

	$numbers = [12,43,12,434];

	/*
	if($loggedIn){
		echo "You are logged in";
	} else {
		echo "Your aren't logged in";
	}
	*/

	//echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

	$isResgistered = ($loggedIn == true) ? true : false;
	//echo $isResgistered;

	$age = 20;
	$score = 15;

	//echo "You score is: ".($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'): ($age > 10 ? 'Horrible' : 'Average'));

?>

<div>
	<?php if($loggedIn) { ?>
		<h1>Welcome User</h1>
	<?php } else { ?>
		<h1>Welcome Admin</h1>
	<?php } ?>
</div>

<div>
	<?php if($loggedIn) : ?>
		<h1>Welcome User</h1>
	<?php else: ?>
		<h1>Welcome Guest</h1>
	<?php endif; ?>
</div>

<div>
	<?php foreach ($numbers as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>

<?php for($i = 0; $i < 20; $i++): ?>
	<?php echo 'Number is:' . $i'<br>'; ?>
<?php endfor; ?>