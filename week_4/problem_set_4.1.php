<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Multi-dimensional Arrays: PHP Problem Set 4.1</title>
</head>
<body>	
<h2>Multi-dimensional Arrays: PHP Problem Set 4.1</h2>
<?php
    // Write a PHP program that explodes the following data into a
    // multi-dimensional array called $things. Use the category or 
	// name of each variable as the hash key. After organizing the 
	// data, display each category as a header with each item listed 
	// underneath. 
	// Hint: loop through $things to display the items. A nested loop 
	// (i.e. a loop inside another loop) will work best.
	$kitchen = "cup|spoon|bowl|plate|fork|knife";
	$bathroom = "soap|toothbrush|shampoo|brush|sink|tap|mirror";
	$garage = "rake|spade|shovel|car|broom|bike|box|wood";
		

		
	$things = array( "Kitchen" => array( 'item' => explode('|', $kitchen )),
					 "Bathroom" => array( 'item' => explode('|', $bathroom)),
					"Garage" => array( 'item' => explode('|', $garage))
	); 


echo "<ul>"; 
	foreach($things as $key => $value) {
		echo "<li style=\"color:#000; font-size:1.4em; background-color:#eee; border-bottom:thin #ccc dotted;\"><hr>". $key ; 
		
		foreach($value["item"] as $foo => $bar){
				echo "<span style=\"font-size:85%;  padding-bottom:25px;\"><br />". $bar . "</span>"; 
		}
		echo "</li>"; 		
	}	
?>
</ul>
</body>
</html>