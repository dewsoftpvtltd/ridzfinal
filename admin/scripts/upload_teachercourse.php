<?php
 	require_once('Connection.php');

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
		$connection = Connection::connect();

    $name = isset($_POST['t_id']) ? e($connection,$_POST['t_id']) : "";

		$course_id = isset($_POST['course_id']) ? e($connection,$_POST['course_id']) : "";

		$course_id = substr($course_id,0,-1);

		$courses=explode(",",$course_id);

    $coursesSize = sizeOf($courses);

    if(!empty($name) && !empty($course_id))
    {
        foreach($courses as $key => $course){
        
				$query = "INSERT INTO   $tableName  (Teacher_ID,Course_ID) Values($name,$course)";

				$qur = mysqli_query($connection,$query);

}

			if($qur)
			{
				$url = "../TeacherCourse.php";
				redirect($url);
			}
			else
			{
				echo "Rida's bad work error";
			}

		}
		mysqli_close($connection);
	}

?>
