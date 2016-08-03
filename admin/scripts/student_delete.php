<?php

  require_once('Connection.php');

	$tableName = "Stud";
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{

		$connection = Connection::connect();
		$std_id = isset($_GET['std_id']) ? e($_GET['std_id']) : "";+

		if(!empty($std_id))
		{
			$query = "DELETE INTO   $tableName  where std_id=$std_id";

			$qur = mysqli_query($query);

			



		}
		mysqli_close($connection);
	}
	else
	{

	}

?>















	mysql_close($conn);

    /* Output header */
    echo json_encode($stdData) ;
   ?>
