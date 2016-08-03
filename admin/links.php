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

		if(isset($_SESSION['login']) && $_SESSION['login']){
		}
		else{
			$url = "index.php";
			redirect($url);

		}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Links</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/animate.css'>
    <link rel='stylesheet' href='css/styles.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('navbar.php');?>
    <div id="container1">
      <h1>Welcome to the Admin Panel!</h1>
      <p>Here the admin can perform all the related tasks by going to the Forms and Tables dropdown menus above.</p>
    <div style="text-align:center; padding-top:50px;"><img src="inslogo.jpg"></div>

</div>


  </body>
</html>
