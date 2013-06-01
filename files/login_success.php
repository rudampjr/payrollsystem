<?php
session_start();
if(!session_is_registered(psUsername)){
header("location:login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>