<?php 

	require_once("lib/YouTube-CLosed-Captions/closed-captions.php");
	header('Content-Type: application/json');
	if($_GET['url']) {
		$captions = getClosedCaptionsForVideo($_GET['url']);
		echo json_encode($captions);	
	} else {
		echo "Please append ?url=<a youtube video id> to the end of this url";
	}
	