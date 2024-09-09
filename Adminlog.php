<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form name="form1" method="post" action="product.php" class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter admin id">
						<input class="input100" type="password" name="id" placeholder="Admin ID">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<br>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an Admin account?
						</span>

						<a href="resadus.php" class="txt3">
							Sign up As Admin
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<div style="background-color: black; color:white;" >
<p style="text-align:center;">While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.</p> 
<p style="text-align:center;">Copyright 1999-2019 by MJ Data. All Rights Reserved.</p>
<p style="text-align:center;">Powered by MJ.</p>
</div>
<?php
$databaseHost='localhost';
$databaseName='foodsys';
$databaseUsername='root';
$databasePassword='';
$cont=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$cont){
	die("Connection failed: ".mysqli_connect_error());
}
else{
 //echo"Connected Successfully";
}
if(isset($_POST['submit'])){
$user=$_POST['name'];
$adid=$_POST['id'];
$pass=$_POST['password'];

if($user=="" || $pass=="" || $adid==""){
	echo "Either UserName or Password fields is empty.";
	}
	else {
	 $sql="SELECT * from ADMININFO where Username='$user' AND Password='$pass' AND $adid=1526 ";
		$result=mysqli_query($cont,$sql) or die("Could not Execute the select query");
		
	$row = mysqli_fetch_assoc($result);
	if(is_array($row) && !empty($row)){
		/*header('Location:Logedadminpage.php');
		echo "Login Successful";*/
	}
	else{
		echo "Invalid username or password.<br><a href='Adminlog.php'> Go back</a><br><a href='resadus.php'>Register As Admin</a>";
	}
	
}
}
?>
</body>
</html>