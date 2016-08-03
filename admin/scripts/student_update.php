<?php

    require_once('Connection.php');

	$tableName = "Stud";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$connection = Connection::connect();
		$name = isset($_POST['name']) ? e($_POST['name']) : "";
		$address= isset($_POST['address']) ? e($_POST['address']) : "";
		$roll_no = isset($_POST['roll_no']) ? e($_POST['roll_no']) : "";
		$phone_no = isset($_POST['phone_no']) ? e($_POST['phone_no']) : "";
		$email = isset($_POST['email']) ? e($_POST['email']) : "";
		$s_id = isset($_POST['std_id']) ? e($_POST['std_id']) : "";
		$fall_id = isset($_POST['fall_id']) ? e($_POST['fall_id']) : "";

		if(!empty($s_id))
		{
			$query = "UPDATE  $tableName SET Name = '$name' ,Address = '$address',Roll_no='$roll_no',fall_id='$fall_id',loginID='$s_id',
				Phone_no =  '$phone_no',Email_Id= '$email',  where userID=$std_id";


			$qur = mysqli_query($query);

		}
		mysqli_close($connection);
	}

?>
