<?php

    namespace App\Core\Functions;

    function redirect(string $location, int $code) : void
    {
        header("Location: " . $location, $code);
    }