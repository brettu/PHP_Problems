<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Loops in Forms: PHP Problem Set 2.1</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Loops in Forms: PHP Problem Set 2.1</h2>
<?php
	// Write a PHP program that displays user selectable numerical dates in 
	// a group of three select lists titled Month, Day and Year. The year 
	// should range from 1900 to the current year. On submit concatenate 
	// the date and display below the lists.


?>
<!-- Hint: use loops! -->
 

<form action="<?=$_SERVER['submitMe'];?>" method="post" accept-charset="utf-8">

<label for="year">Year:</label>
		<select name="year[]" id="year"> 	
		
		<?php
		  for ( $i = 1900; $i < (date('o')+1); $i++) {
		    $year = "$i";

		    ?>
		    Year: <option value='<?= $year ;?>'><?= $year; ?></option> 
		    <?php
		  }
		?>
		</select>
		
		<br />
		
<label for="year"> Day:</label>		
		
		<select name="day[]" id="day"> 	
		
		<?php
		  for ( $foo = 1; $foo < 32; $foo++) {
			$day = "$foo"; 
		    ?>
		    Day: <option value='<?= $day ;?>'> <?= $day; ?> </option> 
		    <?php
		  }
		?>
		</select>
	<br />
	
<label for="month"> Month:</label>

<?php

  if($timestamp == ""){
        $timestamp = time();
    }
    $months = array(null, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    unset($months[0]);
    echo '<select name="month[]">';
    foreach($months as $key => $month){
        if($month == date('M', $timestamp)){
           echo  '<option value="'.$key.'" selected="selected">'.$month.'</option>';
        }else{
            echo '<option value="'.$key.'">'.$month.'</option>';
        }
    }


	
	
	?>




?>
	</select>	

	<p><input type="submit" value="Submit" name="submitMe" id="name"></p>
</form>
<?php
 if (isset($_POST['submitMe'])) { process_form(); }
		function process_form() { 
				global $message, $_POST; 
				
				$comma_separated_day = implode(", " ,$_POST['day']); 
				$comma_separated_month = implode(", " ,$_POST['month']); 
				$comma_separated_year = implode(", " ,$_POST['year']); 
		
				$mktime =  date('l \t\h\e jS \of F\, Y', mktime(0,0,0,$comma_separated_month, $comma_separated_day, $comma_separated_year));
				echo $mktime; 
		}			
?>

<br />
<a href="index.php">Back to contents</a>



</body>
</html>