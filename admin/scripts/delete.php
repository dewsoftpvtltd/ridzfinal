<?php
 
    function connect_db()
	{

		$MySQL_Host         = "mysql.serversfree.com";
		$MySQL_User         = "u957103950_mbins";
		$MySQL_User_PASS    = "trrhfyp4";
		$MySQL_Database     = "u957103950_usrdb";
    
		$conn = mysql_connect($MySQL_Host, $MySQL_User, $MySQL_User_PASS) or die ("Unable to connect! " . mysql_error() );
	 
		mysql_select_db($MySQL_Database, $conn) or die ("Unable to select database " . mysql_error()  );
		
		return $conn;
	}
	
	$tableName = "Stud";    
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
	
		$connection = connect_db();
		$std_id = isset($_GET['stdID']) ? mysql_real_escape_string($_GET['stdID']) : "";
		echo "$std_id ";
		if(!empty($std_id))
		{
			$query = "DELETE FROM   $tableName  where std_Id=$std_id";
			echo " $query";
			$qur = mysql_query($query);
			if($qur){
				echo " DEL";
			}
			else
			{
				echo " NOT DEL";
			}
			
			
			

		}
		mysql_close($connection);
	}
	else{
		echo " NOT GET";
		
	}

?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	