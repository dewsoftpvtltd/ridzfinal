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
	
	$tableName = "Courses";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$connection = connect_db();
		$semester = isset($_POST['semester']) ? mysql_real_escape_string($_POST['semester']) : "";
		$subject= isset($_POST['subject']) ? mysql_real_escape_string($_POST['subject']) : "";
		$time = isset($_POST['time']) ? mysql_real_escape_string($_POST['time']) : "";
		$day = isset($_POST['day']) ? mysql_real_escape_string($_POST['day']) : "";
		$fall_id = isset($_POST['fall_id']) ? mysql_real_escape_string($_POST['fall_id']) : "";
		$status = isset($_POST['status']) ? mysql_real_escape_string($_POST['status']) : "";
		$courseID = isset($_POST['courseID']) ? mysql_real_escape_string($_POST['courseID']) : "";
		
		if(!empty($courseID))
		{
			$query = "UPDATE  $tableName SET Semester = '$semester' ,Subject= '$subject', timming='$time', day='$day', Fall_ID='fall_id',
				status =  '$status', courseID= '$courseID',  where courseID=$courseID";
			
	
			$qur = mysql_query($query);
			
		}
		mysql_close($connection);
	}

?>