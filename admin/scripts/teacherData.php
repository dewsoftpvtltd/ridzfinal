<?php

    // Code to Connect mySQL Data Base
    require_once('Connection.php');

    $connection = Connection::connect();


	$query = "select userID,Name,Address,Phone_no,Qualification,Email_Id,loginID from `Teacher`";
	$qur = mysqli_query($connection, $query);

	$teacherData = array();
	$index = 0;
	while ($r = mysqli_fetch_array($qur))
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
		$qur1 = mysqli_query($connection, $query1);
		while ($l = mysqli_fetch_array($qur1))
		{
			extract($l);
			$teacherData[$index]["login"] = $Uname;
		}
		$index = $index + 1;
	}
    mysqli_close($connection);

    /* Output header */
    echo json_encode($teacherData) ;
   ?>
