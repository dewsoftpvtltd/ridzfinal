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
	
	$tableName = "Teacher";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$connection = connect_db();
		$teacher_id = isset($_POST['userID']) ? mysql_real_escape_string($_POST['userID']) : "";
		$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
		$address= isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";
		$phone_no = isset($_POST['phone_no']) ? mysql_real_escape_string($_POST['phone_no']) : "";
		$qualification = isset($_POST['qualification']) ? mysql_real_escape_string($_POST['qualification']) : "";
		$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
		$t_id = isset($_POST['t_login_id']) ? mysql_real_escape_string($_POST['t_login_id']) : "";
		
		if(!empty($teacher_id))
		{
			$query = "UPDATE  $tableName SET Name = '$name' ,Address = '$address',Phone_no =  '$phone_no',Qualification = '$qualification',Email_Id= '$email',loginID = '$t_id'  where userID=$teacher_id";
			
	
			$qur = mysql_query($query);
			
		}
		mysql_close($connection);
	}

?>