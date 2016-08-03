<?php
	session_start();
	unset($_SESSION["login"]);

	ob_start();
	header('Location: ../index.php' );
	ob_end_flush();
	die();

?>
