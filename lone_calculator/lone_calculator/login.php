<?php
session_start();
error_reporting(0);
include 'database.php';

$your_email = $_POST['l_email'];
$password = $_POST['l_password'];

$encrypted_password = md5($password);

if (isset($_POST['login'])) {
	$query= "SELECT * FROM `ragistration_user` WHERE ragis_email = '$your_email' AND ragis_password =  '$encrypted_password' ";
	 $sql=$conn->prepare($query);
	 $sql->execute();
	 $data=$sql->fetchAll(PDO::FETCH_OBJ);
	 foreach($data as $rows);

	 $id = $rows->id;
	 $my_name = $rows->ragis_name;
	 $my_mobile = $rows->ragis_mobile;
	 

	 if ($id == 0) {
	 	$message = 'User Not Found.';
	 }elseif ($id == '') {
	 	$message = 'User Not Found.';
	 }else{
	 	$message = 'Logged in Succesfully';
	 	$_SESSION['my_id_session'] = $id;
	 	//$_SESSION['my_name_session'] = $my_name;
	 	//$_SESSION['my_mobile_session'] = $my_mobile;
	 	header("Location: dashboard.php");
	 }
	 
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  	
    
<form method="POST">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<label>Your Email</label>
		<input type="email" name="l_email" class="form-control">
				</div>
				<div class="col-md-6">
					<label>Your Password</label>
		<input type="password" name="l_password" class="form-control">
				</div>
				<div class="col-md-12" style="text-align: center; padding-top: 20px;">
					<button name="login" class="btn btn-primary">Login</button>
				</div>
			</div>
			
		</div>
		
		
	
		
	</form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
