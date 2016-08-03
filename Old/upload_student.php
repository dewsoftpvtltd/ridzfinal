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

	$tableName = "Stud";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$connection = connect_db();
		$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
		$address= isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";
		$roll_no = isset($_POST['roll_no']) ? mysql_real_escape_string($_POST['roll_no']) : "";
		$phone_no = isset($_POST['phone_no']) ? mysql_real_escape_string($_POST['phone_no']) : "";
		$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
		$std_id = isset($_POST['std_id']) ? mysql_real_escape_string($_POST['std_id']) : "";
		$fall_id = isset($_POST['fall_id']) ? mysql_real_escape_string($_POST['fall_id']) : "";
		
		
		if(!empty($name) && !empty($address) && !empty($roll_no) && !empty($phone_no) && !empty($email) && !empty($std_id) && !empty($fall_id))
		{
			$query = "INSERT INTO   $tableName  (Name,Address,Roll_no,Phone_no,Email_Id,loginID,fall_ID) 
										 Values('$name','$address', '$roll_no','$phone_no','$email','$std_id','$fall_id') ";

			
										 
			$qur = mysql_query($query);
			
			mysql_close($connection);
			
			if($qur)
			{
				$url = "../student.php";
				redirect($url);
			}
			else
			{
				$url = "../student.php";
				redirect($url);
			}

		}
		

		mysql_close($connection);
	}

?>
