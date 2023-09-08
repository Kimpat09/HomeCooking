<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Registratrion</title>
    <?php
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("food") or die(mysql_error());
?>
 <link rel="stylesheet" href="stylesheet.css">
 </head>
<body>
    
<div class="registration">
<section>
    <div class="form-box">
        <div class="form-value">
        <form method="post" action="">
      <h2>Register</h2>
        <div class="inputbox">
            <input name="fullname" required>
            <label for="fullname">Fullname</label>
        </div>
        <div class="inputbox">
            <input name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="inputbox">
            <input type="text"name="emailaddress" required>
            <label for="emailaddress">EmailAddress</label>
        </div>
        <div class="inputbox">
            <input type="password"name="password" required>
            <label for="password">Password</label>
        </div>
        <div class="inputbox">
            <input type="password"name="confirmpassword" required>
            <label for="">Confirm Password</label>
        </div>
<button name="submit" type='submit'>Register</button>
<div class="Login">

    <?php
    if (isset($_POST['submit'])){
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $email = $_POST['emailaddress'];
        $pw = $_POST['password'];
        



    $sql = "INSERT INTO user (fullName, username, emailaddress, password)
    VALUES ('$fname', '$uname', '$email', '$pw')";
    $Result = mysql_query($sql);
    if ($Result) {
        echo "Successful";
    }
    else {
    echo "Error";
    }


        
    }
 
?>
 <br><br>
<p>Login Here <a href="login.php">Log in</a></p>
</div>
</form>
</div>
   </div>
</section>
</body>
</html>