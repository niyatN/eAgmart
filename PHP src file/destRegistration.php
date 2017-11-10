<?php
session_start();
 ?>
<html>
<head>
	<title>SIGN UP</title>
	<script type="text/javascript" src="Registration"></script>
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
			die("connection lost");
		}
		else
		{

			$flag=$_POST['frotr'];
			$fName=$_POST['fName'];
			$lName=$_POST['lName'];
			$uName=$_POST['uName'];
			$email=$_POST['email'];
			$pass=$_POST['password'];
			$repass=$_POST['rePassword'];
			$contact=$_POST['contact'];
			$submit=$_POST['submit'];
		$sql1="select * from registration_details where UserName = '$uName'";
		$res1=mysqli_query($conn,$sql1);
		if(empty($fName)||empty($lName)||empty($uName)||empty($email)||empty($pass)||empty($repass)||empty($contact))
		{
			echo"<h1>Oops can't leave any field blank</h1><br/>";
			echo"<h1><a href='Registration.php'>Retry</a></h1>";
		}
		else if(is_numeric($fName) || is_numeric($lName)){
			setcookie("ERROR2","Name should contain only Alphabatic char", time() + 300, "/");
			header('Location:Registration.php');
					}
		else if(!is_numeric($contact) && strlen($contact)!=10){
			setcookie("ERROR2","Contact is not valid", time() + 300, "/");
			header('Location:Registration.php');
		 }

		else if(mysqli_num_rows($res1)!=0){
			setcookie("ERROR2","Username is Already Exist", time() + 300, "/");
			header('Location:Registration.php');
		}
		else if(strlen($pass)<6){
			setcookie("ERROR2","Password is too short", time() + 300, "/");
			header('Location:Registration.php');
		}
		else if($pass!=$repass)
		{
			setcookie("ERROR2","Oops! passwords do not match", time() + 300, "/");
			header('Location:Registration.php');
		}
		else
		{
			$sql="insert into registration_details(Flag,FirstName,LastName,UserName,Contact_Number,Email_Id,Password) "."values('$flag','$fName','$lName','$uName','$contact','$email','$pass')";
			$res=mysqli_query($conn,$sql);
			/*if($flag=="Farmer"){
				$_SESSION["f_name"]=$uName;
			}
			else{
				$_SESSION["t_name"]=$uName;
			}*/
			echo("You are successfuly inserted your data");
			header('Location:Login.php');
		}
	}
	?>
</body>
</html>
