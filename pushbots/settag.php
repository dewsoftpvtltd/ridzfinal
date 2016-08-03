<?php
		
$str_Ntag = $_GET['ntag'] ;                                  
$str_Otag = $_GET['otag'] ;   // t_2015,t_2012
$alias= $_GET['alias'];
  
$array_Ntag = $str_Ntag ; //explode (",",$str_Ntag);
$array_Otag = explode (",",$str_Otag);
//$notif = str_replace("_" , " " , $notif);
	
	
	
// Push The notification with parameters


require_once('PushBots.class.php');

$pb = new PushBots();


// Application ID
$appID = '572d92544a9efa91bd8b4569';


// Application Secret

$appSecret = 'd2d70d9b0ee3b9361cb6fc8fa107bed7';
$pb->App($appID, $appSecret);

$str_Token="APA91bHxwZXZHETfUIRlpmN0RVhsYyXhCZViNhB-fp0ntLfcjWi2kLVsdg98eBA8BaeNNeWyP93PTIsrsRs0KclkofDTtqfVv5Wd9TWCBZ_N_esBDvqH6RaW6DLatgZA0-2-HRKZRUsE";

// Notification Settings
//$pb->Platform(array("1"));

// $pb->Tags($array_Ntag);
$pb->updateTag($alias,$array_Ntag,$str_Token);
$data = $pb->updateTagByalias();


$json = array( "status" => 1);	
	
echo json_encode($json) ;


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