<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Operations</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="container">
		<form action="#" method="POST">
		<h2>Registration Form</h2>
		<div class="form-container">
				<div class="input-name">
					<i class="fa fa-user lock"></i>
					<input type="text" placeholder="First Name" class="name" name="fname">
					<span>
						<i class="fa fa-user lock"></i>
					    <input type="text" placeholder="Last Name" class="name" name="lname">
					</span>
				</div>

				<div class="input-name">
					<i class="fa fa-envelope email"></i>
					<input type="email" placeholder="Email" class="text-name" name="ename">
				</div>

				<div class="input-name">
					<i class="fa fa-lock lock"></i>
					<input type="password" placeholder="Password" class="text-name" name="password">
				</div>

				<div class="input-name">
					<i class="fa fa-lock lock"></i>
					<input type="password" placeholder="Confirm Password" class="text-name" name="conpassword">
				</div>

				<div class="input-name">
					<select class="country" name="gender">
						<option value= "Not Selected">Select Gender</option>
						<option value= "Male">Male</option>
						<option value= "Female">Female</option>
					</select>	
				</div>

				<div class="input-name">
					<select class="country" name="country">
						<option>Select Country</option>
						<option>India</option>
						<option>France</option>
						<option>Italy</option>
						<option>Nepal</option>
						<option>Bhutan</option>
						<option>Japan</option>
						<option>China</option>
					</select>
					<div class="arrow"></div>
				</div>

				<div class="input-name">
					<input type="checkbox" class="check-button">
					<label>I accept the terms and conditions</label>
				</div>

				<div class="input-name">
					<input type="submit" class="button" value="Register" name="register">
				</div>
		    </div>
		</form>	
	</div>
</body>
</html>


<?php
    if($_POST['register'])
    {
    	$fname   = $_POST['fname'];
    	$lname   = $_POST['lname'];
    	$email   = $_POST['ename'];
    	$pwd     = $_POST['password'];
    	$cpwd    = $_POST['conpassword'];
    	$gender  = $_POST['gender'];
    	$country = $_POST['country'];

    	$query = "INSERT INTO form values('$fname','$lname','$email','$pwd','$cpwd','$gender','$country')";

    	$data = mysqli_query($conn, $query); 

    	if($data)
    	{
    		//echo "Data Insert into Database";
    	}
    	else
    	{
    		echo "Failed";
    	}
    }
?>
