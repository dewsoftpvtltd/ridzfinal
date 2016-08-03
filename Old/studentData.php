<?php
 
    // Code to Connect mySQL Data Base
    $MySQL_Host         = "mysql.serversfree.com";
    $MySQL_User         = "u957103950_mbins";
    $MySQL_User_PASS    = "trrhfyp4";
    $MySQL_Database     = "u957103950_usrdb";
    
    $conn = mysql_connect($MySQL_Host, $MySQL_User, $MySQL_User_PASS) or die ("Unable to connect! " . mysql_error() );
 
    mysql_select_db($MySQL_Database, $conn) or die ("Unable to select database " . mysql_error()  );

	$query = "select std_id,Name, Roll_no, Address, Phone_no, Email_Id , fall_ID from `Stud`"; 
	$qur = mysql_query($query);
	$stdData = array();
	$index = 0;
	while ($r = mysql_fetch_array($qur))
	{
		extract($r);
		$stdData[$index] = array( 
							"stdName" => $Name , 
							"roll_no" =>$Roll_no , 
							"address" =>$Address, 
							"email" => $Email_Id, 
							"phone"=>$Phone_no, 
							"id"=>$std_id
							);
		$query1 = "select fallName from `Fall` where Fall_ID=$fall_ID";
		$qur1 = mysql_query($query1);
	
		while ($f = mysql_fetch_array($qur1))
		{
			extract($f);
			$stdData[$index]["fall"] = $fallName;
		}
		$index = $index + 1;
		
	}
    mysql_close($conn);
 
    /* Output header */
    echo json_encode($stdData) ;
   ?>

