<?php

require  __DIR__ . '/db.php';


if (resolve('/')) {

    render('produto/home', 'produto');
}