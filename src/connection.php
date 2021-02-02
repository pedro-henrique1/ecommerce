<?php


try {
    $conn = new PDO('mysql:host=localhost;dbname=ecommerce', DB_USER, DB_PASSWORD);
}catch (Exception $e) {
    echo 'error'. $e->getMessage();
}


