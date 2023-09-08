<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<?php
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("food") or die(mysql_error());
?>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body class="login">
<section>
    <div class="form-box">
        <div class="form-value">
        <form method="post" action="">
      <h2>Login</h2>
        <div class="inputbox">
            <ion-icon name="person-outline"></ion-icon>
            <input name="username" required>
            <label for="Username">Username</label>
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password"name="password" required>
            <label for="">Password</label>
        </div>
    <div class="forget">
        <a href="homecooking.php">Forget Password</a>
    </div>
    <button name="submit" type='submit'>Log in</button>
    <div class="register">
    <?php
        if(isset($_POST['submit'])){
            $uname = $_POST['username'];
            $pass = $_POST['password'];

            $sql= "SELECT * FROM user where username='$uname' and password='$pass'";
            $mysql=mysql_query($sql);
            if(mysql_num_rows($mysql) > 0) {
            header("Location: homecooking.php");
            }

            else {
                echo "Wrong Password or Username";
        }
        }
        ?>
        <br><br>
        <p>Don't have a account <a href="registration2.php">Register</p>
    </div>
    </form>
    </div> 
    </div>
</section>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>