<?php
	session_start();
	if (isset($_SESSION['name'])){
		echo $_SESSION['name'];
	}
	else{
		echo 1;
	}
?>