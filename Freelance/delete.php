<?php 

	include_once("config.php");

	$id = $_GET['id'];

	// var_dump($id);

	$sql = "DELETE FROM users WHERE id=:id";

	$prep = $con->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->execute();

	header("Location: users.php");






 ?>