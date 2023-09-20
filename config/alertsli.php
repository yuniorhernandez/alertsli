<?php

/*
* This file is part of the Laravel Alertsli package.
*
* (c) Alertsli
*
* This source file is subject to the MIT license that is bundled
* with this source code in the file LICENSE.
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Alertsli API Token
    |--------------------------------------------------------------------------
    |
    | Here you may provide your Alertsli API token.
    | To get a token api register for free at https://alerts.li/register/
    |
    */

    'api_token' => env('ALERTSLI_API_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | Alertsli API URL
    |--------------------------------------------------------------------------
    |
    | Here you may provide your Alertsli API URL.
    | You can choose the version of the api by changing the url value.
    | For example:
    | https://alerts.li/api/v1/ - for version 1
    | https://alerts.li/api/v2/ - for version 2
    |
    */

    'api_url' => env('ALERTSLI_API_URL', 'https://alerts.li/api/v1/'),

];
