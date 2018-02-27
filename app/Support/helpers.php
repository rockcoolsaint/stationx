<?php

namespace App\Support;

use GuzzleHttp\Client as HttpClient;

/**
* 
*/
class AccessControl
{
	
	function __construct()
	{
		// Initiate instance of Guzzle Client
		$this->client = new HttpClient();

		$this->url = "http://analytics.e360africa.com/api/v1/auth";
	}

	//public static function hello()
	//{
	//	echo "Hello World";
	//}

	public static function authenticate()
	{
		$this->client->request('POST', $this->url, [
            'params' => ['username' => 'innocent.o@e360africa.com', 'password' => 'capitalist1@']
        ]);
	}
}

?>