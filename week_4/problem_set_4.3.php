<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sorting Arrays: PHP Problem Set 4.3</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Sorting Arrays: PHP Problem Set 4.3</h2>
<?php
	// Write a PHP program that sorts the values in the given
	// array alphabetically and displays them in a list. Secondly,
	// display the same items in reverse order
	$items = array('Herbie','Miles','Wayne','Coltrane','Elvin','Winton','Evans','Henderson','Tatum');

	function fwd($a, $b) {
	    if ($a == $b) {
	        return 0;
	    }
	    return ($a < $b) ? -1 : 1;
	}
	
	function rvs($a, $b) {
	    if ($a == $b) {
	        return 0;
	    }
	    return ($a > $b) ? -1 : 1;
	}
	
	echo '<pre>';
	uasort($items, 'fwd');
	print_r($items).  '</pre><br />'; 
	
	echo '<pre>';	
	uasort($items, 'rvs'); 
	print_r($items).  '</pre><br />'; 
	

?>

</body>
</html>