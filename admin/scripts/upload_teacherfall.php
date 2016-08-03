<?php
 	require_once('Connection.php');

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
		$connection = Connection::connect();

		$name = isset($_POST['t_id']) ? e($connection,$_POST['t_id']) : "";

		$fall_id = isset($_POST['fall_id']) ? e($connection,$_POST['fall_id']) : "";

    $fall_id = substr($fall_id,0,-1);

    $falls=explode(",",$fall_id);

    $fallSize = sizeOf($falls);


		if(!empty($name) && !empty($fall_id))
		{
      foreach($falls as $key=> $fall)
        {
          $query = "INSERT INTO   $tableName  (Teacher_ID,Fall_Id) Values($name,$fall) ";

          $qur = mysqli_query($connection,$query);


        }

		}




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

		mysqli_close($connection);
	}

?>
