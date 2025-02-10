<?php  

	session_destroy();

	header("Location: login_scr.php?logout=success");
	exit;
?>