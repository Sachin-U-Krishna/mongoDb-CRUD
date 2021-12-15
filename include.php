<?php
	require 'vendor/autoload.php';
	$client = new MongoDB\Client;
	$db = $client->studb;
	$collection = $db->stu1;

	//echo"Connected Successfully";
?>
