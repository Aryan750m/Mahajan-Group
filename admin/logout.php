<?php
require_once __DIR__ . '/../config.php';

$_SESSION['admin_logged_in'] = false;
unset($_SESSION['admin_logged_in']);
session_destroy();

header('Location: index.php');
exit;
?>
