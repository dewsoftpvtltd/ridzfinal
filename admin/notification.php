<html>
	<head>
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
		<?php include('navbar.php');
		session_start();
		require_once('scripts/Connection.php');
		?>

		<div class="container">

			<div class='row'>
				<div class='col-lg-12'>
					<h2><?php echo Session::get('success');
					Session::delete('success'); ?></h2>
					<form class="form-horizontal" role="form" method='post' action='scripts/sendNotifyViaWeb.php' enctype="multipart/form-data">

						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Text Area:</label>

							<div class="col-sm-4">
								<textarea name="msg" cols="25" rows="5">

								</textarea>
							</div>
						</div>
						<div class="form-group">

							<label class="control-label col-sm-2" for="name">Edit Text:</label>

							<div class="col-sm-4">
								<input type="text" class="form-control" name ="tags" id="text" placeholder="Enter Text">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" value="Upload" class="btn btn-default">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
