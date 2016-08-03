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
		<title>
			INS Admin Panel
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">   
		<link rel=stylesheet href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">

	</head>
	<body>
	<?php include('navbar.php');?>
	<h1>Teacher Profile</h1>
		<table 
			data-toggle="table" 
			data-url="http://mbins.bugs3.com/admin/scripts/teacherData.php" 
			data-height="299"
			id="teachertable">
			<thead>
				<tr>
					<th data-field="id">TeacherID</th>
					<th data-field="t_Name">TeacherName</th>
					<th data-field="qualification">Qualification</th>				
					<th data-field="address">Address</th>
					<th data-field="email">Email</th>
					<th data-field="phone_no">Phone</th>
					
					
					<th data-field="del" data-formatter="deleteFormatter">Delete</th>
					<th data-field="update" data-formatter="updateFormatter">Update</th>
					
				</tr>
			</thead>
		</table>
		
		<script>
			function deleteFormatter(value, row)
			{
				var userID= row.id;
				return '<a href="scripts/teacher_delete.php?userID=' + userID +  '" > Delete </a>'
			}
			function updateFormatter(value, row)
			{
				var userID= row.id;
				return '<a href="teacher_updationForm.php?userID=' + userID +  '" > Update </a>'
			}
		</script>

	
	
</body>
</html>