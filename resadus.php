<?php include('header.php'); ?>
<body >
<?php include('navbar.php'); ?>
<br>
<h1 style="text-align:center;"><u>ADMIN REGISTRATION FORM </u></h1>
<form name="form1" method="post" action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="email"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	<label for="email"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="user" required>
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter phone number" name="mobile" required>
<label for="email"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="add" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <p>By creating an account you agree to our Terms & Privacy.</p>

    <div class="clearfix">
      
      <button type="submit" name="submit" class="signupbtn">Submit</button>
	  <button type="reset" class="cancelbtn">Reset</button>
    </div>
  </div>
</form>

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
$name=$_POST['name'];
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['add'];
$pass=$_POST['psw'];
if($name=="" || $user=="" || $email=="" || $mobile=="" || $address=="" || $pass==""){
	echo "All fields should be filled.Either one or many fields are empty.";
	}

$inst="INSERT INTO admininfo(Name,Username,Email,Mobile,Address,Password) VALUES('$name','$user','$email','$mobile','$address','$pass')"; 

	$data=mysqli_query($cont,$inst);
	if($data == TRUE)
            {
                echo "<script>alert('Registration Successfully..!');window.location='Adminlog.php';</script>";   
            }
	else{echo mysqli_error($cont);}
}
?>
</body>
</html>