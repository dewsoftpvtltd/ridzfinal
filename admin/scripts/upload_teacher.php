<?php
 	require_once('Connection.php');

	function redirect($url)
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();

	}

	$tableName = "Teacher";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$connection = Connection::connect();

		$name = isset($_POST['name']) ? e($_POST['name']) : "";
		$address= isset($_POST['address']) ? e($_POST['address']) : "";
		$phone_no = isset($_POST['phone_no']) ? e($_POST['phone_no']) : "";
		$qualification = isset($_POST['qualification']) ? e($_POST['qualification']) : "";
		$email = isset($_POST['email']) ? e($_POST['email']) : "";
		$t_id = isset($_POST['t_login_id']) ? e($_POST['t_login_id']) : "";

		if(!empty($name) && !empty($address) && !empty($phone_no) &&!empty($qualification) && !empty($email) && !empty($t_id) )
		{

			$query = "INSERT INTO   $tableName  (Name, Address, Phone_no, Qualification, Email_Id, loginID)
										Values('$name','$address', '$phone_no','$qualification','$email','$t_id') ";



			$qur = mysqli_query($query);

			

			if($qur)
			{
				$url = "../teacher.php";
				redirect($url);
			}
			else
			{
				$url = "../teacher.php";
				redirect($url);
			}

		}
		mysqli_close($connection);
	}

?>
