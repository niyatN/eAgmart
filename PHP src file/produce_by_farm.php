<?php
session_start();
 ?>
<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="eagmart";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if (mysqli_connect_errno())
{
	die("Connection Failed! ". mysqli_connect_error());
}
else
{
	echo "Connected";
}

		if(isset($_POST['submit']))
		{
		$name=$_POST['Full_name'];
		$add=$_POST['Address'];
		$pincode=$_POST['Pincode'];
		$pro=$_POST['Product'];
		$qty=$_POST['Quantity'];
		$contact=$_POST['Contact'];
		$crstage=$_POST['Crop_Stage'];
		$date=$_POST['date_of_harvest'];
		$id=$_SESSION['farmer'];
			if (empty($name)||empty($add)||empty($contact)||empty($pincode)||empty($pro)||empty($qty)||empty($crstage)||empty($date))
			{
				echo "Please fill all the fields. Do not leave any field blank";
			}
			else
			{
				$sqlquery="INSERT INTO produce_detail(Farmer_name,farmer_id,Address,Pincode,Product,CropStage,Date_of_Harvest,Quantity,Contact) VALUES ('$name','$id''$add','$pincode','$pro','$qty','$crstage','$date','$Contact')";
				$res=mysqli_query($conn,$sqlquery);
				if(!$res)
				{
					die("Query Failed! ".mysqli_error($conn));
				}
				else
				{
					echo "Voila! Request sent succesfully";  ?>
					<html>
					<body>
					<form action="Farmer_Dashboard.html">
						<input type="submit" value="Return to Home Page" />
					</form>
					</body>
					</html>
		<?php	}
			}
		}
?>
