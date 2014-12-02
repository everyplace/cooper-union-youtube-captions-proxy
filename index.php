<?php 

	require_once("YouTube-CLosed-Captions/closed-captions.php");
	header('Content-Type: application/json');
	$captions = getClosedCaptionsForVideo($_GET['url']);
	echo json_encode($captions);