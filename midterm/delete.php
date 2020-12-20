<?php
include("dbconnect.php");
if(isset($_GET['ids'])){
	$id= $_GET['ids'];
	$sql = "DELETE FROM Book WHERE id=$id";
	if (mysqli_query($conn, $sql)){
		echo "Delete successful";
		header('location:index.php');
}
}
?>