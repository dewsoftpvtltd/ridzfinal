<?php

    // Code to Connect mySQL Data Base
    require_once('Connection.php');

    $connection = Connection::connect();

	$query = "select std_id,Name, Roll_no, Address, Phone_no, Email_Id , fall_ID from `Stud`";
	$qur = mysqli_query($connection, $query);

	$stdData = array();
	$index = 0;
	while ($r = mysqli_fetch_array($qur))
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
		$qur1 = mysqli_query($connection, $query1);

		while ($f = mysqli_fetch_array($qur1))
		{
			extract($f);
			$stdData[$index]["fall"] = $fallName;
		}
		$index = $index + 1;

	}
    mysqli_close($connection);

    /* Output header */
    echo json_encode($stdData) ;
   ?>
