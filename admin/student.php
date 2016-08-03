<html>
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

	if(isset($_SESSION['login']) && $_SESSION['login'])
	{

	}
	else
	{
		$url = "index.php";
		redirect($url);

	}
?>
	<head>
	<?php
	require_once('scripts/Connection.php');



	?>
		<title>
			INS Admin Panel
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel=stylesheet href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

		<script>
			$(function(){
				$('#user_list').change(function(){
					var userID = $('#user_list option:selected').val();
					$('#std_login_id').val(userID);
				});

				$('#fall_list').change(function(){
					var fallID = $('#fall_list option:selected').val();
					$('#f_id').val(fallID);
				});


			});
		</script>
	</head>
	<body>
	<?php include('navbar.php');?>
		<div class="container">
		<h1>Student Registration</h1>
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='scripts/upload_student.php' enctype="multipart/form-data">

						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Name:</label>

							<div class="col-sm-4">

								<input type="name" class="form-control" name ='name' id="u_name" placeholder="Enter User Name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Address:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='address' id="adrs" placeholder="Enter Address">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Roll #:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='roll_no' id="r_no" placeholder="Enter Role #">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Phone #:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='phone_no' id="p_no" placeholder="Enter Phone #">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Email Id:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='email' id="e_id" placeholder="Enter Email Id">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="user">User Id:</label>
							<div class="col-sm-4">
								<select class="form-control selectpicker show-tick"  data-width="220px" id='user_list'>
												<?php

													$connection = Connection::connect();

													$query = "SELECT * FROM Login where role='student'";
													$result = mysqli_query($connection, $query) ;

													while($row = mysqli_fetch_row($result))
															{
												?>
												<option value=<?php echo $row[3];?> > <?php echo $row[0];?> </option>
												<?php
															}
												?>
								</select>
							</div>
							<input type="hidden" id="std_login_id" name='std_id' >
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Fall Id:</label>
							<div class="col-sm-4">
								<select class="form-control selectpicker show-tick"  data-width="220px" id='fall_list'>
												<?php

//													$connection=connect_db();

													$query = "SELECT * FROM Fall";
													$result = mysqli_query($connection, $query) ;

													while($row = mysqli_fetch_row($result))
															{
												?>
												<option value=<?php echo $row[1];?> > <?php echo $row[0];?> </option>
												<?php
															}
												?>
								</select>
							</div>
							<input type="hidden" id="f_id" name='fall_id' >
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" value="Upload" class="btn btn-default">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
