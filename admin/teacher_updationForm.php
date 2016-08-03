<?php
	session_start();
?>

	<?php
		function redirect($url) 
		{
			ob_start();
			header('Location: '.$url);
			ob_end_flush();
			die();
	
		}

		if(isset($_SESSION['login']) && $_SESSION['login']){
		}
		else{
			$url = "index.php";
			redirect($url);

		}
?>
<html>
	<head>
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

		if($_SERVER['REQUEST_METHOD'] == "GET")
		{
			$connection = connect_db();

			$u_id = isset($_GET['userID']) ? mysql_real_escape_string($_GET['userID']) : "";


			$query = "SELECT * FROM Teacher where userID='$u_id'" ;

			$qur = mysql_query($query);

			while ($f = mysql_fetch_array($qur))
			{
				extract($f);
				$t_Name = $Name ;
				$qualification = $Qualification ;
				$address=$Address;
				$p_num=$Phone_no;
				$email=$Email_Id;
				$t_id=$loginID;

			}

			mysql_close($connection);
		}

	?>

		<title>
			INS Admin Panel
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel=stylesheet href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

	</head>
	<body>
		<?php include('navbar.php');?>
		<div class="container">
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='scripts/teacher_update.php' enctype="multipart/form-data">

						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Name:</label>

							<div class="col-sm-4">

								<input type="name" class="form-control" name ='name' id="u_name"  value="<?php echo "$t_Name "?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Address:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='address' id="adrs" placeholder="Enter Address" value="<?php 	echo "$address "?>">
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-sm-2" for="name">phone number:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='phone_no' id="ph_no" placeholder="Enter Phone number "value="<?php  echo"$p_num"?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Qualification:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='qualification'id="qual" placeholder="Enter Qualification" value="<?php  echo "$qualification"?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Email:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='email' id="e_id" placeholder="Enter Email Id" value="<?php echo"$email"?>">
							<input type="hidden" id="teacher_user_id" name='userID' value="<?php echo"$u_id"?>">
							</div>
						</div>





						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button
									type="submit" value="Upload" class="btn btn-default" >
									Update
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
