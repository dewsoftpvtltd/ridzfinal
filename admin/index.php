<?php

session_start(); $username = $password = $userError = $passError = '';

if(isset($_POST['sub'])){
  $username = $_POST['username']; $password = $_POST['password'];

  if($username === 'admin' && $password === 'trrhfyp4'){
    $_SESSION['login'] = true; header('LOCATION:links.php'); die();
  }

  if($username !== 'admin')$userError = 'Invalid Username';
  if($password !== 'trrhfyp4')$passError = 'Invalid Password';
}
echo "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <link rel='stylesheet' href='css/reset.css'>
     <link rel='stylesheet' href='css/animate.css'>
     <link rel='stylesheet' href='css/styles.css'>
   </head>
<body>
<div id='container'>
<div class='top-heading'>ADMIN PANEL</div>
  <form name='input' action='{$_SERVER['PHP_SELF']}' method='post'>
    <label for='username'>User Name</label><input type='name' value='$username' id='username' name='username' />
    <div class='error'>$userError</div>
    <label for='password'>Password</label><input type='password' value='$password' id='password' name='password' />
    <div class='error'>$passError</div>
    <input type='submit' value='Log In' name='sub' />
  </form>
  </div>
  <script type='text/javascript' src='common.js'></script>
</body>
</html>";
?>
