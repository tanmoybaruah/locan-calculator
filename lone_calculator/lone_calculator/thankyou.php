<?php
include 'database.php';
session_start();

$name = $_SESSION['my_name_session'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>thank you</title>
</head>
<body style="text-align: center;">

	Dear <?php echo "$name"; ?> Your registration is succesfull ! You can login now <a href="login.php">login</a>

</body>
</html>