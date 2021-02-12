<?php

require  __DIR__ . '/db.php';

if (resolve('/admin')) {
    render('admin/dashboard', 'admin');
}elseif (resolve('/admin/users')) {
    render('admin/users', 'admin');
}
elseif (resolve('/admin/produtos')) {
    render('admin/produtos', 'admin');
} else {
    header('Location: /');
}