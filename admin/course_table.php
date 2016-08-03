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

		<body>
		<?php include('navbar.php');?>
		<h1>Course Information</h1>
			<table
				data-toggle="table"
				data-url="scripts/courseData.php" 
				data-height="299"
				id="coursetable">
				<thead>
					<tr>
						<th data-field="id">CourseID</th>
						<th data-field="semester">Semester</th>
						<th data-field="subject">Subject</th>
						<th data-field="fall">Fall</th>
						<th data-field="time">Timing</th>
						<th data-field="day">Day</th>
						<th data-field="status">Status</th>
						<th data-field="del" data-formatter="deleteFormatter">Delete</th>
						<th data-field="update" data-formatter="updateFormatter">Update</th>

					</tr>
				</thead>
			</table>
			<script>
			function deleteFormatter(value, row)
			{
				var courseID= row.id;
				return '<a href="scripts/delete_course.php?courseID=' + courseID +  '" > Delete </a>'
			}
			function updateFormatter(value, row)
			{
				var courseID= row.id;
				return '<a href="course_updationForm.php?courseID=' + courseID +  '" > Update </a>'
			}
		</script>

		</body>
	</head>
</html>
