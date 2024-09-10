<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Committee Login</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<div class="container">
	<div class="header">
		<h2 class="heading">Committee Log In</h2>
	</div>
	<form class="form" method="POST">
		<div class="form_control">
			<span><i class="fas fa-user icon"> </i></span>
			<input type="text" name="username" id="username" placeholder="Enter Your Username" autocomplete="off" required />
		</div>
		<div class="form_control">
			<span><i class="fas fa-lock icon"> </i></span>
			<input type="password" name="password" id="password" placeholder="Enter Your Password" autocomplete="off" required />
		</div>
		<div class="button">
			<input type="submit" name="submit" class="submit" value="Log In" onclick="validation()">
		</div>
	</form>
</div>


<script type="text/javascript">
	
function validation() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	if (username=="admin" && password=="admin@123") {
		alert('Successfully Logged In !!');
		window.open("committeeHome.php");
	} else {
		alert("Something Went Wrong !!");
		return;
	}
}

</script>

</body>
</html>