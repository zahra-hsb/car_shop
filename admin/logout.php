<?php
require_once '../inc/config.php';
unset($_SESSION['admin']);
session_destroy();
header('Location: ../index.php')

 ?>
