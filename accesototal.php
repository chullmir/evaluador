<?php 
session_start();
$_SESSION['name'] = 'MegaAdmin';
$_SESSION['profile'] = 'superadmin';

header("Location:index.php");

 ?>