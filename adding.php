<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Add.php</title>
</head>
<?php
    mysql_connect("localhost","root","") or die (mysql_error());
    mysql_Select_db("food") or die (mysql_error());

    ?>

<body style="background-color:lightpink;">
<center>



<form id="form1" name="form1" method="post" action="">

itemname &nbsp; <input name="Iname" type="text">
<br><br>
description  &nbsp; <input name="Dname" type="text">
<br><br>
recipe &nbsp; <input name="Qname" type="text">
<br><br>
<input name="Submit" type="Submit" value="Add">
</form>


<?php
if(isset($_POST['Submit']))
{
    
    $itemname = $_POST['Iname'];
    $description = $_POST['Dname'];
    $recipe = $_POST['Qname'];
  

$sql= "INSERT INTO adding (itemname,description,recipe)
VALUES('$itemname','$description','$recipe')";
$result=mysql_query($sql);
if ($result){
    echo "succesful";
}
else {
    echo "error";
}
}
?>







</center>
</body>
</html>