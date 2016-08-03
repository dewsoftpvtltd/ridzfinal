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

	$tableName = "TeacherFall";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = connect_db();
		$name = isset($_POST['t_id']) ? mysql_real_escape_string($_POST['t_id']) : "";
		
		$fall_id = isset($_POST['fall_id']) ? mysql_real_escape_string($_POST['fall_id']) : "";
		
		
		if(!empty($name) && !empty($fall_id))
		{
			$query = "INSERT INTO   $tableName  (Teacher_ID,Fall_Id) Values('$name','$fall_id') ";			
										 
			$qur = mysql_query($query);
			
			mysql_close($connection);
			
			if($qur)
			{
				$url = "../TeacherFall.php";
				redirect($url);
			}
			else
			{
				$url = "../TeacherFall.php";
				redirect($url);
			}

		}
		

		mysql_close($connection);
	}

?>
