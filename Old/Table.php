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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css">

	</head>
	<body>
		<?php include('navbar.php');?>
		<table
			data-toggle="table"
			data-url="http://mbins.bugs3.com/admin/scripts/studentData.php"
			data-height="299"
			id="stdtable">
			<thead>
				<tr>
					<th data-field="id">StudentID</th>
					<th data-field="stdName">StudentName</th>
					<th data-field="roll_no">Roll_No</th>
					<th data-field="address">Address</th>
					<th data-field="email">Email</th>
					<th data-field="phone">Phone</th>
					<th data-field="fall">Fall</th>
					<th data-field="del" data-formatter="DeleteFormatter">Delete</th>
					<th data-field="update" data-formatter="UpdateFormatter">Update</th>

				</tr>
			</thead>
		</table>
		<script>
			function DeleteFormatter(value, row)
			{
				var stdID= row.id;
				return '<a href="scripts/delete.php?stdID=' + stdID +  '" > Delete </a>'
			}
		</script>



</body>
</html>
