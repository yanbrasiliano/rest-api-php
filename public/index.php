<?php

require_once '../vendor/autoload.php';


if ($_GET['url']) {

	$url = explode('/', $_GET['url']);

	if ($url[0] === 'api') {
		$service = ucfirst($url[1]) . 'Service';
		$method = strtolower($_SERVER['REQUEST_METHOD']);

		try {
			$response = call_user_func_array(array(new $service, $method), $url);
			http_response_code(200);
			return json_encode(array('status' => 'success', 'data' => $response));
		} catch (Exception $e) {
			http_response_code(404);
			return json_encode(array('status' => 'error', 'data' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
		}
	}
}
