<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=myapp","root",""); 
echo "connected";
}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>