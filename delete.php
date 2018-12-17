<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=myapp","root",""); 



$del_id = $_GET['del_id'];



$DELETE = $con->prepare("DELETE FROM  users  WHERE id = '$del_id' ");


if ($DELETE->execute()); 

header("location:select.php");


} 
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>