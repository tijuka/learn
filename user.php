<?php
session_start();

$username = $_POST ['username'];
$_SESSION['name'] = $username;
header("Location: index.php");

?>


