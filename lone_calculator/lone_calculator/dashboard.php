<?php
include 'database.php';
session_start();
error_reporting(0);

$login_id = $_SESSION['my_id_session'];

//This part login


$query= "SELECT * FROM `ragistration_user` WHERE id = '$login_id'  ";
 $sql=$conn->prepare($query);
 $sql->execute();
 $data=$sql->fetchAll(PDO::FETCH_OBJ);
 foreach($data as $rows);








//This part update


$Lone = $_POST['amount'];
$Time = $_POST['time'];
$Salary = $_POST['salary'];



  if (isset($_POST['update'])) {
    $sql = "UPDATE `ragistration_user` SET 
    lone_amount = '$Lone',
    lone_time = '$Time',
    salary = '$Salary' 
    WHERE id = '$login_id'  ";
  // use exec() because no results are returned
  $conn->exec($sql);
  
  header ("location: lonerejult.php");

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
            <label>name</label>
            <input readonly  type="text" name="name" class="form-control" value="<?php echo"$rows->ragis_name"; ?> ">
          </div>
        
        <div class="col-md-6">
            <label>phone</label>
            <input readonly type="number" name="phone" class="form-control" value="<?php echo"$rows->ragis_mobile"; ?>">
          </div>
        
         <div class="col-md-6">
            <label>email</label>
            <input readonly type="email" name="email" class="form-control" value="<?php echo"$rows->ragis_email"; ?>">
          </div>
          

          <div class="col-md-6">
            <label>Lone Amount</label>
            <input type="number" name="amount" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Lone Time</label>
           <select name="time" class="form-control">
             
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
             <option>5</option>
             <option>6</option>
             <option>7</option>
             <option>8</option>
             <option>9</option>
             <option>10</option>
           </select>
          </div>
          <div class="col-md-6">
            <label>Salary</label>
            <input type="number" name="salary" class="form-control">
          </div>
          <div class="col-md-12" style="text-align: center; padding-top: 20px;">
            <button name="update" class="btn btn-primary">Submit</button>
          </div>

          </div>
        </div>
        </div>
        
      </div>

    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>