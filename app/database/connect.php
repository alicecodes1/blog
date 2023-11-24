<?php

$host = 'viaduct.proxy.rlwy.net';
$user = 'root';
$pass = 'c3AHgGbBHd5A22FE556ahC56hfd2a2Dh';
$db_name = 'railway';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
