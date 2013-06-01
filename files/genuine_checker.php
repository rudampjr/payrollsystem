<?php
	session_start(); //used to start up PHP Sessions
	if (!isset($_SESSION['ID']) || (trim($_SESSION['ID'])=='')) 
			{
				header('location:sample_login.php');
				exit();
			}
?>