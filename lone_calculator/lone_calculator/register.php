<?php
 include 'database.php';
 error_reporting(0);
 session_start();
 


$your_name = $_POST['r_name'];
$your_mobile = $_POST['r_phone'];
$your_email = $_POST['r_email'];
$password = $_POST['r_password'];

$stong_passqord = md5($password);


$_SESSION['my_name_session'] = $your_name;




  if (isset($_POST['register'])) {
  	$sql = "INSERT INTO `ragistration_user` (`ragis_name`,`ragis_mobile`,`ragis_email`,`ragis_password`) VALUES ('$your_name','$your_mobile','$your_email','$stong_passqord')";
  // use exec() because no results are returned
  $conn->exec($sql);
  //$last_id = $conn->lastInsertId();

  header ("location: thankyou.php");

  }

  

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>customer register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST">
    	<div class="container">
    		<div class="row" >
    			<div class="col-md-6">
    				<label>Name</label>
    				<input type="text" name="r_name" class="form-control">
    			</div>
    			<div class="col-md-6">
    				<label>Phone</label>
    				<input type="number" name="r_phone" class="form-control">
    			</div>
    			<div class="col-md-6">
    				<label>Email</label>
    				<input type="email" name="r_email" class="form-control">
    			</div>
    			<div class="col-md-6">
    				<label>Password187</label>
    				<input type="password" name="r_password" class="form-control">
    			</div>
    			<div class="col-md-12" style="text-align: center; padding-top: 20px;">
    				<button name="register" class="btn btn-primary" >submit</button>
    			</div>
    		</div>
    		
    	</div>




    </form>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>