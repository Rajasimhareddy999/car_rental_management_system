<?php

$username = "localhost";
$username = "root";
$password = "reddy";
$dbname = "carrental";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$v3 =$_POST['a'];
$v4 =$_POST['b'];
$v5 =$_POST['c'];
$v6 =$_POST['d'];
$v7 =$_POST['e'];
$v8 =$_POST['f'];

if(empty($v3)||empty($v4)||empty($v5)||empty($v6)||empty($v7)||empty($v8)){
	echo "Please fill all the info";
	header('refresh:2 , URL=updatecust.php');
}
else
{	$sql = "INSERT into customer(customer_id,id_num,Name,Address,Phone,tripcode) VALUES('$v3','$v4','$v5','$v6','$v7','$v8')";

	if($conn->query($sql) == FALSE)
	{
		echo "Not created";
	}
	else
	{
		echo"Created";
		header('refresh:1, URL=customer.php');
	}
}

mysqli_close($conn);
?>
