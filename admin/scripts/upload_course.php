<?php
 	require_once('Connection.php');

	function redirect($url)
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();

	}

	$tableName = "Courses";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = Connection::connect();

		$semester = isset($_POST['semester']) ? e($_POST['semester']) : "";
		$subject = isset($_POST['subject']) ? e($_POST['subject']) : "";
		$fall_id = isset($_POST['fall_id']) ? e($_POST['fall_id']) : "";
		$time = isset($_POST['time']) ? e($_POST['time']) : "";
		$day = isset($_POST['day']) ? e($_POST['day']) : "";
		$status = isset($_POST['status']) ? e($_POST['status']) : "";


		if(!empty($semester) && !empty($subject) && !empty($time) && !empty($day) && !empty($status)&& !empty($fall_id))
		{

			$query = "INSERT INTO   $tableName  (Subject,Semester,Fall_ID,timing,day,status)
									Values('$subject','$semester','$fall_id','$time','$day','$status') ";

			$qur = mysqli_query($query);


			if($qur)
			{
				$url = "../courses.php?q=done";
				redirect($url);
			}
			else
			{
				$url = "../courses.php?q=err";
				redirect($url);
			}

		}
		mysqli_close($connection);
	}

?>
