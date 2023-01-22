<?php
require_once '../inc/connection.php';
unset($_SESSION['admin']);
session_destroy();
header('Location: ../index.php')

 ?>
