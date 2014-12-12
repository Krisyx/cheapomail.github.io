<?php

	session_start();
	session_destroy();

	header("Location: http://localhost/CheapoMail2/index.php");
?>