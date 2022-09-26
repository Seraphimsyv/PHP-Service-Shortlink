<?php

    require_once  'config' . DIRECTORY_SEPARATOR . 'global.php';

    if(\App\Core\Classes\Request::session()::get("lang") == false)
        \App\Core\Classes\Request::session()::set("lang", "ua");
    
    use \App\Core\Functions;

    # Functions\dump(\App\Core\Classes\Router::$actions);
    
    \App\Core\Classes\Router::dispatcher();