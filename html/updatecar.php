<!DOCTYPE html>
<head>
	<style>
			.button {
                           position:absolute;
                           background-color:#e7e7e7;
                           border:none;
                           width:100px;
                           color: #555555;
                           padding: 15px 25px;
                           text-align: center;
    	                   text-decoration: none;
                           display: inline-block;
                           font-size: 12px;
                           appearance: button;
                           color: black;
                           
}

html { 
     background: url(c2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }

  table, td, tr, th{
			border: 2px solid white;
            color: white;
		}
</style>
</head>
	<center><h1 style="color:white;">Car Details Entry</h1></center>
<body>
	<form method="POST" action="submit.php">
		
		<table>
<thead>
	<tr>
	<th>Car Number</th>
	<th>Model</th>
	<th>Seat Capacity</th>
	<th>Fare per KM</th>
	<th>Car Type</th>
	<th>Tripcode</th>
	</tr>
</thead>

<tbody>

<tr>    <td><input type="text" name="a"/></td>
	<td><input type="text" name="b"/></td>
	<td><input type="text" name="c"/></td>
	<td><input type="text" name="d"/></td>
	<td><input type="text" name="e"/></td>
	<td><input type="text" name="f"/></td>
</tr>
</tbody>
</table>
	<br><br><br>
	<center><input type="submit" class="button" value="Submit"/></center>
<br><br><br>
</form>

<form method="POST" action="home.php">
<center><input type="submit" class="button" value="Home Page"/></center>
</form>

</body>

</html>
