<?php
include "database.php";
session_start();
error_reporting(0);
$delet_id = $_SESSION['my_id_session'];

$sql = "DELETE FROM ragistration_user WHERE id=$delet_id";

  // use exec() because no results are returned
  $conn->exec($sql);

 header ("location: register.php");

?>