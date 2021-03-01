<?php
	$auth_token = 'AUTH_TOKEN';4cfac598f167d1db-36cdcaa10fa348ef-537dd511e287e809
	$webhook = 'WEBHOOK_URL';
	https://serbetli.ua.market/
	$jsonData = 
	'{
		"auth_token": "'.$auth_token.'",4cfac598f167d1db-36cdcaa10fa348ef-537dd511e287e809
		"url": "'.$webhook.'",
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
