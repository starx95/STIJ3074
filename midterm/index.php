<?php 
include("dbconnect.php");
if($result = mysqli_query($conn, "SELECT * FROM Book")){
    
       
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;background-image: url('bg.jpg');  background-repeat: no-repeat;
  background-attachment: fixed;}

td,th {
text-align: center;
} 

.modal-backdrop {
  z-index: -1;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 5% from the bottom and centered */
  width: 100%; /* Could be more or less, depending on screen size */
}

/* Set a style for all buttons */
.logoutbutton {
  background-color: 		#00009D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius:30px;
  height: 20px
  border: none;
  cursor: pointer;
  width: 97%;
}

button:hover {
  opacity: 0.8;
}

.containers:hover .image {
  opacity: 0.7;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

 .img {
    display: flex;
    align-items:center;
    margin:10px;
  }

.container {
  padding: 1px;
}

span.psw {
  float: right;
  padding-top: 4px;
  padding-right: 40px;
}

.forgot
{
    display: block;
    border-top: 4px solid #a7a59b;
    background-color: #f6e9d9;
    height: 22px;
    line-height: 22px;
    padding: 4px 6px;
    font-size: 14px;
    color: #000;
    margin-bottom: 13px;
    clear: both;
}

.forgot .psw { float: right; }



.title {
  font-family:  "arial black";
  display: block;
  font-weight: 300;
  font-size: 80px;
  color: #35495e;
  letter-spacing: 1px;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



a:link:active, a:visited:active {
  color: (internal value);
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  
  a { cursor: pointer; }
}



a:hover, a:active {
  opacity: 0.8;
}


/* Set a style for all buttons */
button {
  background-color: 		#00009D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

.ui-helper-center {
    text-align: center;
}

</style>
	<title>Register new book</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="container"  style=" width: 1100px;">
	<div class="modal-content">
    <div class="border max-w rounded overflow-hidden shadow-lg" style="margin:20px">
	<h1>All Books</h1>
		<form method="post" id="myform" action=<?php if(isset($_POST['delete'])){?> "insertform.php?id="<?php echo $id; }else{?> "insertform.php" <?php } ?>>
				<div class="modal-body">
				<table style="border: 1px solid" class="table table-bordered">
				<th style="border: 1px solid">ID</th>
				<th style="border: 1px solid">TITLE</th>
				<th style="border: 1px solid">AUTHOR</th>
				<th style="border: 1px solid">PRICE</th>
				<th style="border: 1px solid">DESCRIPTION</th>
				<th style="border: 1px solid">PUBLISHER</th>
				<th style="border: 1px solid">ISBN</th>
				<th style="border: 1px solid" colspan="2">OPERATION</th>
				<?php while($row = mysqli_fetch_array($result)){ $id= $row['id']; ?>
				<tr><td style="border: 1px solid"><input type="hidden" name="id" value="<?php echo $id; ?>"/></td><td style="border: 1px solid"><?php echo $title = $row['title']; ?></td><td style="border: 1px solid"><?php echo $author = $row['author']; ?></td><td style="border: 1px solid"><?php echo $price = $row['price']; ?> </td><td style="border: 1px solid"><?php echo $description = $row['description']; ?></td><td style="border: 1px solid"><?php echo $publisher = $row['publisher'];?></td><td style="border: 1px solid"><?php echo 	$isbn = $row['isbn']; ?></td><td style="border: 1px solid"><a href="update.php?id=<?php echo $row['id']; ?>" style="color: red;">UPDATE</a></td><td style="border: 1px solid"><input type="hidden" name="ids" value="<?php echo $id; ?>"/><a value="ss" name="delete" href="delete.php?ids=<?php echo $row['id']; ?>" onclick="confirmd()" style="color: red;text-decoration: none;" >DELETE</a></td></tr>
				<?php } ?>
				</table>
				</div>
				<div style="align:center" class="modal-footer">
					<input type="submit"  style="border-radius:4px;cursor:pointer;align: right;
   
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;" value="Add New Book"></input>
					
				</div>
			</form>
          </div>
    </div>
	</div>
</body>
</html>
<script>
function confirms(){
var r = confirm("Are you sure?");
if (r == true) {
	document.getElementById("myform").submit();
}
}


function confirmd(){
var d = confirm("Are you sure to delete?");
 if(d == true){
	 document.getElementById("delete").submit();
 } else {
	 return false;
 }
}
    
</script>
<style>


  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
  }

  p.c {
    text-align: right;
    margin-right: 10px;
    margin-bottom: 10px;
  }

  .width{
    width: 100%
  }

  .width*{
    width: 100%
  }

  .rule{
    margin-left: 590px;
  }
  .btn{
    margin-bottom: 20px;
    margin-top: 20px;
  }
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
    background-color: blue;
  }

  .dropdown-content a:hover, .dropdown:hover .dropbtn {
    display: block;
    background-color: red;
    margin-top: 0;
  }

  .dropdown  {
    font-size: 16px;
    border: none;
    outline: none;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  .chkbox {
    margin-right: 20px;
  }
  .img2 {
    margin-top:0px;
    margin-left:10px;
    margin-right:10px;
  }
  .img {
    display: flex;
    align-items:center;
    margin:10px;
  }

  .width{
    width:100%;
  }

  .container {
    margin: 0 auto;
    min-height: 100vh;
    min-width: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .title {
    font-family: "Quicksand", "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    display: block;
    font-weight: 300;
    font-size: 80px;
    color: #35495e;
    letter-spacing: 1px;
  }
  
  th {
    white-space: nowrap;
}
</style>
<?php

?>
<style>
th,td {
	
}
</style>
<?php 
	
} ?>