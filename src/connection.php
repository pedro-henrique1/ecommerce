<?php

mysqli_report(MYSQLI_REPORT_ERROR);

$conn = new PDO('mysql:host=localhost;dbname=ecommerce', DB_USER, DB_PASSWORD);

