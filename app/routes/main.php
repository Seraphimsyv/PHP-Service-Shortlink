<?php

    # Main action
    \App\Core\Classes\Router::get('/', [\App\Controllers\Controller_Main::class, "index"]);

    # Clicks counter action
    \App\Core\Classes\Router::get('/clicks', [\App\Controllers\Controller_Main::class, "clicks"]);

    # Clicks counter action
    \App\Core\Classes\Router::post('/\/clicks\/[a-zA-Z0-9]{5}$/', [\App\Controllers\Controller_Main::class, "clicks"]);

    # Refer action
    \App\Core\Classes\Router::get('/\/[a-zA-Z0-9]{5}$/', [\App\Controllers\Controller_Main::class, "refer"]);

    # Generate short link
    \App\Core\Classes\Router::post('/generate', [\App\Controllers\Controller_Main::class, "generate"]);

    # Change lang action
    \App\Core\Classes\Router::post('/lang', [\App\Controllers\Controller_Main::class, "lang"]);