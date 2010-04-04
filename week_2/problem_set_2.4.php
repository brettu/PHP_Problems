<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Maintaining the State of a Select List: PHP Problem Set 2.4</title>
</head>

<body>
<h2>Maintaining the State of a Select List: PHP Problem Set 2.4</h2>
<?php
	// Write a PHP program that preserves the state of a select list. 
	// Use the array below to create the list with a loop. Compare the
	// values in the loop to the value selected by the user to maintain
	// the state of the list after submitting the form. Use the 
	// selected="true" attribute in the option that contains 
	// the selected value.
	$state_list = array( "Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","District Of Columbia","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming", null);





?>
<!-- Hint: you'll need an if statement inside a loop -->

<form action="<?= $_SERVER['submitMe']; ?>" method="post" accept-charset="utf-8">
	



<label for="year">Year:</label>
		<select name="state[]" id="state"> 	
		
		<?php
		  foreach ( $state_list as $key => $state) {
		
			if(isset($_POST['submitMe']))  { 
					foreach($_POST['state'] as $add_entry) { 
						$add_check["$add_entry"] = ' selected="true"'; 		
					}
			}
		
	
		    ?>
		    Year: <option value='<?= $state; ?>' <?= $add_check[$state];?>><?= $state; ?></option> 
		    <?php
		  }
		?>
		</select>

			<p><input type="submit" name="submitMe" value="This way &rarr;"></p>
		</form>


		<?php if(isset($_POST['submitMe'])) {
			 	process_form(); 
			}
		function process_form() { 
				global $message, $_POST; 
				$comma_separated = implode(", " ,$_POST['state']); 
				echo ('<div id="gray">'. $comma_separated . '</div>');	
			}
			
			?>


<br />
<a href="index.php">Back to contents</a>
</body>
</html>