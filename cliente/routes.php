<?php

require  __DIR__ . '/db.php';
if (resolve('/')) {
    $products = $allProduct();
    render('produto/home', 'produto', ['products' => $products]);
}