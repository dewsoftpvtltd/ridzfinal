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
	</head>
	<body>
	<?php include('navbar.php');?>
		<div class="container">
		<h1>Fall Registration</h1>
	
			<div class='row'>
				<div class='col-lg-12'> 

					<form class="form-horizontal" role="form" method='post' action='scripts/upload_fall.php' enctype="multipart/form-data">
						
						<div class="form-group">
							
							<label class="control-label col-sm-2" for="name">Fall Name:</label>
							
							<div class="col-sm-4">
							<input type="name" class="form-control" name ='fall_name' id="fall_name" placeholder="Enter fall name">
							</div>
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
