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

				$u_id = isset($_GET['stdID']) ? mysql_real_escape_string($_GET['stdID']) : "";


				$query = "SELECT * FROM Stud where std_id='$u_id'" ;

				$qur = mysql_query($query);

				while ($f = mysql_fetch_array($qur))
				{
					extract($f);
					$s_Name = $Name ;
					$address=$Address;
					$roll_no=$Roll_no;
					$p_no=$Phone_no;
					$email=$Email_Id;
					$fall_id=$fall_ID;
					$s_id=$loginID;
					$fall_name=$FallName;
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

		<script>
			$(function()
			{
				$('#courses_list').change(function()
				{
					var coursesID = $('option:selected').val();
					$('#courses_id').val(coursesID);
				});




			});
		</script>
	</head>
	<body>
		<?php include('navbar.php');?>
		<div class="container">
		<h1>Student Results</h1>
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='scripts/result_upload.php' enctype="multipart/form-data">

						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Name:</label>

							<div class="col-sm-4">
								<label class="control-label col-sm-4" for="name">'<?php echo "$s_Name"; ?>'</label>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Roll #:</label>
							<div class="col-sm-4">
							   <label class="control-label col-sm-4" for="name">'<?php echo "$roll_no"; ?>'</label>

							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Obtained Marks:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name='obtained_marks' id="obtained_marks" placeholder="Enter Obtained Marks">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Grade:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name='grade' id="grade" placeholder="Enter Grade">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">GPA:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name='gpa' id="gpa" placeholder="Enter GPA">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Courses:</label>
							<div class="col-sm-4">
								<select class="form-control selectpicker show-tick"  data-width="220px" id='courses_list'>
									<?php
									$connection=connect_db();

									$query = "SELECT * FROM Courses where Fall_ID ='$fall_id' and status='valid'";
									$result = mysql_query($query) ;

									while($row = mysql_fetch_row($result))
									{
										?>
										<option
										value = <?php echo $row[6];?>   >
										<?php echo $row[1] . " : " . $row[0];?>
										</option>
										<?php
									}
										?>
								</select>
							</div>
							<input type="hidden" id="courses_id" name='courses_id' >
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Fall Name:</label>
							<div class="col-sm-4">
								<?php
									$connection=connect_db();

									$query = "select fallName from `Fall` where Fall_ID=$fall_ID";
									$result = mysql_query($query) ;
									while($row = mysql_fetch_row($result))
									{
										?>

									<label class="control-label col-sm-4" for="name"><?php echo $row[1]; ?></label>

									<? }
									?>
							<input type="hidden" id="fallID" name='fall_id' value= '<?php echo $fall_name; ?>' >

						</div>
							<input type="hidden" id="stdID" name='std_id' value= '<?php echo $u_id; ?>' >

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" value="Upload" class="btn btn-default">
								Save Results
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
