<?php


$allProduct = function () use($conn) {
    $stmt = $conn->query('SELECT * FROM  produtos');
    return $stmt->fetchAll();

    die();
};