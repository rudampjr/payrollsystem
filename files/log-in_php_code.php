<?php
	session_start();
	include('ps_connect_db2.php');
	
	function wash($var) //function used for checking data
		{
			if (get_magic_quotes_gpc())
				{
					$var=stripslashes($var);
				}
			return mysql_real_escape_string ($var);
		}
		
		$user=wash($_POST['psUsername']);
		$pass=wash($_POST['psPassword']);

		$sql="SELECT * FROM seg_ps_users WHERE username='$user' and password='$pass'"; //sql statement
		$result=mysql_query($sql); //query
		
		if ($result) //fetching  results
			{
				if (mysql_num_rows($result) > 0)
					{
						session_regenerate_id();
						$sample=mysql_fetch_assoc($result);
						$_SESSION['ID']=$sample['id'];
						$_SESSION['NAME']=$sample['firstname'];
						session_write_close();
						header('location: main.php'); //if true you will be redirected to home.php
						exit();
					}
				else
					{
//						echo '<b>'.'Incorrect Login Preferences!'.'</b>';
						header('location: error.php'); //if not you will be redirected to index.php
						exit();
					}
				}
		else
			{
				echo 'Error/s Detected: '.mysql_error(); //used for error purposes
			}
?>