<?php


function ProductAll() use($conn) {
    $sql = 'SELECT * FROM produtos';
    $stmt = $conn->prepare();
}