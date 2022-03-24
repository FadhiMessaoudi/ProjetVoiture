<?php
session_start();
$_SESSION['nom'] = $_GET['nom'];
header('Location:loginsuite.php');
?>