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
	
	$tableName = "Stud";    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$connection = connect_db();
		$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
		$address= isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";
		$roll_no = isset($_POST['roll_no']) ? mysql_real_escape_string($_POST['roll_no']) : "";
		$phone_no = isset($_POST['phone_no']) ? mysql_real_escape_string($_POST['phone_no']) : "";
		$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
		$s_id = isset($_POST['std_id']) ? mysql_real_escape_string($_POST['std_id']) : "";
		$fall_id = isset($_POST['fall_id']) ? mysql_real_escape_string($_POST['fall_id']) : "";
		
		if(!empty($s_id))
		{
			$query = "UPDATE  $tableName SET Name = '$name' ,Address = '$address',Roll_no='$roll_no',fall_id='$fall_id',loginID='$s_id',
				Phone_no =  '$phone_no',Email_Id= '$email',  where userID=$std_id";
			
	
			$qur = mysql_query($query);
			
		}
		mysql_close($connection);
	}

?>