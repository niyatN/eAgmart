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
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #4CAF50;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #A5D6A7;
		}
		.data-table tbody tr:hover td {
			background-color: ;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #A5D6A7;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">Sales Data of Electronic Division</caption>
		<thead>
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
		</thead>
		<tbody>
		<?php
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
		?>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
</body>
</html>