<!DOCTYPE html>
<?php
    include("sql.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Desserts</title>
</head>
<body>
<div class="container">
        <h1>Home Cooking</h1>
        <div class="navbar">
            <ul>
            
            <li><a href="homecooking.php">HOME</a></li>
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
        $sql = mysql_query("SELECT * FROM recipe WHERE course='desserts'");
        if(mysql_num_rows($sql)) {
            while($row = mysql_fetch_array($sql)) {
                $name = $row["name"];
                $image = $row["image"];
                $description = $row["description"];
                echo "<a href='view_recipe.php?recipe=$row[name]'>";
                echo "<div class='item-parent'>";
                echo "<div class='item'>";
                echo "<h1>". $name. "</h1>";
                echo "<img src='Recipe/". $image. "'>";
                
                echo "</div>";
                echo "</div>";
                echo "</a>";
            }
        } else {
            echo "<div class='item-parent'>";
                echo "<div class='item'>";
            echo "No results found for \"". $search. "\"";
            echo "</div>";
                echo "</div>";
        }

    ?>
</body>
</html>