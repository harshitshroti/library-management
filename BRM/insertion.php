<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="insert into book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
<title>Insertion </title>
</head>
<body>
<h1> book record management</h1>
<p><?php
     if($status==1)
     echo "record inserted";
  else
	echo"not";
?>

	</p>
	do u want to insert more records <a href="insertForm.php">click here</a>
	</body>
	</html>