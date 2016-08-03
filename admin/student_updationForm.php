<html><?php
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


		if($_SERVER['REQUEST_METHOD'] == "GET")
		{
			$connection = Connection::connect();

				$u_id = isset($_GET['stdID']) ? e($connection,$_GET['stdID']) : "";


				$query = "SELECT * FROM Stud where std_id='$u_id'" ;

				$qur = mysqli_query($connection, $query) ;

				while ($f = mysqli_fetch_array($qur))
				{
					extract($f);
					$s_Name = $Name ;
					$address=$Address;
					$roll_no=$Roll_no;
					$p_no=$Phone_no;
					$email=$Email_Id;
					$fallID=$fall_ID;
					$s_id=$loginID;
				}
			//mysqli_close($connection);
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

		<script>
			$(function(){

				$('#fall_list').change(function(){
					var fallID = $('#fall_list option:selected').val();
					$('#f_id').val(fallID);
				});


			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='scripts/student_update.php' enctype="multipart/form-data">

						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Name:</label>

							<div class="col-sm-4">

								<input type="name" class="form-control" name ='name' id="u_name" placeholder="Enter User Name" value='<?php echo $s_Name; ?>' >
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Address:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='address' id="adrs" placeholder="Enter Address" value='<?php echo $address; ?>' >
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Roll #:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='roll_no' id="r_no" placeholder="Enter Role #" value='<?php echo $roll_no; ?>'>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Phone #:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='phone_no' id="p_no" placeholder="Enter Phone #" value='<?php echo $p_no; ?>'>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Email Id:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='email' id="e_id" placeholder="Enter Email Id" value='<?php echo $email; ?>'>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Fall Id:</label>
							<div class="col-sm-4">
								<select class="form-control selectpicker show-tick"  data-width="220px" id='fall_list'>
												<?php
												$connection = Connection::connect();

													$query = "SELECT * FROM Fall";
													$result = mysqli_query($connection, $query) ;
													//print_r($query);die();
													while($row = mysqli_fetch_row($result))
													{
														?>
														<option value="<?php echo $row[1];?>" > <?php echo $row[0];?> </option>
														<?php
															}
												?>
								</select>
							</div>
							<input type="hidden" id="f_id" name='fall_id' value="<?php echo $fall_ID; ?>" >

							<input type="hidden" id="student_user_id" name='std_id' value="<?php echo $u_id; ?>" >
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" value="Upload" class="btn btn-default">
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
