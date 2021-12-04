<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
	
	'google' => [
    'client_id' => '213216823688-t6ehu230g5tdie6tvpo2td39og0k91cg.apps.googleusercontent.com',
    'client_secret' => 'JOvxMEiOMdxF9IwyguH-SGlp',
    'redirect' => 'http://127.0.0.1:8000/callback/google',
  ], 
   'facebook' => [
        'client_id' => '408047094261438',
        'client_secret' => '2788f98a9e1e59950a80286028a376dc',
		        'redirect' => 'https://localhost:8000/login/facebook/callback',

    ],

];
