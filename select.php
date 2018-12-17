
<table border="2">
	<tr>
		<th>ID</th>
		<th>Email</th>
		<th>Password</th>
		<th colspan="2">action</th>





<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=myapp","root",""); 

$select = $con->prepare("SELECT * FROM users");

$select->setFetchMode(PDO::FETCH_ASSOC);

$select->execute();

while ($data=$select->fetch()) {
	 ?>


<tr>
	<td><?php echo $data['id']; ?> </td>
	<td><?php echo $data['email']; ?></td>
	<td><?php echo $data['pass']; ?></td>
	<td><a href="update.php?edit_id= <?php echo $data['id']; ?>">Edit</a></td>
	<td><a href="delete.php?del_id=  <?php echo $data['id']; ?>">Delete</a></td>
	

<?php
}

}
catch(PDOException $e)
{
echo "error:".$e->getMessage(); 
}

?>
</tr></table>