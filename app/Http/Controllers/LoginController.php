<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client as HttpClient;

//use Cookie;

class LoginController extends Controller
{
	/**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/admin';

    function __construct()
	{
		// Initiate instance of Guzzle Client
		$this->client = new HttpClient();

		$this->url = "analytics-api.energy360africa.com/api/v1/auth";
	}

	public function login(Request $request)
	{
		//dd($request->all());

		//return redirect('/overview');

		$username = $request->email;
		$password = $request->password;

        $string = $username;
        $name = trim(substr($string, 0, strpos($string, '@')));

		//$request->session()->put('username', $username);

        /**
        */

        //try catch
        try {
            /**$req = $this->client->request('POST', $this->url, [
                'json' => ['username' => $username, 'password' => $password]
            ]);
            
            $data = json_decode($req->getBody(), TRUE);*/

            //echo $req->getStatusCode();
            /**$stationRole = $data["data"]["userRole"];
            $cookie_role = "role"; 
            $cookie_appRole = $stationRole;*/
            //echo $cookie_appRole."<br/>";
            /**setcookie($cookie_role, $cookie_appRole, time() + (86400 * 30), "/"); // 86400 = 1 day*/
            //

            
            /**$company = $data["data"]["companies"];*/
            //print_r($stations);
            //echo json_encode($company);
            /**$cookie_stationNames = json_encode($company);*/
            
            //echo $cookie_stationName."<br/>";
            /**$cookie_company = "company";
            setcookie($cookie_company, $cookie_stationNames, time() + (86400 * 30), "/"); // 86400 = 1 day*/
            //

            /**$cookie_token = "token";
            $cookie_tokenValue = $data["data"]["token"];
            setcookie($cookie_token, $cookie_tokenValue, time() + (86400 * 30), "/"); // 86400 = 1 day*/

            //print_r($data["data"]);

            $user = [
                'name' => $name,
            ];

            $request->session()->put('username', $username);

            if ($username == 'admin' && $password == 'admin') {
                return redirect()->route('overview');
            }

            /**return redirect()->route('overview');*/
        } 
        catch (\GuzzleHttp\Exception\ServerException $e) {
            //echo 'Message: ' .$e->getResponse()->getBody(true);
            return redirect()->back()->with('error', 'invalid login credentials');
        }
        catch (\GuzzleHttp\Exception\ConnectException $e) {
            //echo 'Message: ' .$e->getResponse()->getBody(true);
            return redirect()->back()->with('error', 'Sorry, unable to login due to connection issues');
        }
	}
}
