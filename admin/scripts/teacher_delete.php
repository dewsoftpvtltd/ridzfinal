<?php

    require_once('Connection.php');

	$tableName = "Teacher";
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{

		$connection = Connection::connect();
		$teacher_id = isset($_GET['userID']) ? e($_GET['userID']) : "";

		if(!empty($teacher_id))
		{
			$query = "DELETE FROM   $tableName  where userID=$teacher_id";

			$qur = mysqli_query($query);

		}
		mysqli_close($connection);
	}

?>
