<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Visma API Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL for the API. You can override this if you're using
    | a different environment or a local development setup.
    |
    */

    'base_url' => env('VISMA_BASE_URL'),

    /*
    |--------------------------------------------------------------------------
    | Visma API Token
    |--------------------------------------------------------------------------
    |
    | Your API authentication token. This will be sent as a Bearer
    | token in the Authorization header.
    |
    */

    'api_token' => env('VISMA_API_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Default Headers
    |--------------------------------------------------------------------------
    |
    | The SDK automatically includes the following headers:
    | - Accept: application/vnd.api+json
    | - Content-Type: application/vnd.api+json
    | - Authorization: Bearer {api_token} (if api_token is set)
    |
    | This configuration is reserved for future use if you need to add
    | additional custom headers beyond the defaults.
    |
    */

];
