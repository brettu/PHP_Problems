<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Searching Through an Array: PHP Problem Set 4.2</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Searching Through an Array: PHP Problem Set 4.2</h2>
<?php
	// Write a PHP program that explodes $content into an array
	// of words. Loop though the resulting array and count how
	// many times the word 'and' occurs.
	$content = "Cappamore is approximately 20 minutes driving time from Limerick city, to where many local people commute to their employment on a daily basis. The town has several pubs and grocery shops and other services include a dry cleaners, bookmakers shop and a veterinary clinic. The town hosts an annual Agricultural Show that attracts a large number of visitors in August each year. Tourist accommodation is available at Dairy Guesthouse and Activity Centre on the Dromkeen side of Cappamore.";

$finder = explode("and", $content);

echo "<p>$content</p>"; 

for($x = 0; $x < count($finder);  ++$x) {
 
} 


?>




The word "and" occurred <?= $x ?> times.
</body>
</html>