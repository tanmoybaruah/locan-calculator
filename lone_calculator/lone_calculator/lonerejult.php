<?php
 include 'database.php';
 session_start();

$login_id = $_SESSION['my_id_session'];


//this section is lone eligible  
$query= "SELECT * FROM `ragistration_user` WHERE id = '$login_id' ";
	 $sql=$conn->prepare($query);
	 $sql->execute();
	 $data=$sql->fetchAll(PDO::FETCH_OBJ);
	 foreach($data as $rows);

	 
	 $l_amount = $rows->lone_amount;
	 $l_time = $rows->lone_time;
	 $m_salary = $rows->salary;


	 $total_salary = ($m_salary * 12) / 2 * $l_time;
	 



	 if ($total_salary > $l_amount) {
	$eligibility_status = "Eligible";
     }else{
	$eligibility_status = "Not Eligible";
}

   
//this section is update database lone eligible

 $sql = "UPDATE `ragistration_user` SET 
   
    eligibility_s = '$eligibility_status' 
    WHERE id = '$login_id'  ";
  // use exec() because no results are returned
  $conn->exec($sql);

?>
<p style="text-align: center;">

<?php echo" your rejult is $eligibility_status"; ?> <br> Delete your data <a href="delet.php">click now</a>
</p>