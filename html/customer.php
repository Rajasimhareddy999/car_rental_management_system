<!DOCTYPE html>
<html>
	<title>Customer Details</title>

<br><br>
<head>
	<style>
		table{
		width:100%;	
		border-collapse: collapse;
		text-align: center;
		}
		table, td, tr, th{
			border: 2px solid black;
		}
		th, td, tr{
			align:"center";
			height:30px;
			font-size:22px;
		}

 .button {
                  position:absolute;
                  background-color:#e7e7e7;
                 border:none;
                 width:100px;
                 color: #555555;
                 padding: 15px 32px;
                 text-align: center;
                 text-decoration: none;
                display: inline-block;
                 font-size: 20px;
                appearance: button;
                 color: black;
                 left: 80px;
  
        }

html { 
     background: url(customer.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
table, td, tr, th{
			border: 2px solid black;
            color: black;
		}

	</style>
</head>
<body>	
<div style="background-color: white">
<?php

$servername = "localhost";
$username = "root";
$password= "reddy";
$dbname = "carrental";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0 )
{
echo "<table><tr><th>Customer Id</th><th>Id Number</th><th>Name</th><th>Address</th><th>Phone</th><th>Tripcode</th></tr>";

 while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["id_num"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Phone"]. "</td><td>". $row["tripcode"]."</td></tr>";
} 

echo "</table>";
}

else
echo "0 results";

mysqli_close($conn);

?>
</div>
<br><br><a href="updatecust.php" class="button">Update</a><br><br><br><br><br>
<br><br><a href="deletecust.php" class="button">Delete</a><br><br><br><br><br>
</body>

</html>
