<?php
	$auth_token = 'AUTH_TOKEN';
	$webhook = 'https://zaharberkutweather.herokuapp.com';
	
	$jsonData = 
	'{
		"auth_token": "'.$auth_token.'",4cdcedeade27df22-67dc226611abfa00-2b0975e4f6a086b3
		"url": "'.$webhook.'",serbetli.ua.market
		"event_types": ["subscribed", "unsubscribed", "delivered", "message", "seen"]
	}';
	
	$ch = curl_init('https://chatapi.viber.com/pa/set_webhook');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$response = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);
	if($err) {echo($err);}
	else {echo($response);}
?>
