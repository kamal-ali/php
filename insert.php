<?php

try{
$con = new PDO ("mysql:hostname=localhost;dbname=myapp","root",""); 

if(isset($_POST['done']))
{

$email = $_POST['email'];
$pass = $_POST['pass'];


$insert = $con->prepare("INSERT INTO users (email,pass) VALUES(:email,:pass)");
$insert->bindParam(':email',$email);
$insert->bindParam(':pass',$pass);
$insert->execute();
echo "insert it";
}
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}
?>
<form method="post">
<input type="text" name="email">
<input type="text" name="pass">
<input type="submit" name="done" >
</form>