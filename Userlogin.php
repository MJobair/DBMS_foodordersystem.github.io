<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form name="form1" method="post" action="index.php" class="login100-form validate-form">
					<span class="login100-form-title">
						User Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid user is required">
						<input class="input100" type="text" name="user" placeholder="UserName">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="userreg.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
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
	$databaseName='information';
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
		$user=$_POST['user'];
		$pass=$_POST['pass'];

		if($user=="" || $pass==""){
			echo "Either UserName or Password fields is empty.";
		}
		else {
			$sql="SELECT * from USERINFO where Username='$user' AND Password='$pass'";
			$result=mysqli_query($cont,$sql) or die("Could not Execute the select query");
			
			$row = mysqli_fetch_assoc($result);
			if(is_array($row) && !empty($row)){
				header('Location: index.php');
			}
			else{
				echo "Invalid username or password.<br><a href='Userlogin.php'> Go back</a><br><a href='userreg.php'>Register</a>";
			}
		
		}
	}
?>
</body>
</html>