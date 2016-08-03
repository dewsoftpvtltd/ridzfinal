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
		$connection = connect_db();
		
		$semester = isset($_POST['semester']) ? mysql_real_escape_string($_POST['semester']) : "";
		$subject = isset($_POST['subject']) ? mysql_real_escape_string($_POST['subject']) : "";
		$fall_id = isset($_POST['fall_id']) ? mysql_real_escape_string($_POST['fall_id']) : "";
		$time = isset($_POST['time']) ? mysql_real_escape_string($_POST['time']) : "";
		$day = isset($_POST['day']) ? mysql_real_escape_string($_POST['day']) : "";
		$status = isset($_POST['status']) ? mysql_real_escape_string($_POST['status']) : "";
				
		
		if(!empty($semester) && !empty($subject) && !empty($time) && !empty($day) && !empty($status)&& !empty($fall_id))
		{
			
			$query = "INSERT INTO   $tableName  (Subject,Semester,Fall_ID,timing,day,status) 
									Values('$subject','$semester','$fall_id','$time','$day','$status') ";
			
			$qur = mysql_query($query);
			
						
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
		mysql_close($connection);
	}

?>