<?php
	include('genuine_checker.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Payroll System | SegWorks Technologies Corporation</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="http://fonts.googleapis.com/css?family=Mouse+Memoirs" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="ps_theme/css/reset.css"/>
<link href="ps_includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<link rel="stylesheet" type="text/css" href="ps_theme/css/style.css"/>
<script type="text/javascript" src="ps_theme/js/modernizr.custom.58301.js"></script>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/modernizr.custom.58301.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<header>
	<div id="header-container">
		<div class="user">
<?php
	include('ps_connect_db2.php'); 
	$oper_id=$_SESSION['ID']; //convertion of $_SESSION['ID'] to $oper_id
	$result = mysql_query("SELECT * FROM seg_ps_users where id='$oper_id'"); //this part tackles on querying, needed is your mysql ideas
			while($row = mysql_fetch_array($result)) // start of fetching results
						{
						echo "<p style='font-size:22px;'>"."Welcome! &nbsp;&nbsp;&nbsp;"."<span style='color:#0095D1;'>".'<img src=" '.$row['image'].'" alt=user class=img-polaroid style=width:60px;height:60px; />'.
						"</span>"; //echo means to shoutout result
						echo "<a href='out.php' target='_top' style='font-size:22px;' >&nbsp;&nbsp;&nbsp;Log-Out</a></p>";
						}
	?>
</div>

		<h1><a href="#">Payroll Management <span class="seglogo">System</span></a></h1>
		<span id="date_time"></span>
	</div>
</header>
<script type="text/javascript" src="ps_theme/js/date_time.js"></script>
  <script type="text/javascript">window.onload = date_time('date_time');</script>
</body>
</html>