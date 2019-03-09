<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Vision API Credentials
    |--------------------------------------------------------------------------
    |
    | An API key can be registered and downloaded at the address below:
    | https://cloud.google.com/vision
    |
    | Full default path for laravel project would be 'storage/app/gsv/gsv.key'.
    |
    */

    'api_key' => env('GOOGLE_CLOUD_VISION_API KEY', 'gsv/gsv.key'),

];
