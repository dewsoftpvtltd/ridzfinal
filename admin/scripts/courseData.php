<?php
 
    // Code to Connect mySQL Data Base
    $MySQL_Host         = "mysql.serversfree.com";
    $MySQL_User         = "u957103950_mbins";
    $MySQL_User_PASS    = "trrhfyp4";
    $MySQL_Database     = "u957103950_usrdb";
    
    $conn = mysql_connect($MySQL_Host, $MySQL_User, $MySQL_User_PASS) or die ("Unable to connect! " . mysql_error() );
 
    mysql_select_db($MySQL_Database, $conn) or die ("Unable to select database " . mysql_error()  );
	
	$query = "select Subject,Semester,Fall_ID,timing,day,status,courseID from `Courses`"; 
	$qur = mysql_query($query);
	$courseData = array();
	$index = 0;
	while ($r = mysql_fetch_array($qur))
	{
		extract($r);
		$courseData[$index] = array( 
								"id"=>$courseID,
								"semester"=>$Semester,
								"subject"=>$Subject,
								"time"=>$timing,
								"day"=>$day,
								"status"=>$status
								);
		$query1 = "select FallName from `Fall` where Fall_ID=$Fall_ID";
		$qur1 = mysql_query($query1);
	
		while ($f = mysql_fetch_array($qur1))
		{
			extract($f);
			$courseData[$index]["fall"] = $FallName;
		}
		$index = $index + 1;
	}
	
	mysql_close($conn);
	
	 echo json_encode($courseData) ;
?>