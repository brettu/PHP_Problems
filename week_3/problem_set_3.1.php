<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Variable Variables: PHP Problem Set 3.1</title>
</head>
<body>
<h2>Variable Variables: PHP Problem Set 3.1</h2>
<?php
    // Write a PHP program that retains the state of a set of checkboxes.
    // Complete the script so that on submitting the form the checkboxes
    // selected are maintained with the checked="true" attribute. 
	// Use variable variables (i.e. $$var). Hint: You'll need a loop 
	// to create the variable variables.
if(isset($_POST[hobby])){	
	
	foreach( $_POST[hobby] as $hob ) {
			// create the variable variables in here
			echo $hob . ' <br />'; 

			foreach($_POST[hobby] as $add_entry) { 
					$add_c["$add_entry"] = ' checked="true"'; 
			}
							
	}
}	
	
?>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

<fieldset class="checkbox">
  <legend>Favorite Hobbies</legend>
  <label>
    <input type="checkbox" name="hobby[]" value="Spelunking" <?=$add_c['Spelunking'];?> /> Spelunking  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Crystals" <?=$add_c['Crystals'];?> /> Crystals  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Music" <?=$add_c['Music'];?>   /> Music  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Newspapers"<?=$add_c['Newspapers'];?>  />
Newspapers  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Computer_games" <?=$add_c['Computer_games'];?> />
Computer games  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Bird_Watching" <?=$add_c['Bird_Watching'];?> />
Bird Watching  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Macrame" <?=$add_c['Macrame'];?> /> Macrame  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Internet_surfing"<?=$add_c['Internet_surfing'];?>  /> 
Internet surfing  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Origami" <?=$add_c['Origami'];?>  /> Origami  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Pottery"<?=$add_c['Pottery'];?>  /> Pottery  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Quilting" <?=$add_c['Quilting'];?>  /> Quilting  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Scrap_booking"<?=$add_c['Scrap_booking'];?>   />
Scrap-booking  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Sculpture" <?=$add_c['Sculpture'];?>  />
Sculpture  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Soap_making" <?=$add_c['Soap_making'];?>   />
Soap-making  </label>
  </fieldset>
  <input type="submit" value="send" />
 </form>

<a href="index.php">Back to Contents</a>

</body>
</html>