<?php

require_once 'ps_connect_db.php';



?>

<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>HTML Frames Example - Content</title>
<!--ps css-->

<link rel="stylesheet" type="text/css" href="ps_theme/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="ps_theme/css/style.css"/>
<link href="ps_includes/bootstrap/css/prettify.css" rel="stylesheet" media="screen">
<link href="ps_includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<!--ps js-->
 <script src="ps_theme/js/jquery-1.9.1.min.js"></script>

 <script src="ps_includes/bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="ps_theme/js/modernizr.custom.58301.js"></script>

 <script>

$(document).ready(function(){

    $(window).load(function() {

    	$("#loading").fadeOut('fast', function () {
    $("#body-wrapper").fadeIn(3000);
  });
    	

    	 })


});
</script>

<style type="text/css">
#body-wrapper {
	font-family:verdana,arial,sans-serif;
	font-size:10pt;
	margin:30px;
	background-color:#fff;
	
	}
#loading {

position: fixed;
width: 100%;
height: 100%;
padding-top: 15%;
background: #fff;
z-index: 100;
overflow: hidden;
text-align: center;
}
</style>
</head>
<body>

<div id="loading"><img src="ps_theme/images/ajax-loader.gif" /></div>
<div id="body-wrapper">

<h2>Import</h2>

<?php   

if (!isset($_FILES['file_import'])) {

?>
<p> <span class="label label-info">Howdy!</span> Upload your <strong>Biometric Excel</strong> file and we’ll import the <abbr title="Employees Name">employees name</abbr>, <abbr title="Employees ID">employees id</abbr>, <abbr title="Employees Date and Time">employees date-time</abbr>  and <abbr title="Employees Status">employees status</abbr>  into this site.</p>
<p>Choose a <strong>Microsoft Excel</strong>  ( <code>.xlsx</code> or <code>.xls</code> )file to upload, then click import.</p>


	<form enctype="multipart/form-data" id="import-upload-form" method="post" class="wp-upload-form" action="#">
		<p>
		<label for="upload">Choose a file from your computer:</label> (Maximum size: 2 MB)
		<input type="file" id="upload" name="file_import" size="25">
		
		</p>
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="btn btn-small btn-primary" value="Import File">
		</p>
	</form>
<?php
}

else {

	$error = array();
	$allowed_ext = array('jpg','jpeg','png','gif');

	$file_name = $_FILES['file_import']['name'];
	$file_ext= explode('.', $file_name);
	$file_size = $_FILES['file_import']['size'];
	$file_tmp = $_FILES['file_import']['tmp_name'];


	



}




?>


<!--page generate-->
<?php 
$start_time = microtime(true); 
$time_gen = number_format(microtime(true) - $start_time, 9);
?>
<pre class="prettyprint" id="page=generated" style=" position: absolute; bottom: 0; width: 90%; ">
This page was generated in <span class="atv"><?php echo"$time_gen"; ?></span> seconds.
</pre>


</div>
</body>
</html>

<?php
mysqli_close($con);
?>