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
	
	$tableName = "Teacher";    
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
	
		$connection = connect_db();
		$teacher_id = isset($_GET['userID']) ? mysql_real_escape_string($_GET['userID']) : "";
		
		if(!empty($teacher_id))
		{
			$query = "DELETE FROM   $tableName  where userID=$teacher_id";
			
			$qur = mysql_query($query);
			
		}
		mysql_close($connection);
	}

?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	