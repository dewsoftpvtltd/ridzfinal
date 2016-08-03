<?php
 	require_once('Connection.php');

	function redirect($url)
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();

	}

	$tableName = "Stud";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = Connection::connect();

		$name = isset($_POST['name']) ? e($_POST['name']) : "";
		$address= isset($_POST['address']) ? e($_POST['address']) : "";
		$roll_no = isset($_POST['roll_no']) ? e($_POST['roll_no']) : "";
		$phone_no = isset($_POST['phone_no']) ? e($_POST['phone_no']) : "";
		$email = isset($_POST['email']) ? e($_POST['email']) : "";
		$std_id = isset($_POST['std_id']) ? e($_POST['std_id']) : "";
		$fall_id = isset($_POST['fall_id']) ? e($_POST['fall_id']) : "";


		if(!empty($name) && !empty($address) && !empty($roll_no) && !empty($phone_no) && !empty($email) && !empty($std_id) && !empty($fall_id))
		{
			$query = "INSERT INTO   $tableName  (Name,Address,Roll_no,Phone_no,Email_Id,loginID,fall_ID)
										 Values('$name','$address', '$roll_no','$phone_no','$email','$std_id','$fall_id') ";



			$qur = mysqli_query($query);



			if($qur)
			{
				$url = "../student.php";
				redirect($url);
			}
			else
			{
				$url = "../student.php";
				redirect($url);
			}

		}


		mysqli_close($connection);
	}

?>
