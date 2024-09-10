<?php
include 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    <link rel="stylesheet" type="text/css" href="css/home-pg.css">

</head>
<body>

<header>
<nav class="navbar">
<div class="logo">
    <a href="https://dbatu.ac.in" target="_blank" class="dbatu"> DBATU </a>
</div>
<div class="menu">
    <ul class="ul">
        <li class="nav"><a href="#" class="active li"> Home </a></li>
        <li class="nav"><a href="displayEvents.php" class="li"> Upcoming Events </a></li>
        <li class="nav"><a href="pastevents.php" class="li"> Past Events </a></li>
        <li class="nav"><a href="displayFunds.php" class="li"> Funds </a></li>
    </ul>
    </div>

    <div class="logout_btn">
       <a href="logout.php">Log out</a>
    </div>
</nav>

<img src="images/event.jpg" class="img">
<div class="center_content">
    <h1>Welcome to Event Diary</h1>
    <ul type="square" class="square">
        <li> You can view Information about Upcoming Events, Past Events & Fund Details Here.</li>
        <li> By clicking on Following Menus </li>
        <li>For visiting the Official Site of our college, click on DBATU </li>
    </ul>
</div>

</header>

</body>
</html>
