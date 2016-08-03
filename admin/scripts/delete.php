<?php

    require_once('Connection.php');

	$tableName = "Stud";
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{

    $connection = Connection::connect();
		$std_id = isset($_GET['stdID']) ? e($_GET['stdID']) : "";

		if(!empty($std_id))
		{
			$query = "DELETE FROM   $tableName  where std_Id=$std_id";

			$qur = mysqli_query($query);
			if($qur){
				echo " DEL";
			}
			else
			{
				echo " NOT DEL";
			}




		}
		mysqli_close($connection);
	}
	else{
		echo " NOT GET";

	}

?>
