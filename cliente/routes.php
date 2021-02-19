<?php

require  __DIR__ . '/db.php';

if (resolve('/')) {
    $products = $allProduct();
    render('produto/home', 'produto', ['products' => $products]);
}elseif ($params = resolve( '/produtos/(\w+)')) {
    $product = $ProductSelect($params[1]);
    if (empty($product)) {
        header('Location: /');
        exit();
    }
    render('produto/products', 'produto', ['product' => $product]);
}