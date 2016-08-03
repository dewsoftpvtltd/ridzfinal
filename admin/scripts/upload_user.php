<?php
//add this to the top
 require_once('Connection.php');
 
	function redirect($url)
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();

	}

	$tableName = "Login";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = Connection::connect();
		$uname = isset($_POST['uname']) ? e($connection,$_POST['uname']) : "";
		$passwd = isset($_POST['passwd']) ? e($connection,$_POST['passwd']) : "";
		$role = isset($_POST['role']) ? e($connection,$_POST['role']) : "";

		if(!empty($uname) && !empty($passwd) && !empty($role)  )
		{
			$query = "INSERT INTO   $tableName  (Uname,Password,Role) Values('$uname','$passwd', '$role') ";

			$qur = mysqli_query($connection, $query);

			mysqli_close($connection);

			if($qur)
			{
				$url = "../indexroles.php";
				redirect($url);
			}
			else
			{
				$url = "../indexroles.php";
				redirect($url);
			}

		}
		mysqli_close($connection);
	}

?>
