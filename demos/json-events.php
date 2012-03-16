<?php

	$url = "http://feg.kaatz-media.de:9000/events";

	if($_GET['tag'])
		$ch = curl_init($url+"/tag/"+$_GET['tag']);
	else 
		$ch = curl_init($url);

	
	curl_exec($ch);
	curl_close($ch);


?>
