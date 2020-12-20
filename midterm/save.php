<?php
	include 'dbconnect.php';
	$title=$_POST['title'];
	$author=$_POST['author'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$publisher=$_POST['publisher'];
	$isbn=$_POST['isbn'];
	$sql = "INSERT INTO `bookdepo`( `title`, `author`, `price`, `description`, `publisher`, `isbn`) 
	VALUES ('$title','$author','$price','$description','$publisher','isbn')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>