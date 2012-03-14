<?php

	$ch = curl_init("http://feg.kaatz-media.de:9000/events");
	curl_exec($ch);
	curl_close($ch);


?>
