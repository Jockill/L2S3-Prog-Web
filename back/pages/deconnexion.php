<?php
	setcookie("username", "", time()-3600, "/");
	setcookie("ppurl", "", time()-3600, "/");
	header("Location: http://localhost:8000/pages/index.php");
	exit;
?>
