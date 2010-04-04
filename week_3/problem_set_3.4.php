<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Alternating Background Colors: PHP Problem Set 3.4</title>
</head>

<body>
<h2>Alternating Background Colors: PHP Problem Set 3.4</h2>
<?php
	// Write a PHP program that displays each headline from the array in
	// a table with alternating background colors
	$headlines = array("Sparp Stick in the Eye Considered a Health Risk",
					   "Area Man Fits Elbow in Ear", 
					   "80s Music May Cause Flu Like Symptoms",
					   "Study Shows Few Dogs Eats Lettuce"); 


?>
<!-- Hint: use an iterator and the modulus operator (%) -->

<ul>
<?php
$alt=true;
for($i=0;$i<count($headlines);$i++)
{
 echo '<li'.($alt?' style="background:#ccc;"':'').'>'.$headlines[$i].'</li>';
 $alt=!$alt;
}
?>
</ul>

<a href="index.php">Back to Contents</a>
</body>
</html>