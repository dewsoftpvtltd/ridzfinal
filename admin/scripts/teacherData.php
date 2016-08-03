<?php

    // Code to Connect mySQL Data Base
    $MySQL_Host         = "127.0.0.1";
    $MySQL_User         = "homestead";
    $MySQL_User_PASS    = "secret";
    $MySQL_Database     = "ridz";

    $conn = mysqli_connect($MySQL_Host, $MySQL_User, $MySQL_User_PASS) or die ("Unable to connect! " . mysql_error() );

    mysql_select_db($MySQL_Database, $conn) or die ("Unable to select database " . mysql_error()  );


	$query = "select userID,Name,Address,Phone_no,Qualification,Email_Id,loginID from `Teacher`";
	$qur = mysql_query($query);
	$teacherData = array();
	$index = 0;
	while ($r = mysql_fetch_array($qur))
	{
		extract($r);
		$teacherData[$index] = array(
							"t_Name" => $Name ,
							"qualification" =>$Qualification ,
							"address" =>$Address,
							"email" => $Email_Id,
							"phone_no"=>$Phone_no,
							"id"=>$userID
						);
		$query1 = "select Uname from `Login` where ID=$loginID";
		$qur1 = mysql_query($query1);
		while ($l = mysql_fetch_array($qur1))
		{
			extract($l);
			$teacherData[$index]["login"] = $Uname;
		}
		$index = $index + 1;
	}
    mysql_close($conn);

    /* Output header */
    echo json_encode($teacherData) ;
   ?>
