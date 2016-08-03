<?php

    require_once('Connection.php');

	$tableName = "Teacher";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$connection = Connection::connect();
		$teacher_id = isset($_POST['userID']) ? e($_POST['userID']) : "";
		$name = isset($_POST['name']) ? e($_POST['name']) : "";
		$address= isset($_POST['address']) ? e($_POST['address']) : "";
		$phone_no = isset($_POST['phone_no']) ? e($_POST['phone_no']) : "";
		$qualification = isset($_POST['qualification']) ? e($_POST['qualification']) : "";
		$email = isset($_POST['email']) ? e($_POST['email']) : "";
		$t_id = isset($_POST['t_login_id']) ? e($_POST['t_login_id']) : "";

		if(!empty($teacher_id))
		{
			$query = "UPDATE  $tableName SET Name = '$name' ,Address = '$address',Phone_no =  '$phone_no',Qualification = '$qualification',Email_Id= '$email',loginID = '$t_id'  where userID=$teacher_id";


			$qur = mysqli_query($query);

		}
		mysqli_close($connection);
	}

?>
