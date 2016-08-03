<?php
 	function connect_db()
	{

    $MySQL_Host         = "127.0.0.1";
    $MySQL_User         = "homestead";
    $MySQL_User_PASS    = "secret";
    $MySQL_Database     = "ridz";

    try{
      $conn = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'ridz');
      echo 'done';
}catch(Exception $e){
  echo $e->getMessage();
}

		return $conn;
	}
	function redirect($url)
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();

	}

	$tableName = "Login";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'ridz');
		$uname = isset($_POST['uname']) ? mysqli_real_escape_string($connection,$_POST['uname']) : "";
		$passwd = isset($_POST['passwd']) ? mysqli_real_escape_string($connection,$_POST['passwd']) : "";
		$role = isset($_POST['role']) ? mysqli_real_escape_string($connection,$_POST['role']) : "";

		if(!empty($uname) && !empty($passwd) && !empty($role)  )
		{
			$query = "INSERT INTO   $tableName  (Uname,Password,Role) Values('$uname','$passwd', '$role') ";

			$qur = mysqli_query($connection, $query);

			mysqli_close($connection);

			if($qur)
			{
				$url = "../indexroles.php";
				redirect($url);
			}
			else
			{
				$url = "../indexroles.php";
				redirect($url);
			}

		}
		mysql_close($connection);
	}

?>
