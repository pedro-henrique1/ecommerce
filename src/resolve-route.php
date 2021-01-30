<?php

function resolve($route): bool|array
{
    $path = $_SERVER['PATH_INFO'] ?? '/';

    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if (preg_match($route, $path, $params)) {
        return $params;
    }
    return false;
}


