<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => env('GH_APP','ec54720841d6f0a283be'),         // Your GitHub Client ID
        'client_secret' => env('GH_SEC','aea89a3b738cfa41021071cd7c0bd8761a4f26a4'), // Your GitHub Client Secret
        'redirect' => 'http://localhost/estasmer/login/github/callback',
    ],

    'facebook' => [
        'client_id' => env('FB_APP','331341441006034'),         // Your GitHub Client ID
        'client_secret' => env('FB_SEC','f57d1f58513e91a8a11ed421249f2d0f'), // Your GitHub Client Secret
        'redirect' => 'http://localhost/estasmer/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => env('b77f257a9b8ec64d1809'),         // Your GitHub Client ID
        'client_secret' => env('b89e048dd20201fb1b52544adb30436fb8a2f44a'), // Your GitHub Client Secret
        'redirect' => 'http://localhost/estasmer/login/twitter/callback',
    ],
    'google' => [
        'client_id' => env('G+_CLIENT_ID','253460067902-jb2ok3ij43hd3l3rtdqk5fi947scukeh.apps.googleusercontent.com'),         // Your GitHub Client ID
        'client_secret' => env('G+_CLIENT_SECRET','654ZpKSijiPuLrLb5YTD_0CL'), // Your GitHub Client Secret
        'redirect' => 'http://localhost/estasmer/login/google/callback',
    ],

];
