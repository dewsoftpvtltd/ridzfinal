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
	?>
	<head>
		<title>
		INS Admin Panel
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>		
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

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
	<?php include('navbar.php');?>
		<div class="container">
		<h1>Course Registration</h1>
			<div class='row'>
				<div class='col-lg-12'> 
					<form class="form-horizontal" role="form" method='post' action='scripts/upload_course.php' enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Semester:</label>
								<div class="col-sm-4">
									<input type="name" class="form-control" name ='semester' id="semester" placeholder="Enter The Semester">
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Subject:</label>
								<div class="col-sm-4">
									<input type="name" class="form-control" name ='subject' id="subject" placeholder="Enter The Subject">
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Fall Id:</label>
							<div class="col-sm-4">
								<select class="selectpicker"  id='fall_list'>
									<?php		
										$connection=connect_db();
													
										$query = "SELECT * FROM Fall";
										$result = mysql_query($query) ;
													
										while($row = mysql_fetch_row($result))
										{ 
									?>
									<option value=<?php echo $row[1];?> > <?php echo $row[0];?> </option>
										<?php 
											}
										?>
								</select>
								
							</div>
							<input type="hidden" id="f_id" name='fall_id' value='1' >
						</div>				
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Timmings:</label>
								<div class="col-sm-4">
									<input type="name" class="form-control" name ='time' id="time" placeholder="Enter The Time">
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Day:</label>
								<div class="col-sm-4">
									<input type="name" class="form-control" name ='day' id="day" placeholder="Enter The Day">
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="user">Status:</label>
							<div class="col-sm-4">
								<select class="selectpicker"  id='status_list'>
								<option value= valid> Valid </option>
								<option value= invalid> Invalid </option>
								</select>
							</div>
							<input type="hidden" id="status_id" name='status' value='valid' >
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
