<?php
	
	include 'sql.php';

?>
<link rel="stylesheet" href="stylesheet.css">
<!DOCTYPE html>
<html lang="en">
	
<head>
	
<h1 style="color:orangered;">Comment Section</h1>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Comment</title>
	
</head>
<body class="comments">
	
	<div class="wrapper">
		<form action="" method="post" class="form1">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>
	</div>

	<div class="comments1">
		<?php

if (isset($_POST['post_comment'])) {

    $name = $_POST['name'];
    $message = $_POST['message'];
    
    $sql1 = "INSERT INTO comment (name, comment) VALUES ('$name', '$message')";

    $result = mysql_query($sql1);



   
		$sql = "SELECT * FROM comment";
			if ($mysql= mysql_query($sql));{
			while ($row = mysql_fetch_array($mysql)){

            
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['comment']; ?></p>
            
		<?php }} }?>

	</div>
</body>
</html>
