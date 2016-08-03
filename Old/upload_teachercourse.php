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

	$tableName = "TeacherCourse";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = connect_db();
		$name = isset($_POST['t_id']) ? mysql_real_escape_string($_POST['t_id']) : "";
		
		$course_id = isset($_POST['course_id']) ? mysql_real_escape_string($_POST['course_id']) : "";
	
		$str=$_POST['course_id'];
		echo $str;
		$course=explode("",$str);
		echo $course;
		
		if(!empty($name) && !empty($course_id))
		{
			
				$query = "INSERT INTO   $tableName  (Teacher_ID,Course_ID) Values('$name','$course_id') ";			
										 
				$qur = mysql_query($query);
			
			
			
			mysql_close($connection);
			
			if($qur)
			{
				$url = "../TeacherCourse.php";
				redirect($url);
			}
			else
			{
				$url = "../TeacherCourse.php";
				redirect($url);
			}

		}
		

		mysql_close($connection);
	}

?>
