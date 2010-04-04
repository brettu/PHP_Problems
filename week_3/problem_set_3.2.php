<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Associative Arrays: PHP Problem Set 3.2</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Associative Arrays: PHP Problem Set 3.2</h2>

<form action="<?=$_SERVER['submitMe'];?>" method="post" accept-charset="utf-8">
<?php
	// Write a PHP program that preserves the state of a select list. 
	// Use the array below to create the list with a loop. Compare the
	// values in the loop to the value selected by the user to maintain
	// the state of the list after submitting the form. Use the 
	// selected="true" attribute in the option that contains 
	// the selected value.
	
$state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
?>


	
<label for="state">State:</label>
		<select name="states" id="state"> 	
		
<?php

	while (list($key, $value) =each($state_list) ){
		$add_check["$_POST[states]"] = ' selected="true"'; 		
   		echo 'State: <option value="'.$value.'" '.$add_check["$value"].'>' .$key. "</option>" ;
		$return = $_POST['states'];	  	
	}
		
	
?>
		</select>
		

	<p><input type="submit" value="Submit" name="submitMe" id="name"></p>
</form>

<?php

echo $return . "<br />"; 

?>
<a href="index.php">Back to Contents</a>
</body>
</html>