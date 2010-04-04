<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Basic Logic: PHP Problem Set 1.4</title>
</head>

<body>
<h2>Basic Logic: PHP Problem Set 1.4</h2>
<?php
	// Write a PHP program that asks for the users age. After pressing
	// submit, respond with the word "Allowed" if the age is > 12 or 
	// with the word "Denied" if the age is < 13. Finally, respond with
	// "Invalid age" if the age entered is not numeric. Do not use more 
	// than one document (i.e. the "action" must be in the same script).
?>
<form action="<?=$_SERVER['submitMe']?>" method="post" accept-charset="utf-8">
	<label for="age">Enter a Age:</label><input type="text" name="age" value="<?= $_POST['age']; ?>" id="reg_input">
	

	<p><input type="submit" name="submitMe" value="Continue &rarr;"></p>
</form>


<?php 
if (isset($_POST['submitMe'])){	
	echo '<ul><li>Your age is: ' . htmlspecialchars($_POST["age"]) . '</li>';
	if (is_numeric($_POST["age"])) {
		if ($_POST["age"] > 12){
			echo "<li>Allowed: You are old enough.</li>";
			echo "<li><a href=\"http://wordpress.org\" target=\"_blank\" > Go Here! </a></li>"; 
		} else { echo "<li>Denied: You are not old enough to have real fun.</li>";}
	} else {	
		echo "<li>The value must be numeric.</li>";
	}
}
echo "</ul>"; 
?>

<a href="index.php">Back to contents</a>
</body>
</html>