<?php

    // Code to Connect mySQL Data Base
    require_once('Connection.php');

    $connection = Connection::connect();


	$query = "select Subject,Semester,Fall_ID,timing,day,status,courseID from `Courses`";
  $qur = mysqli_query($connection, $query);


	$courseData = array();
	$index = 0;
	while ($r = mysqli_fetch_array($qur))
	{
		extract($r);
		$courseData[$index] = array(
								"id"=>$courseID,
								"semester"=>$Semester,
								"subject"=>$Subject,
								"time"=>$timing,
								"day"=>$day,
								"status"=>$status
								);
		$query1 = "select FallName from `Fall` where Fall_ID=$Fall_ID";
		$qur1 = mysqli_query($connection,$query1);

		while ($f = mysqli_fetch_array($qur1))
		{
			extract($f);
			$courseData[$index]["fall"] = $FallName;
		}
		$index = $index + 1;
	}

	//mysqli_close($conn);

	 echo json_encode($courseData) ;
?>
