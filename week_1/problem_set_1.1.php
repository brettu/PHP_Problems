<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Collecting Input: PHP Problem Set 1.1</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Collecting Input: PHP Problem Set 1.1</h2>
<?php
	// Write a PHP program that takes the content 
	// From an input field and displays it under the
	// form after pressing the submit button. Do not
	// use more than one document (i.e. the "action"
	// must be in the same script).
?>
<form action="<?=$_SERVER['submitMe']?>" method="post" accept-charset="utf-8">
	<p><label for="name">Enter your name: </label><input type="text" name="name" value="<?= $_POST['name']; ?>" id="reg_input"></p>

	<p><input type="submit" value="Submit" name="submitMe" id="name"></p>
</form>
<?php
 if (isset($_POST['submitMe'])) { echo '<ul><li>Hello ' . htmlspecialchars($_POST["name"]) . '!</li></ul>'; }
?>

<a href="index.php">Back to contents</a>
<!-- Hint: you need to use a predefined "superglobal" variable -->
</body>
</html>