<?php

session_start();

session_destroy();

?>
<script type="text/javascript">
	alert('You are Successfully Logged Out !!');
	location.replace("login-pg.php");
</script>