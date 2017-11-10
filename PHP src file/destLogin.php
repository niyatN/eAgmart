<?php
session_start();
 ?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
	<title>
		LOGIN
	</title>
	<link rel="stylesheet" type="text/css" href="login_dest.css">

</head>
<body>

	<?php
		$host="localhost";
		$dbuser="root";
		$pass="";
		$dbname="eagmart";
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		if(mysqli_connect_errno())
		{
			die("c lost");
		}
		else
		{
			$un=$_POST['userName'];
			$pass=$_POST['password'];
		if(empty($pass)||empty($un))
		{
			setcookie("ERROR1","Oops! can't leave any field blank", time() + 300, "/");
			header('Location:Login.php');
		}
		else
		{
			$sql1="select * from registration_details where username='$un'";
			$res1=mysqli_query($conn,$sql1);

			if (mysqli_num_rows($res1)==0)
			{
				setcookie("ERROR1","Invalid username Or Password", time() + 300, "/");
				header('Location:Login.php');

			}
			else
			{
				mysqli_free_result($res1);
				$sql2="select * from  registration_details where UserName='$un' and Password='$pass'";
				$res2=mysqli_query($conn,$sql2);
				if(mysqli_num_rows($res2)==1)
				{
					while($row=mysqli_fetch_assoc($res2))
					{

						$sql3="select flag from registration_details where UserName='$un' and Password='$pass'";
						$res3=mysqli_query($conn,$sql3);
						while ($row2=mysqli_fetch_assoc($res3)){
							foreach ($row2 as $k=>$v){
								if ($v=="Farmer"){
										$_SESSION['farmer']=$un;
										header('Location:farmer_dashboard.php');
								}
								else{
									$_SESSION['trader']=$un;
									header('Location:trader_dashboard.php');

								}
							}
						}

						echo("<h2>Welcome</h2>");

					}


				}
				else
				{
					setcookie("ERROR1","Invalid username Or Password", time() + 300, "/");
					header('Location:Login.php');

				}
			}
		}
	}
	?>

</body>
</html>
