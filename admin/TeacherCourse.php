<html>
	<head>
	<?php
		require_once('scripts/Connection.php');
	?>
	<title>
		INS Admin Panel
	</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel=stylesheet href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
		<link href="http://select2.github.io/select2/select2-3.5.1/select2.css" rel="stylesheet" />
		<script src="http://select2.github.io/select2/select2-3.5.1/select2.js"></script>


		<script type="text/javascript">

			$(document).ready
			(
				function ()
				{
					$("#courselist").select2(
					{
						placeholder: "Select Courses",
						allowClear: true,
						width: '100%'

					});

					$('#courselist').change(
					function()
					{
						var listSize  = $('#courselist option:selected').size();
						var i  = 0;
						var Course_ID = "";

						for ( ; i < listSize; i++)
						{
							Course_ID =  $($('#courselist option:selected')[i]).val() + ","  + Course_ID ;

						}

						$('#c_id').val(Course_ID);
					});

					$('#teacher_list').change(
					function()
					{
						var Teacher_ID = $('#teacher_list option:selected').val();
						$('#tf_id').val(Teacher_ID);
					});
				}
			);

		</script>

		</head>
		<body>
		<?php include('navbar.php');?>
			<div class="container">
				<div class='row'>
					<div class='col-lg-12'>

						<form class="form-horizontal" role="form" method='post' action='scripts/upload_teachercourse.php' enctype="multipart/form-data">
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
												<option value="<?php echo $row[4];?>" > <?php echo $row[0];?> </option>
												<?php
											}
											?>
										</select>
									</div>
									<input type="hidden" id="tf_id" name='t_id' value="-1" >
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="user">Courses Name</label>
								<div class="col-sm-4">
									<select  id="courselist" multiple="multiple">
									<?php

										$query = "SELECT * FROM Courses" ;
										$result = mysqli_query($connection, $query) ;

										while($row = mysqli_fetch_row($result))
										{
											?>
											<option value="<?php echo $row[6];?>" > <?php echo $row[0];?> </option>
											<?php
										}
											?>
									</select>

								</div>
								<input type="hidden" id="c_id" name='course_id' >
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
