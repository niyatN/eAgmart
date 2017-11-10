<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fetch.css">
	<title>Fetch</title>
</head>
<body>
<table >

<tr>
<th>Flag</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>contact</th>
<th>Email</th>
<th>Password</th>
<th>Id</th>
</tr>
<?php
		$host="localhost";
		$dbuser="root";
		$pass="";
		$dbname="eagmart";
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		if(mysqli_connect_errno())
		{
			die("connection lost");
		}
		else
		{
			$sql="SELECT * FROM registration_details";
			$res=mysqli_query($conn,$sql);
			if(!$res){
				die("Query Failed!");
			}
			while ($row=mysqli_fetch_assoc($res)) {
				echo"<tr>";
					foreach ($row as $key => $value) {
						# code...
						echo "<td>{$value}</td>";
					}
				echo"</tr>";
					
				}	
		}
?>
</table>
</body>
</html>