<?php
// Include the file containing the BASE_URL constant definition
include("path.php");
session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();

header('location: ' . BASE_URL . '/index.php');