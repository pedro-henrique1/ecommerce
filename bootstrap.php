<?php

session_start();

require __DIR__ . '/config.php';
require __DIR__ . '/src/resolve-route.php';
require __DIR__ . '/src/render.php';
require __DIR__ . '/src/error-handler.php';
require __DIR__ . '/src/connection.php';


if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
}elseif (resolve('/(.*)')) {
    require __DIR__ . '/cliente/routes.php';
}else {
    http_response_code(500);
    echo 'Pagina não encontrada';
}






