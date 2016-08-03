<?php
 	require_once('Connection.php');
	function redirect($url)
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();

	}

	$tableName = "Fall";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = connect_db();
		$name = isset($_POST['fall_name']) ? e($_POST['fall_name']) : "";
		echo"$name";
		if(!empty($name)  )
		{
			$query = "INSERT INTO   $tableName  (FallName) Values('$name') ";
			echo"query";
			$qur = mysqli_query($query);

			

			if($qur)
			{
				$url = "../fall.php";
				redirect($url);
			}
			else
			{
				$url = "../fall.php";
				redirect($url);
			}

		}
		mysqli_close($connection);
	}

?>
