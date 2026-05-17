<?php

return [
    'paths' => ['api/*', 'email/*', 'storage/*', 'sanctum/csrf-cookie', 'broadcasting/auth'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['https://mvmood.com'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => ['Content-Type'],
    'max_age' => 0,
    'supports_credentials' => true,
];
