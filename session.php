<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['email']) || (trim($_SESSION['email']) == '')) {
    header("location:login.php");
    exit();
}
$session_id=$_SESSION['email'];

?>