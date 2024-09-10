<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fund Details</title>
	<link rel="stylesheet" type="text/css" href="css/displayEvent.css">
</head>
<body style="background-image: url('images/bg2.png');">

<div class="header">
	<h2 class="heading">Fund Information</h2>
</div>
<hr class="upper"><br>

<div class="php">
<?php

include 'database.php';
$query = "select * from funds";
$info = mysqli_query($con, $query);

$data = mysqli_num_rows($info);

if ($data != 0) {
	while ($result = mysqli_fetch_assoc($info)) {
		echo "<article><b> Fund Provider Name: </b>".$result['fundName']." ";
		echo "<article><b> Date: </b>".$result['date']." ";
		echo "<article><b> Fund Description: </b>".$result['description']." ";
		echo "<hr><br>";

	}
	mysqli_close($con);
}
?>
</div>

</body>
</html>