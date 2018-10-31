<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class LoginController extends Controller
{
    const USER = 0;
    const PASSWORD = 1;

    public function login()
    {
    	$key = '7kvP3yy3b4SGpVz6uSeSBhBEDtGzPb2n';

    	$userDB = [
    		self::USER => 'pepin', 
    		self::PASSWORD => '1234'
    	];

    	if ($userDB[self::USER] == $_POST['user'] and $userDB[self::PASSWORD] == $_POST['password']) 
    	{
    		
    		$tokenParams = [
    			'user' => $userDB[self::USER],
    			'password' => $userDB[self::PASSWORD],
    			'random' => time()
    		];

    		$token = JWT::encode($tokenParams, $key);

    		return response()->json([
	            'token' => $token,
	        ]);

    	}
    	


    }
}
