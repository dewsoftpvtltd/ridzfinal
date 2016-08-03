<html>
	<head>
		<title>
			INS Admin Panel
		</title>
	</head>
	<body>
	
		<div class="container">

			<div class='row'>
				<div class='col-lg-12'> 
				
					<form class="form-horizontal" role="form" method='post' action='scripts/sendNotifyViaWeb.php' enctype="multipart/form-data">
						
						<div class="form-group">
					
							<label class="control-label col-sm-2" for="name">Text Area:</label>
							
							<div class="col-sm-4">
								<textarea name="text" cols="25" rows="5">

								</textarea>
							</div>
						</div>
						<div class="form-group">
					
							<label class="control-label col-sm-2" for="name">Edit Text:</label>
							
							<div class="col-sm-4">
								<input type="text" class="form-control" name ='edit_text' id="text" placeholder="Enter Text">
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