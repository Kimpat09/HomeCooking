<!DOCTYPE html>
<?php
    include("sql.php");

    $recipe= $_GET["recipe"];
        $sql = mysql_query("SELECT * FROM recipe WHERE name='$recipe'");
        $row = mysql_fetch_array($sql);
        $name = $row["name"];
        $image = $row["image"];
        $description = $row["description"];
        $ingredients = $row["ingredients"];
        $directions = $row["directions"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title><?php echo $name ?></title>
</head>
<body>
<div class="container">
        <h1>Home Cooking</h1>
        <div class="navbar">
            <ul>
           
                <li><a href="About.php">ABOUT</a></li>
                <li><a href="Course.php">COURSE</a>
                <div class="sub-menu-1">
                    <ul>
                        
                        <li><a href="appetizers.php">Appetizers</a></li>
                        <li><a href="maindish.php">MainDish</a></li>
                        <li><a href="desserts.php">Desserts</a></li>
                    </ul> 
                </div>
            </li>    
                <li><a class="login" href="login.php">SIGN OUT</a></li>
            </ul>
        </div>
    </div>
    
    <?php
        echo "<a href='javascript:history.back()'>";
        echo "<div class='item-parent'>";
        echo "<div class='item'>";
        echo "<h1>". $name. "</h1>";
        echo "<img src='Recipe/". $image. "'>";
        echo "<h1>Descriptions</h1>";
        echo "<p>". $description. "</p>";
        echo "<h1>Ingredients</h1>";
        echo "<ul>". $ingredients. "</ul>";
        echo "<h1>Directions</h1>";
        echo "<ol>". $directions. "</ol>";
        
      
        
        echo "</div>";
        echo "</div>";
        echo "</a>";

    ?>
    
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
