<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<?php

include 'database.php';

if(isset($_POST['submit'])) {

	$email 		= 	$_POST['email'];
	$password 	= 	$_POST['password'];

	$email_search = "select * from register where email='$email'";
	$query = mysqli_query($con, $email_search);

	$email_count = mysqli_num_rows($query);

	if($email_count){
		$email_pass = mysqli_fetch_assoc($query);


		$db_pass = $email_pass['password'];

		$_SESSION['email'] = $email_pass['email'];

			$pass_decode = password_verify($password, $db_pass);

			if($pass_decode){
			?>
			<script>
				alert("Login Successful !!");
				location.replace("home-pg.php");
			</script>
			<?php

			} else {
				?>
        
        <script>
            alert("Invalid Password");
        </script>
        
        <?php
		}
	}else{
		?>
    <script>
        alert("Invalid Email Id");
    </script>
    <?php
	}
}

?>

<div class="container">
	<div class="header">
		<h2 class="heading">Log In</h2>
	</div>
	<form class="form" method="POST">
		<div class="form_control">
			<span><i class="fa fa-envelope icon"> </i></span>
			<input type="email" name="email" class="email" placeholder="Enter Registered Email ID" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fas fa-lock icon"> </i></span>
			<input type="password" name="password" class="password" placeholder="Enter Your Password" autocomplete="off" required />
		</div>
		<div class="button">
			<input type="submit" name="submit" class="submit" value="Log In">
		</div>
	</form>

	<div class="footer">
		<p>Don't Have An Account ? <a href="reg.php" class="reg_pg">Register Here</a></p>
		<p>Committee Login <a href="committee.php" class="reg_pg">Click Here</a></p>
	</div>
</div>

</body>
</html>