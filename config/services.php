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
        'region' => 'us-east-1',
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
        'client_id' => 'a1c62f62d88a268e7cc4',
        'client_secret' => '15909ee7833fc610d2419f4489b9abf7225ac892',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],


    'facebook' => [
        'client_id' => '200846360320085',
        'client_secret' => '3e5a6c1190a6cc340d91e47a22492ae6',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
];
