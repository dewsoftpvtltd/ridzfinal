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
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

<script type="text/javascript">
		$(function()
		{
			$("#falllist").select2({
			  placeholder: "Select Fall",
			  allowClear: true,
			  width: '100%'

			});

			$('#falllist').change(function()
			{
				var listSize  = $('#falllist option:selected').size();
				var i  = 0;
				var Fall_ID = "";

				for ( ; i < listSize; i++){
					Fall_ID =  $($('#falllist option:selected')[i]).val() + ","  + Fall_ID ;

				}
				$('#fallid').val(Fall_ID);
			});

			$("#falllist option").each(function() {
				console.log($(this).val());
			});

			$('#teacher_list').change(function()
			{
				var Teacher_ID = $('#teacher_list option:selected').val();
				$('#tf_id').val(Teacher_ID);
			});
		});

		</script>


	</head>
	<body>
		<?php include('navbar.php');?>
		<div class="container">
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='scripts/upload_teacherfall.php' enctype="multipart/form-data">
					<div class="form-group">
							<label class="control-label col-sm-2" for="user">Teacher Name</label>
							<div class="col-sm-4">
								<select class="form-control selectpicker show-tick"  data-width="220px" id='teacher_list'>
									<option value="-1" > Select Teacher Name </option>
								<?php

								$connection = Connection::connect();

								$query = "SELECT * FROM Teacher" ;
								$result = mysqli_query($connection, $query) ;

								while($row = mysqli_fetch_row($result))
								{
									?>
									<option value=<?php echo $row[4];?> > <?php echo $row[0];?> </option>
									<?php
								}
								?>
								</select>
							</div>
							<input type="hidden" id="tf_id" name='t_id' value="-1" >
					</div>

					<div class="form-group">
							<label class="control-label col-sm-2" for="user">Fall Name</label>
							<div class="col-sm-4">
								<select class="selectpicker" id="falllist" multiple="multiple">
								<?php


													$query = "SELECT * FROM Fall" ;
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
							<input type="hidden" id="fallid" name='fall_id' >
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
