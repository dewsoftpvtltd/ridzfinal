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

	$tableName = "Teacher";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		echo"hello";
		$connection = connect_db();
		$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
		$address= isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";
		$phone_no = isset($_POST['phone_no']) ? mysql_real_escape_string($_POST['phone_no']) : "";
		$qualification = isset($_POST['qualification']) ? mysql_real_escape_string($_POST['qualification']) : "";
		$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
		$t_id = isset($_POST['t_login_id']) ? mysql_real_escape_string($_POST['t_login_id']) : "";
		
		echo $name;
		echo $address;
		if(!empty($name) && !empty($address) && !empty($phone_no) &&!empty($qualification) && !empty($email) && !empty($t_id) )
		{
			echo"hira";
			$query = "INSERT INTO   $tableName  (Name, Address, Phone_no, Qualification, Email_Id, loginID) 
										Values('$name','$address', '$phone_no','$qualification','$email','$t_id') ";
			
			echo $query;
			
			$qur = mysql_query($query);
			
			mysql_close($connection);
			
			if($qur)
			{
				$url = "../teacher.php";
				redirect($url);
			}
			else
			{
				$url = "../teacher.php";
				redirect($url);
			}

		}
		mysql_close($connection);
	}

?>