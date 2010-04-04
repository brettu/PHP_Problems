<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Exploding Strings: PHP Problem Set 3.3</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Exploding Strings: PHP Problem Set 3.3</h2>
<?php
	// Write a PHP program that displays the third word
	// from the following string:
	$words1 = "magic/window/mirror/jack-in-the-box";
	// and the second word from the following string:
	$words2 = "happy.monkey.silly.donkey.wolf.";
	// and the last word from the following string:
	$words3 = "sister:friend:phone:note:letter";
	
	$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
	$one = explode("/", $words1);
	$two = explode(".", $words2);
	$three = explode(":", $words3);		
	echo $one[2]. '<br />'; 
	echo $two[1]. '<br />';
	echo $three[4]. '<br />'; 
	
	
	
	
?>

<a href="index.php">Back to Contents</a>


<!-- Hint: you will need to use the explode function -->
</body>
</html>