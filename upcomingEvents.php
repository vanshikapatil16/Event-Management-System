<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Upcoming Events</title>

	<link rel="stylesheet" type="text/css" href="css/upcomingEvent.css">
</head>
<body style="background-image: url('images/bg1.jfif');">

<div>
<?php

include 'database.php';

if (isset($_POST['submit'])) {
	$eventName = mysqli_real_escape_string($con, $_POST['eventName']);
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$description = mysqli_real_escape_string($con, $_POST['description']);

	$query = "insert into events(eventName, date, description) values ('$eventName', '$date', '$description') ";

	if (mysqli_query($con, $query)) {
		echo "<script>alert('Event Added Successfully !!')</script>";
		echo "<script>window.open('upcomingEvents.php', '_self')</script>";
	} else {
		echo "Error: ".mysqli_error($con);
	}
	mysqli_close($con);
}

?>
</div>

<div class="container">
	<div class="header">
		<article>Add Upcoming Events</article>
	</div>

	<div class="contents">
		<form class="form" method="POST">
			<input type="text" placeholder="Event Name" name="eventName" />
			<input type="date" name="date" />
			<textarea rows="3" cols="43" placeholder="Event Description" name="description"></textarea>
			<input type="submit" name="submit" value="Add Event">
		</form>
	</div>
</div>

</body>
</html>