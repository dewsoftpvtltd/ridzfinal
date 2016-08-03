<html>
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
		<h1>User Registration</h1>
			<div class='row'>
				<div class='col-lg-12'>

					<form class="form-horizontal" role="form" method='post' action='scripts/upload_user.php' enctype="multipart/form-data">

						<div class="form-group">
						</b>


							<label class="control-label col-sm-2" for="name">User Name:</label>

							<div class="col-sm-4">

								<input type="name" class="form-control" name ='uname' id="u_name" placeholder="Enter User Name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Password:</label>
							<div class="col-sm-4">
								<input type="password" class="form-control" name ='passwd' id="pwd" placeholder="Enter Password">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Role:</label>
							<div class="col-sm-4">
								<input type="name" class="form-control" name ='role' id="rol" placeholder="Enter Role">
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
