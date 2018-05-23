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

    'twitter' => [
      'client_id' => 'wwO1AVklJmcEeqjpHAPFV1ipH',
      'client_secret' => 'Ukl3r6rmSksMfYhtZk3vMlNvbZyBCvKrXoM31KteAxHoTz0ESw',
      'redirect' => 'http://127.0.0.1/Pulmentum_v2/public/login/twitter/callback'
    ],

    'github' => [
        'client_id'     => 'efaefb5604bb7a01700c',
        'client_secret' => '435f51fbf0d6288f5e86ff9e3d2e04dd1113eb62',
        'redirect'      => 'http://127.0.0.1/Pulmentum_v2/public/login/github/callback',
    ],

    'google' => [
        'client_id'     => '484632171437-shf4s7cmqab0m2u83h8n7c2ehefs0ka0.apps.googleusercontent.com',
        'client_secret' => 'kJBWIGZLBUrLcbfocVUkPLjC',
        'redirect'      => 'http://127.0.0.1/Pulmentum_v2/public/login/google/callback',
    ],

];
