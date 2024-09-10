<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upcoming Events</title>
	<link rel="stylesheet" type="text/css" href="css/displayEvent.css">
</head>
<body style="background-image: url('images/bg2.png');">

<div class="header">
	<h2 class="heading">Upcoming Events</h2>
</div>
<hr class="upper"><br>

<div class="php">
<?php

include 'database.php';
$query = "select * from events";
$info = mysqli_query($con, $query);

$data = mysqli_num_rows($info);

if ($data != 0) {
	while ($result = mysqli_fetch_assoc($info)) {
		echo "<article><b> Event Name: </b>".$result['eventName']." ";
		echo "<article><b> Date: </b>".$result['date']." ";
		echo "<article><b> Event Description: </b>".$result['description']." ";
		echo "<hr><br>";

	}
	mysqli_close($con);
}
?>
</div>

</body>
</html>