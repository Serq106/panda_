<?php

	$request_params = array(
		'type' => "post",
		'owner_id' => 107940536,
		'item_id' => 1336,
		'access_key' => "efc73f65255e2b4d695f33b3684c1449aed343f60b8a42d29aff9f69259458598d9f4903ec36469f8b942",
		'v' => 5.69
	);

	$url = "https://api.vk.com/method/likes.add?".http_build_query($request_params);
	$result = json_decode(file_get_contents($url));
	var_dump($result);

?>