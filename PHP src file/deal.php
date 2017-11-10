<?php
session_start();
 ?>
<html>
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
      $req_id=$_POST['req_id'];
      $f_name=$_POST['far_name'];
      $product=$_POST['product'];
      $un=$_SESSION['trader'];
      $id=$_POST['far_id'];
			$sql1="select * from registration_details where username='$un'";
			$res1=mysqli_query($conn,$sql1);
			if (!$res1)
			{
				echo "query failed";
			}
			else
			{
        $row=mysqli_fetch_assoc($res1);
        $t_name=$row['FirstName'] ." ". $row['LastName'];
        $sql3="insert into deal(farmer_name,farmer_id,trader_name,trader_id,date,request_id,produce) "."values('$f_name','$id','$t_name','$un',NOW(),'$req_id','$product')";
  			$res3=mysqli_query($conn,$sql3);
        if(!$res3)
				{
          echo "query 2 failed";
				}
        else{
          $sql4="DELETE FROM `produce_detail` WHERE `produce_detail`.`Id` = '$req_id'";
          $res4=mysqli_query($conn,$sql4);
          if(!$res4){
            echo "query 4 failed";
          }
          else{
              echo "sucessfully deleted";
              Header('Location:New_Dashboard_trader.php');
          }

        }


				}
}
	?>

</body>
</html>
