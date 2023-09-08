<!DOCTYPE html>
<html lang="en">
    <?php
        mysql_connect("localhost", "root", "") or die(mysql_error());
        mysql_select_db("food") or die(mysql_error());
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Cooking Blog</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<link rel="stylesheet" href="stylesheet.css">
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
    
    <div class="content">
        <h3>Welcome to Home Cooking </h3>
        <h1>Healthy and Natural Food</h1>
        <p>Cuisine is a restaurant located in Philippines. we have some amazing recipes
            and the most talented chefs in the country.</p>
    </div>
    <div class="search">
        <form method="post" action="">
        <input type="text" name="search" placeholder="Search Food">
</form>
    </div>


    <?php
    if(isset($_POST["search"])) {
        $search  = $_POST["search"];
        header("Location: search_results.php?q=$search");
    } else {
        $search = NULL;
    }
    

    ?>
</body>
</html>