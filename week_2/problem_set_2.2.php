<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Reading a File into an Array: PHP Problem Set 2.2</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Reading a File into an Array: PHP Problem Set 2.2 by brett</h2>
<?php

// Write a PHP program that reads in the contents of this file into an
// array and displays it line by line preceded by line numbers.

$lines = file('problem_set_2.2.php5');

?>
<!-- Hint: use the file function to create the array -->
<pre>
<!-- Display the content here -->
<?php 

foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
} 


// I win 

?>
</pre>

<a href="index.php">Back to contents</a>
</body>
</html>