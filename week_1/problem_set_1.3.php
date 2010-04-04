<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Combining Strings: PHP Problem Set 1.3</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Combining Strings: PHP Problem Set 1.3</h2>
<hr>
<?php
	// Write a PHP program that displays five words from text fields.
	// Display them one after another separated by spaces with a period
	// at the end on the same page after the form when pressing submit.
	// Do not use more than one document (i.e. the "action" must be in
	// the same script).
?>
<ul>
<form action="<?=$_SERVER['submitMe']?>" method="post" accept-charset="utf-8">
	
	<li><label for="num_one">Name:</label>
	<input type="text" name="num_one" value="<?= $_POST["num_one"];  ?>" id="input"></li>
	
	<li><label for="num_two">Age:</label>
	<input type="text" name="num_two" value="<?= $_POST["num_two"];  ?>" id="input"></li>
	
	<li><label for="num_three">Country of origin:</label>
	<input type="text" name="num_three" value="<?= $_POST["num_three"];  ?>" id="input"></li>
			
	<li><label for="num_four">Sex:</label>
	<input type="text" name="num_four" value="<?= $_POST["num_four"];  ?>" id="input"></li>
				
	<li><label for="num_five">Ambition:</label>
	<input type="text" name="num_five" value="<?= $_POST["num_five"];  ?>" id="input"></li>

	<p><input type="submit" name="submitMe" value="Continue &rarr;"></p>
</form>

<?php 
 if (isset($_POST['submitMe'])) {
	echo '<li>Hey ' . htmlspecialchars($_POST["num_one"]) . ',<p> We know you are ' . htmlspecialchars($_POST["num_two"]) . ' years old.</p><p>We know where you are from... ' . htmlspecialchars($_POST["num_three"]) . '.</p><p> We know that you are a: ' . htmlspecialchars($_POST["num_four"]) .',</p><p> and we know your ambition is: '. htmlspecialchars($_POST["num_five"]) .'!</p>'; 
	} 


?>
</ul>
<!-- Hint: you will need to combine strings using the ".=" operator -->
<!-- Bonus: maintain the content entered by the user in the form as well -->
<a href="index.php">Back to contents</a>
</body>
</html>