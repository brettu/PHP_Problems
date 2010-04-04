<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Maintaining Checkboxes: PHP Problem Set 1.5</title>
</head>
<body>
<h2>Maintaining Checkboxes: PHP Problem Set 2.5</h2>
<?php
	// Write a PHP program that retains the state of a set of checkboxes.
	// Use the array below.	The loop below will display the boxes. Complete
	// the script so that on submitting the form the checkboxes selected are
	// maintained. As a bonus, diplay the selected items below the form.
	$hobbies = array( 'Comic books','Crystals','Music','Newspapers','Computer games','Bird Watching','Macrame','Internet surfing','Origami','Pottery','Quilting','Scrap-booking','Sculpture','Soap-making');
	
	if (isset($_POST['submitMe']))  { 
	 	process_form(); 
	}
	function process_form() { 
		global $message, $_POST; 
		$comma_separated = implode(", " ,$_POST['hobby']); 
		echo ('<div id="gray">'. $comma_separated . '</div>');	
	}
?>

<form action="<?= $_SERVER['submitMe'];?>" method="post" accept-charset="utf-8">

<fieldset class="checkbox">
  <legend>Favorite Hobbies</legend>
<?
	// use a for loop
	for( $i = 0; $i < count($hobbies); ++$i ) {
		
	if(isset($_POST['submitMe']))  { 
			foreach($_POST['hobby'] as $add_entry) { 
				$add_check["$add_entry"] = ' checked="checked"'; 		
			}
	}		
?>
  <label>
    <input type="checkbox" name="hobby[]" value="<?= $hobbies[$i];  ?>" <?= $add_check[$hobbies[$i]];?> /> <?= $hobbies[$i]; ?>
  </label>
<?	
 	}	
?>
  </fieldset>
<p><input type="submit" name="submitMe" value="Submit" /></p>
</form>


<a href="index.php">Back to contents</a>
</body>
</html>