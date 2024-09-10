<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

<?php

include 'database.php';

if(isset($_POST['submit'])) {
	$name 			= 	mysqli_real_escape_string($con, $_POST['name']);
	$email 			= 	mysqli_real_escape_string($con, $_POST['email']);
	$mobile 		= 	mysqli_real_escape_string($con, $_POST['mobile']);
	$dept 			= 	mysqli_real_escape_string($con, $_POST['dept']);
	$year 			= 	mysqli_real_escape_string($con, $_POST['year']);
	$prn 			= 	mysqli_real_escape_string($con, $_POST['prn']);
	$password 		= 	mysqli_real_escape_string($con, $_POST['password']);
	$confpassword 	= 	mysqli_real_escape_string($con, $_POST['confpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$confpass = password_hash($confpassword, PASSWORD_BCRYPT);

	if($password === $confpassword) {
		$insertquery = "insert into register(name, email, mobile, dept, prn, year, password, confpassword) values('$name', '$email','$mobile', '$dept', '$year', '$prn', '$pass', '$confpass')";
		$iquery = mysqli_query($con, $insertquery);

    	if($iquery){
        	?>
        	<script>
        	    alert(" Data Inserted successfully");
        	    location.replace("login-pg.php");
        	</script>
        	<?php

    	}else{
        	?>
        	<script>
        	    alert("Data Not Inserted");
        	</script>
        	<?php
    	}
    }else{
    	?>
        <script>
            alert("Password doesn't match");
        </script>
        <?php
	}
}

?>

<div class="container">
	<div class="header">
		<h2 class="heading">Create An Account ?</h2>
	</div>
	<form class="form" method="POST">
		<div class="form_control">
			<span><i class="fa fa-user icon"> </i></span>
			<input type="text" name="name" class="name" placeholder="Enter Your Name" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fa fa-envelope icon"> </i></span>
			<input type="email" name="email" class="email" placeholder="Enter Your Email ID" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fas fa-phone icon"> </i></span>
			<input type="number" name="mobile" class="mobile" placeholder="Enter Your Mobile Number" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fas fa-building icon"></i></span>
			<input type="text" name="dept" class="dept" placeholder="Enter Your Department" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fa fa-calendar icon"> </i></span>
			<input type="text" name="year" class="year" placeholder="Enter Year (FiY/SY/TY/FY)" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fa fa-edit icon"> </i></span>
			<input type="text" name="prn" class="prn" placeholder="Enter Your PRN" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fas fa-unlock icon"> </i></span>
			<input type="password" name="password" class="password" placeholder="Create Password" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fas fa-lock icon"> </i></span>
			<input type="password" name="confpassword" class="confpassword" placeholder="Confirm Your Password " autocomplete="off" required />
		</div>
		<div class="button">
			<input type="submit" name="submit" class="submit" value="Sign Up">
		</div>
	</form>

	<div class="footer">
		<p>Have An Account ? <a href="login-pg.php" target="_blank" class="login_pg">Log In Here</a></p>
	</div>
</div>

</body>
</html>