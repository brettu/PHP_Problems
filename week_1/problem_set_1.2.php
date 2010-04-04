<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dates and Times: PHP Problem Set 1.2</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Dates and Times: PHP Problem Set 1.2</h2>
<?php
	// Write a PHP program that displays the current date and time
	// using the following formats: 
	// 1. Wednesday, October 11th, 2009, 11:42am
	// 2. 2009-10-07 11:42:39
	// 3. 10/07/2009 21:14
?>
<p><h3>1:</h3><?php  echo date('l jS \of F Y h:i:s A'); ?></p><hr>
<p><h3>2:</h3><?php echo date('Y-m-d, H:i:s') ?><hr></p>
<p><h3>3:</h3><?php echo date('m/j/y, H:i a') ?><hr></p>
<p><h3>Bonus:</h3><hr><p><?php 	echo " September 28, 2012 is on a " . date("l", mktime(0, 0, 0, 9, 28, 2012));  ?></p>

<!-- Bonus: use PHP to find what day of the week it will be on September 28, 2012 -->
<a href="index.php">Back to contents</a>
</body>
</html>