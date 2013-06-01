<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="ps_includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<link rel="stylesheet" type="text/css" href="ps_theme/css/error.css"/>
<script type="text/javascript" src="ps_theme/js/jquery-1.9.1.min.js"></script>
<link href="ps_includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="ps_includes/bootstrap/js/bootstrap.min.js"></script>
<title>Error Message</title>
</head>


<div id="error">
<!--we make our own xammp alike error message-->
<h1>Incorrect Login Preferences!</h1>
<p> The username or password or both, that you have entered is incorrect. Please check it and login again. </p>
<h2>Validation Error</h2>
<?php
echo '<p>'.'&nbsp;&nbsp;&nbsp;'.'<i>'.'<a href="sample_login.php" style=font-size:20px;color:red;>'.'login now'.'</a>'.'</i>'.'<br/>';
echo '&nbsp;&nbsp;&nbsp;'.'<i style="font-size:13px">'.date("m/d/y").'</i>'.'<br/>';  //date function was used... 
echo '&nbsp;&nbsp;&nbsp;'.'<i style=font-size:13px;margin-top:20px;>'.'Powered By: Segworks'.'</i>'.'</p>'; ?>
<!--end of message-->
</div>
<body>
</body>
</html>
