<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt'     => env('APP_KEY'),
            'length'   => 8,
            'alphabet' => 'pfaKMXkRqTdeZjzJg26Y4i0mrcUPInuh5ovlF3AQ81SsHVDNCEx9t7LyOG',
        ],

        'long' => [
            'salt'     => env('APP_KEY'),
            'length'   => 11,
            'alphabet' => 'LJu65iY7XyPn4fZI1hjSKqaApzmE9ON3kHVs0tg8RceldvrUGoTMxQ2DCF',
        ],

        'deep' => [
            'salt'     => env('APP_KEY'),
            'length'   => 32,
            'alphabet' => 'UgMxSY7mHTCFVRzfhQjonIpdvlAKiDac8q6LPZJeu2ON40Xk9yt1E3r5Gs',
        ],

    ],

];
