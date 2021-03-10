<?php
Header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , X-Requested-With, Authorization');
Header("Access-Control-Allow-Methods", "PUT, POST, GET, DELETE, PATCH, OPTIONS");


require __DIR__ . '/../bootstrap.php';