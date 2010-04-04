<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Basic Math: PHP Problem Set 1.5</title>
</head>

<body>
<h2>Basic Math: PHP Problem Set 1.5</h2>
<hr>
<?php
	// Write a PHP program that solves the following math problems:
	//    1. Any number multiplied by any number
	//    2. Any number divided by any number
	//    3. The modulus (remainder) of a division problem
	//    4. Any number plus 25
	// Do not use more than one document (i.e. the "action" must be 
	// in the same script).
	$number = rand(5, 50); 
	$second_number = rand(7, 17); 
?>
<h3> One random number is: <?= $number . '<br />'; ?><br />
 Another random number is: <?= $second_number . '<br />'; ?></h3>

<ul>
	<li>Multiply these random numbers <h3><?= $number;  ?> * <?= $second_number; ?> = <?= $number * $second_number; ?></h3></li>
	<li>Divide by the random numbers <h3><?= $number; ?> / <?= $second_number; ?> = <?= $number / $second_number; ?></h3> </li>
	<li>Modulize the random numbers by using the % sign in php: <h3><?= $number ?> % <?= $second_number; ?> = <?= $number % $second_number; ?></h3></li>
	<li>Add 25 to the number to the first random number <h3>25 + <?= $number; ?> = <?= $number + 25; ?></h3> and then add 25 to the second random number <h3>25 + <?= $second_number; ?> = <?= $second_number + 25; ?></h3></li>
	<p></p>
</ul>

<br />

 

<a href="index.php">Back to contents</a>

</body>
</html>