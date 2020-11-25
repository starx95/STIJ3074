<?php
include_once('conn.php');
if(isset($_POST['name'])){
    $foodname = $_POST['name'];
    $foodprice = $_POST['price'];
    $foodquantity = $_POST['quantity'];
    $foodcallorie = $_POST['callorie'];

    $sql = "INSERT INTO foods ( foodName, foodPrice, foodQuantity, foodCallorie) VALUES ('$foodname','$foodprice','$foodquantity','$foodcallorie')";
    if ($conn->query($sql) === TRUE) {
    echo "Food inserted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>