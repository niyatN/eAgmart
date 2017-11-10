
<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>SIGN UP</title>
	<style type="text/css">
		#submit{
			width: 100%;
		}
	</style>
</head>
<body style="background-image: url('farm2.jpg'); background-size:100% 100% ;">
<div class="container">
	<div style='position:relative; margin-top:50px;'>
	    <img src='Logo.png' style='position:absolute; top:0; left:0;' width='' height='' alt='' />
	</div>
	<div col="row" style="margin-top: 5%;">
	<div class="col-md-6 col-md-offset-3 text-center"  style="padding: 3px;background-color: rgba(178, 180, 183,0.5) ;box-shadow: 10px 10px 5px #888888;">
	<h1 id="hh1">Welcome to eAgmart</h1>
	<div id = "form-group">
		<h2 id="hh2">SIGN UP</h2>
		<form action="destRegistration.php" method="post" >
			<input type="radio" name="frotr" id="frotr" value="Farmer" checked="checked" style="width: 1%;" /><label>Farmer</label>
			<input type="radio" name="frotr" id="frotr" value="Trader" style="width: 1%;"/><label>Trader</label><br/>
		<div class="input-group ">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="fName" id="fName" required="required" class="form-control " placeholder="First Name" /><br/>
		</div><br/>
		<div class="input-group ">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

		<input type="text" name="lName" id="lName" required="required" class="form-control " placeholder="Last Name"/><br/>
		</div><br/>

		<div class="input-group ">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" name="uName" id="uName" required="required" class="form-control " placeholder="Userame"/><br/>
		</div><br/>

		<div class="input-group ">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input type="email" name="email" id="email" required="required" class="form-control " placeholder="Email"/><br/>
		</div><br/>

		<div class="input-group ">
		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		<input type="text" name="contact" id="contact" required="required" class="form-control " placeholder="Contact" /><br/>
		</div><br/>

		<div class="input-group ">
		<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		<input type = "text" name="address" placeholder="Address" class="form-control " required="required" />
		</div><br/>

		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" name="password" id="password" required="required" class="form-control " placeholder="Password" minlenght="6" /><br/>
		</div><br/>

		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" name="rePassword" id="rePassword" required="required" class="form-control " placeholder="Retype Password" /><br/>
		</div><br/>
		<div style="color:white;">
		<?php
			if(isset($_COOKIE['ERROR2'])){
	      echo $_COOKIE['ERROR2'];
	    }
		?>
	</div>
		<input type="submit" id="submit" class="btn btn-success" value="Register">
		<br/><br/><br/>
	</form>

	</div>
	</div>
	</div>
</div>
</div>
</div>
</body>
</body>
</html>
