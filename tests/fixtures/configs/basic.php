<?php

return [

    'options' => [
        'application' => env('APP_NAME', 'Laravel'),
        'repository' => '{{repo}}',
        'upload_path' => '{{repo}}',
        'writable_mode' => 'chmod',
        'branch' => null,
        'debug' => true,
    ],

    'localhost' => [
        'deploy_path' => '{{server}}',
    ],

    'hooks' => [
        'build' => [
            'npm:install',
            'npm:development',
        ],
        'ready' => [
            'artisan:storage:link',
            'artisan:view:clear',
            'artisan:cache:clear',
            'artisan:config:cache',
            'artisan:optimize',
        ],
    ],

    'include' => [
        'fixtures/recipes/mocks.php',
    ],

];
