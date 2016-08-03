<?php
session_start();
require_once('Connection.php');
$tags = $_POST['tags'] ;// print_r($_POST);
//echo $tags;
$tags_array = explode (",",$tags);

echo $tags . "    ";
echo $tags_array[0] . "    ";
$notif = $_POST['msg'] ;

echo $notif . "   ";


// Push The notification with parameters

require_once('PushBots.class.php');

$pb = new PushBots();


// Application ID
$appID = '572d92544a9efa91bd8b4569';

// Application Secret

$appSecret = 'd2d70d9b0ee3b9361cb6fc8fa107bed7';

$pb->App($appID, $appSecret);

//die();
// Notification Settings
$pb->Alert($notif);
$pb->Platform(array("1"));
$pb->Badge("+2");

$pb->Tags($tags_array);

$pb->Push();

$json = array("status" => 1);

echo json_encode($json) ;
Session::put('success', 'The message has been sent!');
header('Location: ../notification.php');
echo "<br>";echo "<br>";echo "<br>";



// Update Alias
/**
 * set Alias Data
 * @param	integer	$platform 0=> iOS or 1=> Android.
 * @param	String	$token Device Registration ID.
 * @param	String	$alias New Alias.
 */

//$pb->AliasData(1, "APA91bFpQyCCczXC6hz4RTxxxxx", "test");
// set Alias on the server
//$pb->setAlias();

// Push it !
//$pb->Push();

// Push to Single Device
// Notification Settings
//$pb->AlertOne("test Mesage");
//$pb->PlatformOne("0");
//$pb->TokenOne("3dfc8119fedeb90d1b8a9xxxxxx");

//Push to Single Device
//$pb->PushOne();

//Remove device by Alias
//$pb->removeByAlias("myalias");


?>
