<?php

require __DIR__ . '/db.php';

if (resolve('/admin/')) {
    render('admin/dashboard', 'admin');
} elseif (resolve('/admin/users')) {
    render('admin/users', 'admin');
} elseif (resolve('/admin/produtos')) {
    render('admin/produtos', 'admin');
} elseif (resolve('/admin/produtos/create')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $CreatProduct();
//        header('location: /admin/pages');
//        exit();
    }
    render('admin/create', 'admin');
} else {
    header('Location: /');
}