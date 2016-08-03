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

	$tableName = "Login";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = connect_db();
		$uname = isset($_POST['uname']) ? mysql_real_escape_string($_POST['uname']) : "";
		$passwd = isset($_POST['passwd']) ? mysql_real_escape_string($_POST['passwd']) : "";
		$role = isset($_POST['role']) ? mysql_real_escape_string($_POST['role']) : "";
		
		if(!empty($uname) && !empty($passwd) && !empty($role)  )
		{
			$query = "INSERT INTO   $tableName  (Uname,Password,Role) Values('$uname','$passwd', '$role') ";
			
			$qur = mysql_query($query);
			
			mysql_close($connection);
			
			if($qur)
			{
				$url = "../index.php";
				redirect($url);
			}
			else
			{
				$url = "../index.php";
				redirect($url);
			}

		}
		mysql_close($connection);
	}

?>
