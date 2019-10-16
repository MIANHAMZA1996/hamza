<?php
	session_start();
	session_destroy();
	header("location:check.php");die;
?>	