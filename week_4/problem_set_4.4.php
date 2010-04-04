<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Randomizing an Array: PHP Problem Set 4.4</title>
</head>

<body>
<h2>Randomizing an Array: PHP Problem Set 4.4</h2>
<?php

	// Write a PHP program that randomizes the sequence of words in the 
	// given content each time the script is called. Display the words
	// in a paragraph after shuffling (hint hint) them.
	
$content = "Cosmology is the study of the cosmos in several of the above meanings, depending on context. All cosmologies have in common an attempt to understand the implicit order within the whole of being. In this way, most religions and philosophical systems have a cosmology. In physical cosmology, the term cosmos is often used in a technical way, referring to a particular space-time continuum within the (postulated) multiverse. Our particular cosmos is generally capitalized as the Cosmos.";


		echo '<p>'; 
		$shuffled = explode(' ', $content);
		shuffle($shuffled);
		
		foreach ($shuffled as $foo) {
		    echo $foo. " " ;

		}
		echo '</p>'; 
?>

</body>
</html>