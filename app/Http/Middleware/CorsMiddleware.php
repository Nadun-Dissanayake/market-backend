<?php

namespace App\Http;

use App\Http\Middleware\Cors;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;

class Middleware
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    public static array $middleware = [
        // ... other middleware
        Cors::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    public static array $middlewareGroups = [
        'web' => [
            // ... existing web middleware
        ],

        'api' => [
            Cors::class,
            ThrottleRequests::class.':api',
            SubstituteBindings::class,
        ],
    ];

    /**
     * The application's middleware aliases.
     *
     * @var array
     */
    public static array $middlewareAliases = [
        'cors' => Cors::class,
        // ... other middleware aliases
    ];
}