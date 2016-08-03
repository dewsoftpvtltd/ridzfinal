<?php
require_once('Connection.php');

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
		$connection = Connection::connect();
		
		$student_id = isset($_POST['std_id']) ? e($_POST['std_id']) : "";
		$courses_id= isset($_POST['courses_id']) ? e($_POST['courses_id']) : "";
		$obtained_marks = isset($_POST['obtained_marks']) ? e($_POST['obtained_marks']) : "";
		$grade = isset($_POST['grade']) ? e($_POST['grade']) : "";
		$gpa = isset($_POST['gpa']) ? e($_POST['gpa']) : "";
		$fall_id = isset($_POST['fall_id']) ? e($_POST['fall_id']) : "";


			$query = "INSERT INTO   $tableName  (Student_id,Subject,Obtained_marks,Grade, GPA,fall_id)
			Values($student_id,'$courses_id',$obtained_marks,'$grade',$gpa,'$fall_id') ";
			echo $query . " " ;
			$qur = mysqli_query($query);
			var_dump($qur);
			mysqli_close($connection);

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
