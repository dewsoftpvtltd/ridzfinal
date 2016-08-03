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


		if($_SERVER['REQUEST_METHOD'] == "GET")
		{

	$connection = Connection::connect();

				$courseID = isset($_GET['courseID']) ? e($connection,$_GET['courseID']) : "";
				//echo $courseID;

				$query = "SELECT * FROM Courses where courseID='$courseID'" ;

				$qur = mysqli_query($connection, $query);

				while ($f = mysqli_fetch_array($qur))
				{
					extract($f);
					$subject = $Subject ;
					$semester=$Semester;
					$time=$timing;
					$day=$day;
					$status=$status;
					$fall_id=$Fall_ID;
					$status=$status;

				}

			mysqli_close($connection);
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


				$('.selectpicker').selectpicker();

				$('#fall_list').change(function(){
					var fallID = $('#fall_list option:selected').val();
					$('#f_id').val(fallID);
				});
				$('#status_list').change(function(){
					var status = $('#status_list option:selected').val();
					$('#status_id').val(status);
				});


			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='script/course_update.php' enctype="multipart/form-data">

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Semester:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='semester' id="semester" placeholder="Enter The Semester" value='<?php echo $semester; ?>' >
							</div>
						</div>
						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Subject:</label>

							<div class="col-sm-4">

								<input type="name" class="form-control" name ='subject' id="subject" placeholder="Enter The Subject" value='<?php echo $subject; ?>' >
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Timmings:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='time' id="time" placeholder="Enter The Time" value='<?php echo $time; ?>'>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Day:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='day' id="day" placeholder="Enter The Day" value='<?php echo $day; ?>'>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Fall Id:</label>
							<div class="col-sm-4">
								<select class="selectpicker"  id='fall_list'>
												<?php

												$connection = Connection::connect();

													$query = "SELECT * FROM Fall";
													$result = mysqli_query($connection, $query) ;

													while($row = mysqli_fetch_row($result))
													{
														?>
														<option
															value=<?php echo $row[1];?> <?php if($row[1] == $Fall_ID)
														 ?> > <?php echo $row[0];?>
														</option>
															<?php
															}
												?>
								</select>
							</div>
							<input type="hidden" id="f_id" name='fall_id'value='<?php echo $fall_id; ?>' >
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Status:</label>
							<div class="col-sm-4">
								<select class="selectpicker"  id='status_list'>
								<option value= valid> Valid </option>
								<option value= invalid> Invalid </option>
								</select>
							</div>
							<input type="hidden" id="status_id" name='status' value='<?php echo $status; ?>' >

							<input type="hidden" id="courseID" name='courseID' value='<?php echo $courseID; ?>' >
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
