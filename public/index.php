<?php
header("Access-Control-Allow-Origin:", "*");
header('Access-Control-Allow-Credentials:', 'false');
header('Access-Control-Allow-Headers:', ' cache-control,content-type,content-encoding,expires,vary,server,x-aspnet-version,set-cookie,x-powered-by,date,content-length');
header("Access-Control-Allow-Methods", 'GET, HEAD, POST, PUT, DELETE, CONNECT, OPTIONS, TRACE, PATCH');


require __DIR__ . '/../bootstrap.php';