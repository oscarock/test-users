<?php

namespace Services;

use GuzzleHttp\Client;

class CustomerData {

	public function loadData(){
		try {
			$client = new \GuzzleHttp\Client();
			$response = $client->request('GET', 'http://www.mocky.io/v2/5d9f39263000005d005246ae?mocky-delay=10s');
			if($response->getStatusCode() == 200){
				$body = $response->getBody();
				$results = $this->processData(json_decode($body));
				return $results;
			}else{
				throw new \Exception('Fallo el request intente mas tarde.');
			}
		} catch (\Guzzle\Http\Exception\ConnectException $e) {
			throw new Exception($e->getResponse()->getBody());
		}
	}

	public function processData($body){
		$users = array();
		foreach ($body as $items) {
			foreach ($items as $user) {
				array_push($users, $user);
			}
		}
		return $users;
	}
}