<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Writing Content to a File: PHP Problem Set 2.3</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Writing Content to a File: PHP Problem Set 2.3</h2>
<?php
	// Write a PHP program that collects the input from a textarea, replaces
	// the new lines with break tags, and then adds the content to a line in
	// an external flat file. Display the contents of the flatfile 
	// below the form. 
	if (isset($_POST['submitMe']))  { 
	 	process_form(); 
	}
	
	
	function process_form() { 
		global $message, $_POST; 
		$gb_file = fopen("flat.txt", "a+" );
	 	$comments2 = str_replace("\r\n","<br />", $_POST['comments']);
	
		if(fwrite($gb_file,"$_POST[firstName]<br />\t$_POST[email]<br />\t$comments2\n") ){  
			$body = "New Guestbook entry from:\n"; 
			$body .= "$_POST[firstName]\n";

			$body .= "Additional comments: $comments2\n";
			$safe_email = str_replace("\r\n",'',$_POST[email]); 

			mail("bweikulrich@me.com", "Guestbook Entry From: $safe_email\r\n", $body); 				
			$message ="Thank you $_POST[firstName] <br />\n"; 
				
			 
			 
		} else { 
			$message ="There seems to be an error. Please try again later. <br />\n"; 
			}
	}
	
	
?>
<form action="<?= $_SERVER[PHP_SELF];?>" method="post" id="signUp"> 
	<div>
	<label for="firstName" class="label"> First Name: </label>
	<input type="text" name="firstName" value="<?= $_POST[firstName]; ?>" class="formbox" maxlength="60" size="30"/>
	<div class="inlineerrors"><?= $nameerror ?></div>
	</div>
	
	<div> <label for="email" class="label" > Email: </label>
	<input type="text" name="email" value="<?= $_POST[email];?>" class="formbox" maxlength="60" size="30" />
	<div class="inlineerrors"><?= $emailerror ?></div>
	</div>

	<div>
	<label for="comments" class="label"> Comments: </label>
	<textarea name="comments" id="comments" cols="26" rows="5"><?=stripslashes($_POST[comments]); ?></textarea>
	</div>
<!-- Hint: you will need to combine strings using the ".=" operator -->
<!-- Bonus: maintain the content entered by the user in the form as well -->


<input type="submit" name="submitMe" id="send" value="send it" /> <br />


<?php 
$display = file("flat.txt"); 

foreach ($display as $line_num => $line) {
    echo "<br /><b>Entry {$line_num}</b> : " . $line . "\n";
}

//htmlspecialchars()

 ?>

<a href="index.php">Back to contents</a>
</body>
</html>