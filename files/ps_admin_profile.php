<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="ps_includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<link rel="stylesheet" type="text/css" href="ps_theme/css/profile.css"/>
<link rel="stylesheet" type="text/css" href="ps_theme/css/floating_img.css"/>
<script src="ps_includes/bootstrap/js/bootstrap.min.js"></script>

<?php
// Create connection
require_once 'ps_connect_db.php'
?> 

</head>
<body>
<header>
	<h1>Admin Profile</h1>
</header>
<div id="content-admin-profile">
	<div id="employee_info">



		<form action="#" method="post">




		<?php

		$result = mysqli_query($con,"SELECT * FROM seg_ps_users");

echo "<table border=0 width=400 class=table table-striped >";

while($row = mysqli_fetch_array($result))
  {
  	?>
  <tr>
	  <td>Registered Last:</td>
	 <?php
	  echo "<td>" . $row['reg_date_time'] . "</td>";
	  ?>
	</tr>
	<tr>
	  <td>First Name:</td>
	 <?php
	  echo "<td style=font-weight:bold;>" . $row['firstname'] . "</td>";
	  ?>
	</tr>
	<tr>
	  <td>Last Name:</td>
	 <?php
	  echo "<td style=font-weight:bold;>" . $row['lastname'] . "</td>";
	  ?>
	</tr>
	<tr>
	  <td>Position:</td>
	 <?php
	  echo "<td>" . $row['position'] . "</td>";
	  ?>
	</tr>
	<tr>
	  <td>Address:</td>
	 <?php
	  echo "<td>" . $row['address'] . "</td>";
	  ?>
	</tr>
	<tr>
	  <td>Country:</td>
	 <?php
	  echo "<td>" . $row['country'] . "</td>";
	  ?>
	</tr>
	<tr>
	  <td>Zip Code:</td>
	 <?php
	  echo "<td>" . $row['zipcode'] . "</td>";
	}
	  ?>
	</tr>
	</table>
		</form>
	</div>
	<div id="profile_pic">


<!--FORM-->

<!--FILE UPLOAD-->

	<?php 
mysql_select_db('seg_dbtest',mysql_connect('localhost','root','','seg_dbtest'))or die(mysql_error());
?>

  <?php
if (isset($_POST['submit'])) {

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "ps_files/user_img/" . $_FILES["image"]["name"]);
    $location = "ps_files/user_img/" . $_FILES["image"]["name"];

    mysql_query("INSERT INTO seg_ps_users (image)
values ('$location')                                    
") or die(mysql_error());
    echo "success";
    header('location:ps_admin_profile.php');
}
?>




<?php 
	 $query=mysql_query("SELECT * from seg_ps_users")or die(mysql_error());
	 while($row=mysql_fetch_array($query)){
	 ?>
	 
    
	 <div id="upload_img">
    <img src="<?php echo $row['image']; ?>" width="150" height="150" alt="user" class="img-rounded img-polaroid">
</div>

	<?php 
	}
	?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" ENCTYPE="multipart/form-data" >
			<input type="file" name="image" id="file" required />
			<input class="btn btn-info btn-small upload_btn" type="submit" value="Upload" name="submit" />
			<div id="update_add">
				<a href="#" class="btn">Update</a>
				<a href="ps_add_newuser.php" target="_self" class="btn">Add New User</a>
			</div>
		</form>
	</div>
</div>
	<div class="clear"></div>
	<div id="divBottomRight">
	<a href="#"><img src="ps_theme/images/seglogo.png" alt="" title="Segworks Technologies Corporation"/></a>
</div>





<!--Page Generated-->
<?php $start_time = microtime(true);
$time_gen = number_format(microtime(true) - $start_time, 9);
?>

<pre class="prettyprint" id="page=generated" style="width: 90%; clear: both; margin: 0 auto; margin-bottom: 20px;">
 This page was generated in <span class="atv"><?php echo"$time_gen"; ?>
</span> seconds.
</pre>

</body>
</html>
<?php

mysqli_close($con);
?>