<?php

return [

    'application_id' => env('VISMA_APPLICATION_ID'),

    'application_secret' => env('VISMA_APPLICATION_SECRET'),

    'tenant_id' => env('VISMA_TENANT_ID'),

    /*
    |--------------------------------------------------------------------------
    | Visma API Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL for the API. You can override this if you're using
    | a different environment or a local development setup.
    |
    */

    'base_url' => env('VISMA_BASE_URL', 'https://integration.visma.net/API'),
];
