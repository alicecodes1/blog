<?php

$host = 'roundhouse.proxy.rlwy.net';
$user = 'root';
$pass = 'HD2ACEgCd6DeDhfFFHbCEBBhdG651d4F';
$db_name = 'railway';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
