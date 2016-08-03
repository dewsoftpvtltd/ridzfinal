<?php

    require_once('Connection.php');

	$tableName = "Courses";
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{

		$connection = Connection::connect();
		$cID = isset($_GET['courseID']) ? e($_GET['courseID']) : "";

		if(!empty($cID))
		{
			$query = "DELETE FROM   $tableName  where courseID=$cID";

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
	else
	{
		echo " NOT GET";

	}

?>
