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

	$tableName = "result_grade";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{//std Id, subject, obtained, grade, gpa , fall
		$connection = connect_db();
		$student_id = isset($_POST['std_id']) ? mysql_real_escape_string($_POST['std_id']) : "";
		$courses_id= isset($_POST['courses_id']) ? mysql_real_escape_string($_POST['courses_id']) : "";
		$obtained_marks = isset($_POST['obtained_marks']) ? mysql_real_escape_string($_POST['obtained_marks']) : "";
		$grade = isset($_POST['grade']) ? mysql_real_escape_string($_POST['grade']) : "";
		$gpa = isset($_POST['gpa']) ? mysql_real_escape_string($_POST['gpa']) : "";
		$fall_id = isset($_POST['fall_id']) ? mysql_real_escape_string($_POST['fall_id']) : "";
 
		echo $fall_id;
			$query = "INSERT INTO   $tableName  (Student_id,Subject,Obtained_marks,Grade, GPA,fall_id) 
			Values($student_id,'$courses_id',$obtained_marks,'$grade',$gpa,'$fall_id') ";
			echo $query . " " ;
			$qur = mysql_query($query);
			var_dump($qur);
			mysql_close($connection);
			
/*			if($qur)
			{
				$url = "../student_result.php";
				redirect($url);
			}
			else
			{
				$url = "../student_result.php";
				redirect($url);
			}
*/
	}

?>