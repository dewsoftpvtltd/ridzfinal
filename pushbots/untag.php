<?php
	
		
// Push The notification with parameters
require_once('PushBots.class.php');
$pb = new PushBots();

// Application ID
$appID = '572d92544a9efa91bd8b4569';
// Application Secret
$appSecret = 'd2d70d9b0ee3b9361cb6fc8fa107bed7';
$pb->App($appID, $appSecret);
		$token = "APA91bGooHxdcQ-3HEobobuSUCkWWzVs3cjtVX785gDRkb0vqO9_xAhM9y1AgNW8ueaklVJUkUc_znw4d5apv68NdYBcgc7U81ntKTuy0VXGQYwlfd_D5-_mwn0Y6Ywy0c6vj-kyR6HN";
		$tag	= $_GET['tag'];

$pb->UnTagData(1,$token, $tag); 
$pb->unTag();

// Notification Settings


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