<?php

try {
    $con = new PDO ("mysql:hostname=localhost;dbname=myapp", "root", "");

    if (isset($_POST['done'])) {

        $edit_id = $_GET['edit_id'];


        $email = $_POST['email'];
        $pass = $_POST['pass'];


        $update = $con->prepare("UPDATE users  SET email = :email , pass = :pass WHERE id = '$edit_id' ");
        $update->bindParam(':email', $email);
        $update->bindParam(':pass', $pass);
        $update->execute();
        header("location:select.php");
    }
} catch (PDOException $e) {
    echo "error:" . $e->getMessage();
}
?>
<form method="post">
    <input type="text" name="email">
    <input type="text" name="pass">
    <input type="submit" name="done">
</form>