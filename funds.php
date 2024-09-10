<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fund Information</title>

	<link rel="stylesheet" type="text/css" href="css/upcomingEvent.css">
</head>
<body>

<div>
<?php

include 'database.php';

if (isset($_POST['submit'])) {
	$fundName = mysqli_real_escape_string($con, $_POST['fundName']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$description = mysqli_real_escape_string($con, $_POST['description']);

	$query = "insert into funds(fundName, date, description) values ('$fundName', '$date', '$description') ";

	if (mysqli_query($con, $query)) {
		echo "<script>alert('Fund Details Added Successfully !!')</script>";
		echo "<script>window.open('funds.php', '_self')</script>";
	} else {
		echo "Error: ".mysqli_error($con);
	}
	mysqli_close($con);
}

?>
</div>

<div class="container">
	<div class="header">
		<article>Add Funds Details</article>
	</div>

	<div class="contents">
		<form class="form" method="POST">
			<input type="text" placeholder="Fund Provider Name" name="fundName" />
			<input type="date" name="date" />
			<textarea rows="3" cols="43" placeholder="Fund Deatils" name="description"></textarea>
			<input type="submit" name="submit" value="Add Fund Details">
		</form>
	</div>
</div>

</body>
</html>