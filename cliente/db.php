<?php

$allProduct = function () use ($conn) {
    $stmt = $conn->query('SELECT * FROM  produtos');
    return $stmt->fetchAll();
};

$ProductSelect = function ($reference) use ($conn) {
    $sql = 'SELECT * FROM produtos WHERE reference = :reference';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':reference', $reference);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
};
