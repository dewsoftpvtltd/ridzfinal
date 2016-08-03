<?php

//add this to the top
 require_once('Connection.php');

	$tableName = "Courses";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$connection = Connection::connect();
    
		$semester = isset($_POST['semester']) ? e($_POST['semester']) : "";
		$subject= isset($_POST['subject']) ? e($_POST['subject']) : "";
		$time = isset($_POST['time']) ? e($_POST['time']) : "";
		$day = isset($_POST['day']) ? e($_POST['day']) : "";
		$fall_id = isset($_POST['fall_id']) ? e($_POST['fall_id']) : "";
		$status = isset($_POST['status']) ? e($_POST['status']) : "";
		$courseID = isset($_POST['courseID']) ? e($_POST['courseID']) : "";

		if(!empty($courseID))
		{
			$query = "UPDATE  $tableName SET Semester = '$semester' ,Subject= '$subject', timming='$time', day='$day', Fall_ID='fall_id',
				status =  '$status', courseID= '$courseID',  where courseID=$courseID";


			$qur = mysqli_query($query);

		}
		mysqli_close($connection);
	}

?>
