<?php


use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function error($errnor = null, $errstr = null, $errfile = null, $errline = null)
{
    http_response_code(500);
    if (!DEBUG) {
        exit();
    }

    if (is_object($errnor)){
        $err = $errnor;
        $errnor = $err->getCode();
        $errstr = $err->getMessage();
        $errfile = $err->getFile();
        $errline = $err->getLine();
    }
    echo '<h1>Error</h1>';
    switch ($errnor) {
        case E_USER_ERROR:
            echo '<strong>ERROR</strong> [' . $errnor . ']' . $errstr . "<br>\n";
            echo 'FATAL error on line' . $errline . 'in file ' . $errfile;
            break;
        case E_USER_WARNING:
            echo '<strong>WARNING</strong> [' . $errnor . ']' . $errstr . "<br>\n";
            break;

        case E_USER_NOTICE:
            echo '<strong>NOTICE</strong> [' . $errnor . ']' . $errstr . "<br>\n";
            break;

        default:
            echo '<strong>UNKNOWN error type</strong> [' . $errnor . ']' . $errstr . "<br>\n";
            break;
    }
    exit();
}

set_error_handler('error');
set_exception_handler('error');